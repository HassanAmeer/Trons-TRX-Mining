<?
include 'config.php';
// error_reporting(0);

/*
$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);
$d = $chkq['end_date'];
  $h = $chkq['end_h'];
  $m = $chkq['end_m'];
  $s = $chkq['end_s'];
*/

?>


<!DOCTYPE html>
<html lang="en-US" style
="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; --window-top:calc(var(--top-window-height) + 0px); --window-bottom:0px;" class="translated-ltr">

<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>login</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
    document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')</script><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><link rel="stylesheet" href="static/index.a5c69d49.css"><style type="text/css">




.col-3{width:93px}.flex{display:flex}.flex-one{flex:1}.flex-wrap{flex-wrap:wrap}.flex-center{display:flex;justify-content:center;align-items:center}.flex-around{display:flex;justify-content:space-around}.flex-end{display:flex;justify-content:flex-end}.flex-between{display:flex;justify-content:space-between!important}.justify-center{justify-content:center}.alcenter{align-items:center}.flex-column{display:flex;flex-direction:column}.rounded{border-radius:4px}.bg-white{background-color:#fff}.bg-EE9D18{background-color:#ee9d18}.bg-e5e5e5{background-color:#e5e5e5}.bg_FFA1AF{background-color:#ffa1af}.bg_f0f2f5{background-color:#f0f2f5}.bg_54BCB7{background-color:#54bcb7}.bg_C5CFD5{background-color:#c5cfd5}.c_172045{color:#172045}.c_FF5C5C{color:#ff5c5c}.c_099AFF{color:#099aff}.c_AAAAAA{color:#aaa}.c_F71D1D{color:#f71d1d}.c_313233{color:#313233}.c_4945FF{color:#4945ff}.c_10AA06{color:#10aa06}.c_FF9900{color:#f90}.c_B4B5B6{color:#b4b5b6}.c_C7D0D6{color:#c7d0d6}.c_6c757d{color:#6c757d}.c_8C9FAD{color:#8c9fad}.c_989AAA{color:#989aaa}.c_9B9898{color:#9b9898}.c_a9acb2{color:#a9acb2}.c_171717{color:#171717}.c_191919{color:#191919}.c_f07a9a{color:#f07a9a}.c_ef5079{color:#ef5079}.c_54BCB7{color:#54bcb7}.c_C5CFD5{color:#c5cfd5}.c_FFA1AF{color:#ffa1af}.c-EE9D18{color:#ee9d18}.c_FF5900{color:#ff5900}.c-00A212{color:#00a212}.c_2a2a2a{color:#2a2a2a}.c_FA9A43{color:#fa9a43}.c-white{color:#fff}.c_666{color:#666}.c_999{color:#999}.c_gray{color:#ccc}.c_969797{color:#969797}.c_8E8E93{color:#8e8e93}.c_abacb9{color:#abacb9}.c_848484{color:#848484}.c_F7B500{color:#f7b500}.c_8A6756{color:#8a6756}.c_F43F36{color:#f43f36}.c_FA6400{color:#fa6400}.c_red{color:red}.color-red{color:#ff5340}.c_black{color:#000}.c_333{color:c_333}.line:after{content:"";position:absolute;left:0;bottom:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_top:after{content:"";position:absolute;left:0;top:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom:after{content:"";position:absolute;left:0;bottom:0;background:#e6e6e6;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom_one:after{content:"";position:absolute;left:0;bottom:1px;background:#d5d5d8;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_right:after{content:"";position:absolute;top:0;right:0;background:#d5d5d8;width:1px;height:100%;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.w_650{width:325px}.h_100{height:100%}.h40{height:20px}.h120{height:60px}.h100{height:50px}.h110{height:55px}.h60{height:30px}.h80{height:40px}.h88{height:44px}.h90{height:45px}.mt32-mb48{margin-top:16px;margin-bottom:24px}.mt10{margin-top:5px}.mt48{margin-top:24px}.mb10{margin-bottom:5px}.mb16{margin-bottom:8px}.mb20{margin-bottom:10px}.mb30{margin-bottom:15px}.mb40{margin-bottom:20px!important}.mb45{margin-bottom:22px!important}.ml4{margin-left:2px}.ml10{margin-left:5px}.ml60{margin-left:30px}.ml70{margin-left:35px}.ml100{margin-left:50px}.ml110{margin-left:55px}.ml20{margin-left:10px}.ml30{margin-left:15px}.ml40{margin-left:20px}.mr10{margin-right:5px}.mr20{margin-right:10px}.mr30{margin-right:15px}.mr40{margin-right:20px}.mr70{margin-right:35px}.mr100{margin-right:50px}.mt20{margin-top:10px!important}.mt13{margin-top:6px}.mt30{margin-top:15px}.mt40{margin-top:20px}.mt50{margin-top:25px}.mt60{margin-top:30px}.mt80{margin-top:40px}.mt120{margin-top:60px}.mt160{margin-top:80px}.mlr10{margin-left:5px;margin-right:5px}.mlr30{margin-left:15px;margin-right:15px}.mlr40{margin-left:20px;margin-right:20px}.pl10{padding-left:5px}.pl30{padding-left:15px}.pl60{padding-left:30px}.pl130{padding-left:65px}.pl20{padding-left:10px}.pr10{padding-right:5px}.pr20{padding-right:10px}.pd10{padding:5px}.pd20{padding:10px!important}.pd30{padding:15px}.pd40{padding:20px}.plr10{padding-left:5px;padding-right:5px}.plr20{padding-left:10px;padding-right:10px}.plr30{padding-left:15px;padding-right:15px}.plr40{padding-left:20px!important;padding-right:20px!important}.plr56{padding-left:28px!important;padding-right:28px!important}.pt20{padding-top:10px}.pt30{padding-top:15px}.pt40{padding-top:20px}.pb20{padding-bottom:10px}.pb30{padding-bottom:15px}.pb40{padding-bottom:20px}.pb100{padding-bottom:50px}.mb20{margin-bottom:10px!important}.mb40{margin-bottom:20px!important}.mb60{margin-bottom:30px!important}.mb80{margin-bottom:40px!important}.text-center{text-align:center}.line-one{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.line-two{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden;text-overflow:ellipsis}.ft16{font-size:8px}.ft20{font-size:10px!important}.ft24{font-size:12px}.ft26{font-size:13px}.ft28{font-size:14px}.ft30{font-size:15px}.ft32{font-size:16px}.ft36{font-size:18px}.ft40{font-size:20px}.ft48{font-size:24px}.ft50{font-size:25px}.ft60{font-size:30px}.ft73{font-size:36px}.ft80{font-size:40px}.lh36{line-height:18px}.lh40{line-height:20px}.lh56{line-height:28px}.font-bold{font-weight:700}.relative{position:relative}.pf{font-family:PingFangSC-Semibold,PingFang SC}uni-page-body{font-size:14px;color:#212529;font-family:PingFangSC-Semibold,PingFang SC;background-color:#f5f8fa}body{background-color:#f5f8fa}</style>

<script charset="utf-8" src="static/js/pages-login-login.abd1149e.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
          }
.uni-app--showtabbar uni-page-wrapper::after {
          content: "";
          display: block;
          width: 100%;
          height: 50px;
          height: calc(50px + constant(safe-area-inset-bottom));
          height: calc(50px + env(safe-area-inset-bottom));
        }
.uni-app--showtabbar uni-page-head[uni-page-head-type="default"] ~ uni-page-wrapper {
          height: calc(100% - 44px - 50px);
          height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
          height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }</style><style type="text/css">@charset "UTF-8";







          .login-container[data-v-46374971]{min-height:100vh;background-image:url(static/img/login-bg.36a8d8de.jpg);background-size:100% 100%}.login-container .header[data-v-46374971]{padding:10px 15px}.login-container .header .left[data-v-46374971]{height:30px;line-height:30px}.login-container .header .language[data-v-46374971]{width:30px;height:30px;line-height:30px;color:#000;background:#f5c7eb;border-radius:50%;text-align:center}.login-container .header .language .head-dropdown[data-v-46374971]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.login-container .reg_content[data-v-46374971]{position:relative;padding-top:25px}.login-container .reg_content .logo[data-v-46374971]{width:154px;height:154px}.login-container .reg_content .form[data-v-46374971]{overflow:hidden;width:270px;margin:0 auto;padding-top:50px}.login-container .reg_content .form .item[data-v-46374971]{overflow:hidden;margin-bottom:12px}.login-container .reg_content .form .item .form-title[data-v-46374971]{font-size:16px;color:#191919;font-weight:700;margin-bottom:10px}.login-container .reg_content .form .item .label[data-v-46374971]{overflow:hidden;width:100%;border-radius:30px;background:#fff1f5;justify-content:flex-start;font-size:12px;height:52px;margin-left:14px;margin-bottom:13px}.login-container .reg_content .form .item .label uni-input[data-v-46374971]{width:60%;height:100%;padding-left:15px;font-size:14px;color:#ff8ab0}.login-container .reg_content .form .item .label .attach-img[data-v-46374971]{width:75px;height:30px}.login-container .reg_content .form .switchs .des[data-v-46374971]{color:#191919;font-size:10px;font-weight:700;margin-left:5px}.login-container .reg_content .button_grow[data-v-46374971]{overflow:hidden;width:247px;margin:50px auto 0}.login-container .reg_content .button_grow .btn[data-v-46374971]{overflow:hidden;width:100%;height:42px;border-radius:25px;display:flex;margin:0 auto 19px;align-items:center;background:#ff1964;justify-content:center;font-size:15px;font-weight:700;color:#fff}.login-container .reg_content .button_grow .btn.on[data-v-46374971]{background:#ffecf2;color:#ff1964}</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><script charset="utf-8" src="static/js/pages-login-register.1d6a21a9.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
          }
.uni-app--showtabbar uni-page-wrapper::after {
          content: "";
          display: block;
          width: 100%;
          height: 50px;
          height: calc(50px + constant(safe-area-inset-bottom));
          height: calc(50px + env(safe-area-inset-bottom));
        }
.uni-app--showtabbar uni-page-head[uni-page-head-type="default"] ~ uni-page-wrapper {
          height: calc(100% - 44px - 50px);
          height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
          height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }</style><style type="text/css">@charset "UTF-8";












.register-container[data-v-403a3954]{min-height:100vh;background-image:url(static/img/login-bg.36a8d8de.jpg);background-size:100% 100%}.register-container .header[data-v-403a3954]{padding:10px 15px}.register-container .header .header-icon[data-v-403a3954]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:210px}.register-container .header .header-icon uni-image[data-v-403a3954]{width:21px;height:21px}.register-container .header .btn[data-v-403a3954]{height:40px;line-height:40px;width:40px}.register-container .header .btn uni-image[data-v-403a3954]{width:21px;height:21px}.register-container .login_content[data-v-403a3954]{position:relative;padding-top:25px}.register-container .login_content .form .labeltxt[data-v-403a3954]{overflow:hidden;width:249px;font-size:12px;height:50px;padding-top:15px;border-bottom:1px solid #d8bac5;margin:9px auto 0;position:relative;box-sizing:border-box}.register-container .login_content .form .labeltxt uni-input[data-v-403a3954]{width:100%;height:100%;font-size:13px;color:#191919}.register-container .login_content .form .labeltxt uni-image[data-v-403a3954]{width:75px;height:30px;position:absolute;right:0;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.register-container .login_content .form .button[data-v-403a3954]{width:249px;height:42px;border-radius:25px;margin:22px auto 0;background:#ff1964;font-weight:700;color:#fff}.register-container .login_content .form .sign[data-v-403a3954]{color:#191919;height:65px}.register-container .login_content .form .font_box[data-v-403a3954]{overflow:hidden;background:#ffe7ef;width:275px;margin:0 auto;padding:22px 17px 20px 20px;border-radius:25px}.register-container .login_content .form .font_box .top .des[data-v-403a3954]{font-size:12px;color:#191919;font-weight:700;margin-left:7px}.register-container .login_content .form .font_box .tip[data-v-403a3954]{font-size:8px;color:#2a2a2a;line-height:15px;margin-top:5px}</style>



</head>






<body class="uni-body pages-login-register">
    <uni-app class="uni-app--maxwidth"><uni-page data-page=""><!----><!----><uni-page-wrapper><uni-page-body><uni-view data-v-403a3954="" class="register-container"><uni-view data-v-403a3954="" class="header flex-between alcenter"><uni-view data-v-403a3954="" class="btn flex-center">
      
      
      
      
      <uni-image data-v-403a3954="">
      <div id="backbtn" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABzUlEQVR4Xu3b0VHCQBDG8d0BR32SEvJgHnySEuzAEoQS7EA7sITQgR2IHfDmzSTOXAlW4DpRGYEBnvZ2v/NCAcf9f7fJQyBMhX+48H4aAIYJKFxguARyGYCqqiZ0cnpHn/wR38NCa99ZTEBV11OS8QszTfpwEXmMXXjQQIAH2I3/BXiNXbj59wD74ouZgIPxJIvYhpnG6fdrQF4CVvGQAJbxcADW8VAAHvEwAF7xEACe8e4A3vGuAAjxbgAo8S4ASPHmAGjxpgCI8WYAqPEmAMjxyQHQ45MC5BCfDCCX+CQAOcWrAxx+hkf3sXt70nqMpbmO2iOxIyc/j21oNDetuZYewOXVMzPdbm5OSKDjVS+Baj9AE9sw1zwx7bX0JqCupyyjJTFf7EwBNIIaQB/d3wdyQ1AFyBFBHSA3hCQAOSEkA8gFISlADgjJAdARTACQEcwAUBFMARARzAHQEFwAkBDcAFAQXAEQENwBvBEgADwRYAC8EKAAPBDgAKwRIAEsEWAB1ghEo4aJr7cetBb1d/nvFyXOlpsIIlLG3+XXp/7ztsgfQlEvTGwhjM9nRLKKXVhq/UACfQ/Qijy2zgBgoYz8HcMEIJ+Oxd6Kn4AvZySdUIVGIMEAAAAASUVORK5CYII=&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"> </div> </uni-image>

</uni-view><uni-view data-v-403a3954="" class="header-icon flex-center"><uni-image data-v-403a3954="">
      
      
      
      <!--------------for headphone -->
      <div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABACAYAAACunKHjAAAFlUlEQVR4Xu2ci3HUMBCGNxUAFQAVABUAFQAVQCoAKgAqACqAVACpAFIBUAFJBUAFMN+NN7PZk7yyLMtm5jTjyc3Z1uPff5/S5Uj6tbsicl9EbokIn/nLZdu5iOj1XUTORIS/i7ejhUd4JCKPh+t65Vi/ReTzcJ1W9hG+tgQQLPi5iLwQkdrF5yYOKO9E5L2I8LlZaw3EqwIALgb6Q3m/GIBTtbk5skoF5E0rJFoB8UBEPiR0Xud5IiJfhwsbUNKwH/TL9TTzAn0dD/2W9Jl9pgUQsOB1YgQkz/fo91wawxRsDf2lmML3s9gxBwgm92mQmMXhz6AeH2eJKP/yswwgqNrDWtBrgQCEL4M+2yljxJDOXAZEGDI+42CUbasGowaIFAiwAEmhBj0b9oMxr5lBq8CYCkQKBGwB+tsl8EmgjJdBDe/MAWMqEHgGJK/tx2AjllaFiGUICK9kwYApT6IX9f4UIAiQ3pqOUQdc3Nog6JQAA1Zar/JyCMBCPEqBYMHfTKQICOjnWuqQWxhqAjOszbg9BHCjYJQCgYdg4dqKkQ5F0f4BVBcV1gYwuNXZQAAAQGgjI7SgRGOscR/7QMKnjehzNK4pYQQqAeW0FVFtjdWbMVFl1FZVhFCceWdbBARukehRG2FsKpxeed3J4Zkn4X8RKyIgPMVubMhLRODjRWCCsoJaBoJNtjEgoNdP8xYZpI0hools4T52wWauWbUeA8Jb33sbdJcR2Ng2bJy2rLcbA8KqBWG0ry9Gk9jKfdRDg6yseowB8fc/VwudPqU9m6Um15wDwtuH0A9vRfyJeRSpeA4I7zb/R/ugmBQJNQeE98GRm90wIXZTs2qejIVKgCDBal2W7w2cNZiTgCCatMEHqTYhKwkMlndrWacHFrdJrkFOxGcrSOaOql9pnhG8SM3B5hYp6c2uGi9IiVxV3Q65tw1ggfDWNZprVW0w6nTG/VxVfazLS2+oQHgvwcvYBoIq3ZCBLWzi2kbVmsrVFpqPF5gTJQPUmYb3YJ22aMP3OzAUCHIKGzliB2CIL8MBBvG7LYdRF+xdvfbA+5oJQmTRCoI+D2uYv61V7FJ0gPBsiAovPn4Pc/0OdPE1kyju2SvcAISnVEnhZWtxRhgnOGHAjF/muxOAgD6q+5TnI4/B+56K1AQ9DTsQYTdE7Vzsus88EFNqDlYKaxZz/TZDafHIasK5B2JKKW4qHZdiSK2aXnnvAMQgngMQByB21fjLKveBEQdGjDOi1n1O8TatvYd3n6VFJOs+L3jJhptReK2LqA1iWoPQNKDyfrgkIKkNYpYAgj6nxjQ+xD6FEV660UkTf1ZiC3se1Eb0tAwZM0nX2HlOX4E7Vn2ycTcIoz/ovU/DyUM4e2DzkS2k4T6DBhjqDKmSoq9g7WqyCoTfRgcMECV3pzM9Ue/3Pkc3VpfSg0y/fp+Tx3T+rAXhMX+/Y7dLGOeU6lAJOt/yGapIFnulOn0hdVQv1Vmvg6XRQux9is6lZcO908E5n0uH6B3AaI2PWgUUw36sVXtIAZMr2hIK2PnzLixGXVjDFSaXBB/oVOmJ+ikSbPEsC8UDeL23e7X6S6FR4ZUA0WLCtg/cNbvT/M3toGGgufBcKSGM/TimasO6NxD+5G4JyHZhYwDkKtclY0hPIFL7DkWTHGICthByP4/CHmDTqj1YLyD81jwAkODlbE9qMykFWrPfhvQCwrOhJBr1OZAFAgDoc8/6l1LMP9cLiJotA59Mqftj8bjAajVIgbUGEKWpvgdi0X3WXkB41Yi25ADBp/qLbiL1AsKn+tAaeqc2j/UXfTbBW/zUTi8gkLDfeJ1i10qM65T+9p7tCQSSBgx/xiJawKK2QQfvCYSOCeXRf/v7Kw8GqkCIjQvtkuCtAYRdtD/oxT39twkRU5re/wfK82KZR+2RowAAAABJRU5ErkJggg==&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
      <!----></uni-image></uni-view>
      
      
      <uni-navigator data-v-403a3954=""><font style="vertical-align: inherit;"><a style="vertical-align: inherit; text-decoration: none; color: black;" href="index.php">Sign In</a></font></uni-navigator>
    
    
    
    
    
    
    
    </uni-view><uni-view data-v-403a3954="" class="login_content"><uni-view data-v-403a3954="" class="form"><uni-view data-v-403a3954="" class="labeltxt"><uni-input data-v-403a3954="" minlength="5"><div class="uni-input-wrapper">
        
        
      <div id="google_translate_element" style="background:red;display:none;"> </div>
        
        
        <div class="uni-input-placeholder input-placeholder" data-v-403a3954="" style="font-size: 13px; color: rgb(25, 25, 25);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></div>
      
      
      <input id="phone" maxlength="16" step="" enterkeyhint="done" pattern="[0-9]*" autocomplete="off" placeholder="Mobile Number" type="number" class="uni-input-input"><!----></div></uni-input></uni-view><uni-view data-v-403a3954="" class="labeltxt"><uni-input data-v-403a3954=""><div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-403a3954="" style="font-size: 13px; color: rgb(25, 25, 25);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></div>
      
      <input id="regpass" maxlength="16" step="" enterkeyhint="done" autocomplete="off" placeholder="Password" type="password" class="uni-input-input">
      
      <!----></div></uni-input></uni-view><uni-view data-v-403a3954="" class="labeltxt"><uni-input data-v-403a3954=""><div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-403a3954="" style="font-size: 13px; color: rgb(25, 25, 25);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></div>
        
        
        <input id="secpass" maxlength="16" placeholder="Security Password" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input"><!----></div></uni-input></uni-view><uni-view data-v-403a3954="" class="labeltxt"><uni-input data-v-403a3954=""><div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-403a3954="" style="font-size: 13px; color: rgb(25, 25, 25);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></div>
          
          <input id="regreff" maxlength="16" step="" placeholder="Invite Code" enterkeyhint="done" autocomplete="off" type="" class="uni-input-input"><!----></div></uni-input></uni-view>
          
          
       
          
          <!-------------------------->
<uni-view data-v-403a3954="" class="labeltxt"><uni-input data-v-403a3954=""><div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-403a3954="" style="font-size: 13px; color: rgb(25, 25, 25);"><font style="vertical-align: inherit;"></font></div>

<input id="captuaval" placeholder="Attach" maxlength="6" step="" enterkeyhint="done" autocomplete="off" type="text" class="uni-input-input">
          
 </div></uni-input><uni-image data-v-403a3954="">
            
            
            
            
 <h1 id="" onclick="cpatuarefreshf()" style="background-image: url(static/img/cap.jpg); background-size: cover; background-repeat: no-repeat; position:absolute; z-index:100; text-align:center; color:red; "><span id="cpatuarefreshv" style="padding:5px;letter-spacing:1px;"> </span> </h1>
            
 </uni-image></uni-view>
            

<uni-view id="signupbtn" type="button" data-v-403a3954="" class="button flex-center ft30"><font style="vertical-align: inherit;">
<font style="vertical-align: inherit;">Sign up</font>
</font></uni-view>
            
            
            
<uni-navigator data-v-403a3954="" class="sign flex-center"><font style="vertical-align: inherit;">

 <font style="vertical-align: inherit;"><a href="index.php" style="text-decoration: none; color:black;">Sign In</a></font>
            
            
            
            
         
 </font></uni-navigator><uni-view data-v-403a3954="" class="font_box"><uni-view data-v-403a3954="" class="top flex alcenter"><uni-switch data-v-403a3954="" style="transform: scale(0.8);"><div class="uni-switch-wrapper"><div class="switcherbtn uni-switch-input" style="background-color: rgb(237, 70, 111); border-color: rgb(237, 70, 111);"></div><div class="uni-checkbox-input uni-checkbox-input-checked" style="color: rgb(237, 70, 111); display: none;"></div></div></uni-switch><uni-view data-v-403a3954="" class="des"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Encrypted registration</font></font></uni-view></uni-view><uni-view data-v-403a3954="" class="tip"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The password is stored in a decentralized way and cannot be retrieved after it is lost. Please remember your password.</font></font></uni-view></uni-view></uni-view></uni-view></uni-view></uni-page-body></uni-page-wrapper></uni-page>
      
    </uni-app>

<div class="bluepopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 100px; right:0; border-right:14px solid rgb(0, 102, 255);">
 <div style="display:flex; flex-direction:row;">
  <img src="static/img/Coffee-blue.gif" style="width:2.5em;">
 </div>
 <div style="color:rgb(0, 102, 255); margin-top:0.5em; margin-left:5px; margin-right:5px;">
  <b class="popinerblue"> success </b>
 </div>
 <button class="popclosebtnblue" style="border: none; outline-offset:none;"> X </button>
</div>
</div>

<div class="redpopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 50px; right:0; border-right:14px solid rgb(230, 3, 48);">
  <div style="display:flex; flex-direction:row;">
   <img src="static/img/Coffee-red.gif" style="width:2.5em;">
  </div>
  <div style="color:rgb(236, 17, 46); margin-top:0.5em; margin-left:5px; margin-right:5px;">
   <b class="popinerred"> Warning </b>
  </div>
  <button class="popclosebtnred" style="border: none; outline-offset:none;"> X </button>
 </div>
</div>
     
      </body>
      <script src="static/js/jqoffline.js"></script>
      <script>
 $(document).on('click','#backbtn', function(){
     window.location.href="index.php";
    })
    /////////////////
$(document).on('click','.switcherbtn', function(){
    $('.switcherbtn').toggleClass('uni-switch-input-checked');
});
    /////////////////
///////////////////////////////
/////////////// ///////////////
 $(document).on('click','#signupbtn',function(){
   var regphone = $('#phone').val();
   var regpass = $('#regpass').val();
   var regsecpass = $('#secpass').val();
   var regreff = $('#regreff').val();
   var captuaval = $('#captuaval').val();
   
  if(regphone == "" || regpass == "")
   {
     $('.redpopup').fadeIn();
     $('.popinerred').html('× All feilds are required');
   }else if(captuaval == captchav){
      $.post(
      "jaxo1.php",
      {regphonejs:regphone,regpassj:regpass,regsecpassjs:regsecpass,regreffjs:regreff},
   function(chkregf){
   if(chkregf == 1){
       $('.bluepopup').fadeIn();
       $('.popinerblue').html(' Account Created');
     }else if(chkregf == 0){
      $('.redpopup').fadeIn();
     $('.popinerred').html(' Already Have an Account');
      }  }); // end post 
    }else{
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Invalid Captua');
    }
  });
///////////////////////////////
///////////////////////////////
//////////////////////////
$(document).on('click','.popclosebtnblue', function(){
      $('.bluepopup').hide();
});                     
$(document).on('click','.popclosebtnred', function(){
      $('.redpopup').hide();
});                     
////////////////////////
////////////////////////

////////////////////////

////////////////////////
function cpatuarefreshf(){
    chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    captchav = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
    captchav = captchav + chars[Math.floor(Math.random() * chars.length )];
    }
    $('#cpatuarefreshv').html(captchav);
}         
//////////////

window.onLoad = cpatuarefreshf();

      </script>
    
 
     







</html>