<?
include '../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }

if (isset($_GET['usrid'])) {
 $usrid = $_GET['usrid'];
}else{ $usrid = ' usrid not set'; }

if (isset($_GET['trxmoney'])) {
 $trxmoney = $_GET['trxmoney'];
}else{ $trxmoney = ' payments not set'; }

if (isset($_GET['walletis'])) {
    $wallet = $_GET['walletis'];
}else{ $wallet = 'wallet not attached'; }



///////////////////////////////////////////

  require_once('paykassa_api.class.php');
  // the plug-in class to access the API, you can download it at the link

    $paykassa_api_id = $forapiid;
    $paykassa_api_password = $forapipass;
    $paykassa_merchant_id = $formarchid;
    $test = false;
    // False test mode - off, True - Enabled

if(isset($_POST['payto']))
{  
  $trxmoneyp = $_POST['trxmoneyp'];
  $trxwalletp = $_POST['trxwalletp'];
  
  $amount = $trxmoneyp;
    $system = "tron";
    $currency = 'TRX';
    $wallet = $trxwalletp;
    $comment = ' withdrawal By Admin TRX Account';
    $paid_commission = '';
    $tag = '';
    $real_fee = true; // supported - BTC, LTC, DOGE, DASH, BSV, BCH, ZEC, ETH
    $priority = "high"; // low - slowly, medium - medium, high - quickly

    $paykassa = new PayKassaAPI(
        $paykassa_api_id,       // ID api
        $paykassa_api_password, // password api
        $test
    );


    $system_id = [
        "tron" => 27, // supported currencies TRX    
    ];

    $res = $paykassa->api_payment(
        $paykassa_merchant_id,  // required parameter merchant id from which you want to make a withdrawal
        $system_id[$system],    // mandatory parameter, the id of the payment method
        $wallet,                // mandatory parameter, the number of wallet which sent the money
        (float)$amount,         // required parameter the payment amount, how much to send
        $currency,              // mandatory parameter, the currency of payment
        $comment,               // mandatory parameter, review the payment, you can pass a null
        $paid_commission,       // an optional parameter that who pays the fee for transfer, shop or client
        $tag,                   // optional, the tag for payment, you can pass empty
        $real_fee,              // deprecated parameter, always set to true
        $priority               // optional parameter(default is medium), is used to set
                                // priority inclusion in the unit along with a $real_fee === true
    );

    if ($res['error']) {        // $res['error'] - true if the error
    echo '<div class="alert alert-danger" role="alert">'. $res['message'] .'!
       </div>';
       // $res['message'] - the text of the error message
        //actions in case of an error
    } else {
      echo '<div class="alert alert-success" role="alert"> You have been Paid '. $trxmoney .' TRX To this ID : '. $usrid .' <u class="text-danger"> ! page Not refferesh after Paid (only can go back) </u>
       </div>';
    }///// if success
   
 }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Payouts </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <style>
    #bg{width: 100%; height: auto; background-size: cover;
      background-image:url('../../static/img/commonbg.36a8d8d.36a8d8de.jpg');
      background-position: fixed;
      background-repeat:no-repeat;
     
    }
 
  </style>
  <body id="bg">
   <center style="background:none; backdrop-filter:blur(10px); box-shadow:1px 1px 18px black; border-top:4px solid #fe8c9f;"> <button onclick="history.back()" class="float-start fa fa-angle-left text-muted" style="background:none; border:none; font-size:2rem;outline:none;"> </button>  <h1> Pay By Admin !</h1></center> 
    
   <u style="color:orange;" class="fa fa-user-tie"> User Details </u>
   <br>
   <br>
    
  <div style="display:flex;flex-direction:row;">
<div>
<h3 class="text-primary fa fa-id-card" style="text-shadow:1px 1px 1px black;"> Id : </h3>
</div>
<div>
 <p style="color:indigo; margin-left:1rem; letter-spacing:2px;"> <? echo $usrid; ?> </p>
</div>
  </div> 
    
    <br>
  <div style="display:flex;flex-direction:row;">
<div>
<h3 class="text-primary" style="text-shadow:1px 1px 1px black;"> <b class="text-primary fad fa-wallet"> </b> Wallet : </h3>
</div>
<div>
 <p style="color:indigo; margin-left:1rem; letter-spacing:2px;"> <? echo $wallet; ?> </p>
</div>
  </div> 
    
    <br>
  <div style="display:flex;flex-direction:row;">
<div>
<h3 class="text-primary" style="text-shadow:1px 1px 1px black;"> <b class="text-primary fa fa-database"> </b> TRX : </h3>
</div>
<div>
 <p style="color:indigo; margin-left:1rem; letter-spacing:2px;"> <? echo $trxmoney; ?> TRX </p>
</div>
  </div> 
    
    
 <div style="position:fixed; z-index:100; bottom:20px; width:100%;">
<center>  <form method="post">
  <input type="hidden" value="<? echo $trxmoney; ?>" name="trxmoneyp">
  <input type="hidden" value="<? echo $wallet; ?>" name="trxwalletp">
  
  
  
    <button type="submit" name="payto" style="letter-spacing:5px; color:orange;font-size:3rem; background:none;border:none; border-bottom:2px solid #fe7e94;margin:auto;text-shadow:1px 1px 2px #fe7f95;outline:none;">
       PAY 
    </button>
  </form>
</center>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
























