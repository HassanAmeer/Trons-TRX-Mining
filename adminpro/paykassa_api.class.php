<?php
    class PayKassaAPI {
        public $version = "0.5";
        public function __construct ($api_id, $api_key, $test=false)  {
            $this->domain = $_SERVER['SERVER_NAME'];
            $this->params = [];
            $this->params["api_id"] = $api_id;
            $this->params["api_key"] = $api_key;
            $this->params["domain"] = $this->domain;
            $this->params["test"] = $test;
            
            
            global $API_SERVER_TOKEN;
            $this->params["api_server_token"] = isset($API_SERVER_TOKEN) ? $API_SERVER_TOKEN : '';

            $this->url = "https://paykassa.app/api/".$this->version."/index.php";

            $this->curl = null;
            if (null === $this->curl) {
                $this->curl = curl_init();
                curl_setopt($this->curl, CURLOPT_FAILONERROR, true);
                curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 0);

                if (!defined('CURL_HTTP_VERSION_2_0')) {
                    define('CURL_HTTP_VERSION_2_0', 3);
                }

                curl_setopt($this->curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);

                curl_setopt($this->curl, CURLOPT_HTTPHEADER,[
                    'Content-type: application/x-www-form-urlencoded',
                ]);
            }
        }

        private function ok($message, $data=[]) {
            return [
                'error' => true,
                'message' => $message,
                'data' => $data,
            ];
        }

        private function err($message, $data=[]) {
            return [
                'error' => true,
                'message' => $message,
                'data' => $data,
            ];
        }

        public function post_json_request($url, $data=[]) {
            return $this->request_post($url, $data);
        }

        public function request_post($url, $data=[]) {
            curl_setopt($this->curl, CURLOPT_URL, $url);
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($this->curl, CURLOPT_POST, 1);

            $res = curl_exec($this->curl);
            if (false === $res) {
                return $this->err(
                    curl_error($this->curl)
                );
            }
            $data = json_decode($res, true);
            if (null === $data || false === $data) {
                log_write("Json parse error. Cryptokassa API", $res, $data);
                return $this->err(
                    'Json parse error: '. json_last_error_msg()
                );
            }

            if (!isset($data['error'], $data['message'])) {
                return $this->err('Bad format response');
            }

            return $data;
        }

        private function query($url, $data=[]) {
            $result = $this->post_json_request($url, $data + $this->params);
            if ($result === false || $result === null) {
                return [
                    "error" => true,
                    "message" => "Ошибка запроса к сервису!",
                ];
            }
            return $result;
        }

        public function api_get_shop_balance($shop) {
            $fields = ["shop", ];
            return $this->query($this->url, [
                "func" => "api_get_shop_balance",
            ] + compact($fields));
        }


        // $priority { low, medium, high }
        public function api_payment($shop, $system, $number, $amount, $currency, $comment, $paid_commission='', $tag='', $real_fee=false, $priority='medium') {
            $fields = ["shop", "system", "number", "amount", "currency", "comment", "paid_commission", "tag", "real_fee", "priority", ];
            return $this->query($this->url, [
                "func" => "api_payment",
            ] + compact($fields));
        }

        public function api_payment_within($shop, $system, $amount, $currency, $comment, $paid_commission='', $tag='') {
            $fields = ["shop", "system", "amount", "currency", "comment", "paid_commission", "tag"];
            return $this->query($this->url, [
                "func" => "api_payment_within",
            ] + compact($fields));
        }

        public function alert($message) { ?>
            <script>window.alert("<?php echo $message; ?>");</script>
        <?php
        }

        public function format_currency($money, $currency) {
            if (strtolower($currency) === "btc") {
                return format_btc($money);
            }
            return format_money($money);
        }

        public function api_get_account($site, $label) {
            $fields = ["site", "label"];
            return $this->query($this->url, [
                    "func" => "api_get_account",
                ] + compact($fields));
        }

        public function format_btc($money) {
            return sprintf("%01.8f", $money);
        }

        public function format_money($money) {
            return sprintf("%01.2f", $money);
        }

        public function post($key, $value=false) {
            if ($value) {
                $_POST[$key] = $value;
            }
            return isset($_POST[(string)$key]) ? $_POST[(string)$key] : "";
        }

        public function get($key, $value=false) {
            if ($value) {
                $_GET[$key] = $value;
            }
            return isset($_GET[(string)$key]) ? $_GET[(string)$key] : "";
        }

        public function request($key, $value=false) {
            if ($value) {
                $_REQUEST[$key] = $value;
            }
            return isset($_REQUEST[(string)$key]) ? $_REQUEST[(string)$key] : "";
        }
    }
