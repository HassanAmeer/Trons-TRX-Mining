


<?php
include 'config.php';
session_start();
if(!isset($_COOKIE['coklog']))
{ header('location:index.php'); }
$vusrlog = $_COOKIE['coklog'];

if(!isset($_COOKIE['vusrifpk']))
{ header('location:recharge.php'); }
$vusridf = $_COOKIE['vusrifpk'];

$vusrdata = "SELECT * FROM `userslog` WHERE usrphone = '$vusrlog'";
$vusrdataq =mysqli_query($db,$vusrdata);
$vusrdataf = mysqli_fetch_array($vusrdataq);
//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);



//////////////////////////////////////
//////////////////////////////////////



////////// 1. generate adress

// <!-- Invoicing for payment address for payment -->

    require_once('paykassa_sci.class.php'); //the plug-in class to work with SCI, you can download it at the link

    $paykassa_merchant_id = $formarchid;  // the ID of the merchant
    $paykassa_merchant_password = $formarchpass;     // merchant password
    $test = false;
  // False test mode - off, True - Enabled


    $amount = 0.350;
    $system = 'tron';
    $currency = 'TRX';
    $order_id = $vusridf;
    $comment = 'promo';


    $paykassa = new PayKassaSCI(
        $paykassa_merchant_id,
        $paykassa_merchant_password,
        $test
    );

    $system_id = [
        "tron" => 27, // supported currencies TRX    
    ];

    $res = $paykassa->sci_create_order_get_data(
        $amount,    // required parameter the payment amount example: 1.0433
        $currency,  // mandatory parameter, currency, example: BTC
        $order_id,  // mandatory parameter, the unique numeric identifier of the payment in your system, example: 150800
        $comment,   // mandatory parameter, text commentary of payment example: service Order #150800
        $system_id[$system] // a required parameter, for example: 12 - Ethereum
    );

    if ($res['error']) {        // $res['error'] - true if the error
        echo $res['message'];   // $res['message'] - the text of the error message
        // actions in case of an error
    } else {
        $invoice = $res['data']['invoice'];     // The operation number in the system Paykassa.pro
        $order_id = $res['data']['order_id'];   // The order in the merchant
        $wallet = $res['data']['wallet'];       // Address for payment
        $amount = $res['data']['amount'];       // The amount to payment may change if the commission is transferred to the client
        $system = $res['data']['system'];       // A system in which the billed
        $url = $res['data']['url'];             // The link to proceed for payment
        $tag = $res['data']['tag'];             // Tag to indicate the translation to ripple
/*
echo 'Send funds to this address '.$wallet . ( !empty($tag) ? ' Tag: ' . $tag : '' ) . ' Balance will be updated automatically.';
*/
         $detadrestrx = $wallet;
        //Send funds to this address 32e6LAW8Nps9GJMSQK4Busm6UUUkUc4tzE. Balance will be updated automatically.
    }

// <!-- /.Invoicing for payment address for payment -->


























?>



<!DOCTYPE html>
<html lang="en" style="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; --window-top:calc(var(--top-window-height) + 0px); --window-bottom:0px;"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Recharge</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
  document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')</script><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover">
  
  <link rel="stylesheet" href="/static/index.a5c69d49.css"><style type="text/css">



.col-3{width:93px}.flex{display:flex}.flex-one{flex:1}.flex-wrap{flex-wrap:wrap}.flex-center{display:flex;justify-content:center;align-items:center}.flex-around{display:flex;justify-content:space-around}.flex-end{display:flex;justify-content:flex-end}.flex-between{display:flex;justify-content:space-between!important}.justify-center{justify-content:center}.alcenter{align-items:center}.flex-column{display:flex;flex-direction:column}.rounded{border-radius:4px}.bg-white{background-color:#fff}.bg-EE9D18{background-color:#ee9d18}.bg-e5e5e5{background-color:#e5e5e5}.bg_FFA1AF{background-color:#ffa1af}.bg_f0f2f5{background-color:#f0f2f5}.bg_54BCB7{background-color:#54bcb7}.bg_C5CFD5{background-color:#c5cfd5}.c_172045{color:#172045}.c_FF5C5C{color:#ff5c5c}.c_099AFF{color:#099aff}.c_AAAAAA{color:#aaa}.c_F71D1D{color:#f71d1d}.c_313233{color:#313233}.c_4945FF{color:#4945ff}.c_10AA06{color:#10aa06}.c_FF9900{color:#f90}.c_B4B5B6{color:#b4b5b6}.c_C7D0D6{color:#c7d0d6}.c_6c757d{color:#6c757d}.c_8C9FAD{color:#8c9fad}.c_989AAA{color:#989aaa}.c_9B9898{color:#9b9898}.c_a9acb2{color:#a9acb2}.c_171717{color:#171717}.c_191919{color:#191919}.c_f07a9a{color:#f07a9a}.c_ef5079{color:#ef5079}.c_54BCB7{color:#54bcb7}.c_C5CFD5{color:#c5cfd5}.c_FFA1AF{color:#ffa1af}.c-EE9D18{color:#ee9d18}.c_FF5900{color:#ff5900}.c-00A212{color:#00a212}.c_2a2a2a{color:#2a2a2a}.c_FA9A43{color:#fa9a43}.c-white{color:#fff}.c_666{color:#666}.c_999{color:#999}.c_gray{color:#ccc}.c_969797{color:#969797}.c_8E8E93{color:#8e8e93}.c_abacb9{color:#abacb9}.c_848484{color:#848484}.c_F7B500{color:#f7b500}.c_8A6756{color:#8a6756}.c_F43F36{color:#f43f36}.c_FA6400{color:#fa6400}.c_red{color:red}.color-red{color:#ff5340}.c_black{color:#000}.c_333{color:c_333}.line:after{content:"";position:absolute;left:0;bottom:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_top:after{content:"";position:absolute;left:0;top:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom:after{content:"";position:absolute;left:0;bottom:0;background:#e6e6e6;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom_one:after{content:"";position:absolute;left:0;bottom:1px;background:#d5d5d8;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_right:after{content:"";position:absolute;top:0;right:0;background:#d5d5d8;width:1px;height:100%;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.w_650{width:325px}.h_100{height:100%}.h40{height:20px}.h120{height:60px}.h100{height:50px}.h110{height:55px}.h60{height:30px}.h80{height:40px}.h88{height:44px}.h90{height:45px}.mt32-mb48{margin-top:16px;margin-bottom:24px}.mt10{margin-top:5px}.mt48{margin-top:24px}.mb10{margin-bottom:5px}.mb16{margin-bottom:8px}.mb20{margin-bottom:10px}.mb30{margin-bottom:15px}.mb40{margin-bottom:20px!important}.mb45{margin-bottom:22px!important}.ml4{margin-left:2px}.ml10{margin-left:5px}.ml60{margin-left:30px}.ml70{margin-left:35px}.ml100{margin-left:50px}.ml110{margin-left:55px}.ml20{margin-left:10px}.ml30{margin-left:15px}.ml40{margin-left:20px}.mr10{margin-right:5px}.mr20{margin-right:10px}.mr30{margin-right:15px}.mr40{margin-right:20px}.mr70{margin-right:35px}.mr100{margin-right:50px}.mt20{margin-top:10px!important}.mt13{margin-top:6px}.mt30{margin-top:15px}.mt40{margin-top:20px}.mt50{margin-top:25px}.mt60{margin-top:30px}.mt80{margin-top:40px}.mt120{margin-top:60px}.mt160{margin-top:80px}.mlr10{margin-left:5px;margin-right:5px}.mlr30{margin-left:15px;margin-right:15px}.mlr40{margin-left:20px;margin-right:20px}.pl10{padding-left:5px}.pl30{padding-left:15px}.pl60{padding-left:30px}.pl130{padding-left:65px}.pl20{padding-left:10px}.pr10{padding-right:5px}.pr20{padding-right:10px}.pd10{padding:5px}.pd20{padding:10px!important}.pd30{padding:15px}.pd40{padding:20px}.plr10{padding-left:5px;padding-right:5px}.plr20{padding-left:10px;padding-right:10px}.plr30{padding-left:15px;padding-right:15px}.plr40{padding-left:20px!important;padding-right:20px!important}.plr56{padding-left:28px!important;padding-right:28px!important}.pt20{padding-top:10px}.pt30{padding-top:15px}.pt40{padding-top:20px}.pb20{padding-bottom:10px}.pb30{padding-bottom:15px}.pb40{padding-bottom:20px}.pb100{padding-bottom:50px}.mb20{margin-bottom:10px!important}.mb40{margin-bottom:20px!important}.mb60{margin-bottom:30px!important}.mb80{margin-bottom:40px!important}.text-center{text-align:center}.line-one{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.line-two{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden;text-overflow:ellipsis}.ft16{font-size:8px}.ft20{font-size:10px!important}.ft24{font-size:12px}.ft26{font-size:13px}.ft28{font-size:14px}.ft30{font-size:15px}.ft32{font-size:16px}.ft36{font-size:18px}.ft40{font-size:20px}.ft48{font-size:24px}.ft50{font-size:25px}.ft60{font-size:30px}.ft73{font-size:36px}.ft80{font-size:40px}.lh36{line-height:18px}.lh40{line-height:20px}.lh56{line-height:28px}.font-bold{font-weight:700}.relative{position:relative}.pf{font-family:PingFangSC-Semibold,PingFang SC}uni-page-body{font-size:14px;color:#212529;font-family:PingFangSC-Semibold,PingFang SC;background-color:#f5f8fa}body{background-color:#f5f8fa}</style><script charset="utf-8" src="/static/js/pages-login-login.abd1149e.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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

          
          
          
          
          
          
          
          
          
          
          .login-container[data-v-46374971]{min-height:100vh;background-image:url(/static/img/login-bg.36a8d8de.jpg);background-size:100% 100%}.login-container .header[data-v-46374971]{padding:10px 15px}.login-container .header .left[data-v-46374971]{height:30px;line-height:30px}.login-container .header .language[data-v-46374971]{width:30px;height:30px;line-height:30px;color:#000;background:#f5c7eb;border-radius:50%;text-align:center}.login-container .header .language .head-dropdown[data-v-46374971]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.login-container .reg_content[data-v-46374971]{position:relative;padding-top:25px}.login-container .reg_content .logo[data-v-46374971]{width:154px;height:154px}.login-container .reg_content .form[data-v-46374971]{overflow:hidden;width:270px;margin:0 auto;padding-top:50px}.login-container .reg_content .form .item[data-v-46374971]{overflow:hidden;margin-bottom:12px}.login-container .reg_content .form .item .form-title[data-v-46374971]{font-size:16px;color:#191919;font-weight:700;margin-bottom:10px}.login-container .reg_content .form .item .label[data-v-46374971]{overflow:hidden;width:100%;border-radius:30px;background:#fff1f5;justify-content:flex-start;font-size:12px;height:52px;margin-left:14px;margin-bottom:13px}.login-container .reg_content .form .item .label uni-input[data-v-46374971]{width:60%;height:100%;padding-left:15px;font-size:14px;color:#ff8ab0}.login-container .reg_content .form .item .label .attach-img[data-v-46374971]{width:75px;height:30px}.login-container .reg_content .form .switchs .des[data-v-46374971]{color:#191919;font-size:10px;font-weight:700;margin-left:5px}.login-container .reg_content .button_grow[data-v-46374971]{overflow:hidden;width:247px;margin:50px auto 0}.login-container .reg_content .button_grow .btn[data-v-46374971]{overflow:hidden;width:100%;height:42px;border-radius:25px;display:flex;margin:0 auto 19px;align-items:center;background:#ff1964;justify-content:center;font-size:15px;font-weight:700;color:#fff}.login-container .reg_content .button_grow .btn.on[data-v-46374971]{background:#ffecf2;color:#ff1964}</style><script charset="utf-8" src="/static/js/pages-home-home.2f1faa9c.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
      }</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
      }</style><style type="text/css">.uni-transition[data-v-016ede03]{transition-timing-function:ease;transition-duration:.3s;transition-property:opacity,-webkit-transform;transition-property:transform,opacity;transition-property:transform,opacity,-webkit-transform}.fade-in[data-v-016ede03]{opacity:0}.fade-active[data-v-016ede03]{opacity:1}.slide-top-in[data-v-016ede03]{
/* transition-property: transform, opacity; */-webkit-transform:translateY(-100%);transform:translateY(-100%)}.slide-top-active[data-v-016ede03]{-webkit-transform:translateY(0);transform:translateY(0)
/* opacity: 1; */}.slide-right-in[data-v-016ede03]{-webkit-transform:translateX(100%);transform:translateX(100%)}.slide-right-active[data-v-016ede03]{-webkit-transform:translateX(0);transform:translateX(0)}.slide-bottom-in[data-v-016ede03]{-webkit-transform:translateY(100%);transform:translateY(100%)}.slide-bottom-active[data-v-016ede03]{-webkit-transform:translateY(0);transform:translateY(0)}.slide-left-in[data-v-016ede03]{-webkit-transform:translateX(-100%);transform:translateX(-100%)}.slide-left-active[data-v-016ede03]{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}.zoom-in-in[data-v-016ede03]{-webkit-transform:scale(.8);transform:scale(.8)}.zoom-out-active[data-v-016ede03]{-webkit-transform:scale(1);transform:scale(1)}.zoom-out-in[data-v-016ede03]{-webkit-transform:scale(1.2);transform:scale(1.2)}</style><style type="text/css">@charset "UTF-8";

  
  
  
  
  .uni-popup[data-v-ad4fc5b6]{position:fixed;z-index:99999}.uni-popup__mask[data-v-ad4fc5b6]{position:absolute;top:0;bottom:0;left:0;right:0;background-color:rgba(0,0,0,.4);opacity:0}.mask-ani[data-v-ad4fc5b6]{transition-property:opacity;transition-duration:.2s}.uni-top-mask[data-v-ad4fc5b6]{opacity:1}.uni-bottom-mask[data-v-ad4fc5b6]{opacity:1}.uni-center-mask[data-v-ad4fc5b6]{opacity:1}.uni-popup__wrapper[data-v-ad4fc5b6]{display:block;position:absolute}.top[data-v-ad4fc5b6]{top:var(--window-top)}.bottom[data-v-ad4fc5b6]{bottom:0}.uni-popup__wrapper-box[data-v-ad4fc5b6]{display:block;position:relative;
/* iphonex
*/padding-bottom:constant(safe-area-inset-bottom);padding-bottom:env(safe-area-inset-bottom)}.content-ani[data-v-ad4fc5b6]{transition-property:opacity,-webkit-transform;transition-property:transform,opacity;transition-property:transform,opacity,-webkit-transform;transition-duration:.2s}.uni-top-content[data-v-ad4fc5b6]{-webkit-transform:translateY(0);transform:translateY(0)}.uni-bottom-content[data-v-ad4fc5b6]{-webkit-transform:translateY(0);transform:translateY(0)}.uni-center-content[data-v-ad4fc5b6]{-webkit-transform:scale(1);transform:scale(1);opacity:1}</style><style type="text/css">@charset "UTF-8";

  
  
  
  
  
  .home-container[data-v-335a4cfc]{min-height:100vh;background-image:url(/static/img/commonbg.36a8d8d.36a8d8de.jpg);padding-bottom:85px;background-size:100%}.home-container .header-icon[data-v-335a4cfc]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.home-container .header-icon uni-image[data-v-335a4cfc]{width:21px;height:21px}.home-container .header-icon .counter[data-v-335a4cfc]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.home-container .head-dropdown[data-v-335a4cfc]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.home-container .notice-pop-container[data-v-335a4cfc]{width:75vw;background-color:#fff}.home-container .notice-pop-container .notification_title[data-v-335a4cfc]{color:#010166;height:45px;line-height:45px;border-bottom:1px solid #f5f2f2;text-align:center;font-weight:700;font-size:18px}.home-container .notice-pop-container .notification_content[data-v-335a4cfc]{height:250px;padding:15px;max-height:250px;min-height:100px;box-sizing:border-box}.home-container .notice-pop-container .notification_btn[data-v-335a4cfc]{height:45px;padding:0 10px;border-top:1px solid #f5f2f2}.home-container .notice-pop-container .notification_btn .button[data-v-335a4cfc]{width:96%;height:32px;line-height:32px;text-align:center;color:#fff;background:#ddd}.home-container .notice-pop-container .notification_btn .button.close[data-v-335a4cfc]{background:#d4d170}.home-container .bodydiv .contact[data-v-335a4cfc]{width:338px;height:57px;background-image:url(/static/img/icon_15.ac3e2f9.ac3e2f9e.png);background-size:100% 100%;margin-left:17px;margin-top:25px;padding-left:69px;padding-top:5px;box-sizing:border-box}.home-container .bodydiv .main_problem[data-v-335a4cfc]{width:338px;height:70px;background-image:url(/static/img/icon_18.d6bdad9.d6bdad9b.png);background-size:100% 100%;margin-left:17px;margin-top:8px;padding-top:17px;padding-left:70px;box-sizing:border-box}.home-container .bodydiv .navbar[data-v-335a4cfc]{display:flex;flex-wrap:wrap;justify-content:space-between;width:100%;padding:0 20px;margin-bottom:67px;box-sizing:border-box}.home-container .bodydiv .navbar .nav-item[data-v-335a4cfc]{width:33.3%;margin-top:21px}.home-container .bodydiv .navbar .nav-item uni-image[data-v-335a4cfc]{display:block;width:60px;height:60px;margin:0 auto}.home-container .bodydiv .label[data-v-335a4cfc]{width:341px;height:85px;background-image:url(/static/img/icon_39.8e09b5a.8e09b5a4.png);background-size:100% 100%;margin-left:14px;margin-bottom:13px;padding-left:90px;padding-top:20px;box-sizing:border-box}.home-container .bodydiv .label.on[data-v-335a4cfc]{background-image:url(/static/img/icon_41.794ced2.794ced21.png)}.home-container .bodydiv .main_join[data-v-335a4cfc]{width:100%;height:422px;background-size:100% 100%;background-image:url(/static/img/bgbg_02.54c1fc0.54c1fc0b.png);padding-top:65px;text-align:center;box-sizing:border-box}.home-container .bodydiv .main_join .des[data-v-335a4cfc]{width:245px;text-align:center;margin:0 auto;line-height:17px}.home-container .bodydiv .main_join uni-image[data-v-335a4cfc]{width:338px;height:190px;margin:15px auto 0}.home-container .bodydiv .main_join .btn[data-v-335a4cfc]{width:148px;height:35px;border-radius:25px;font-size:16px;font-weight:700;color:#fff;background-color:#e73b66;margin:10px auto 0}.home-container .bodydiv .main_display .h3[data-v-335a4cfc]{font-size:21px;font-weight:700;margin-left:23px;color:#191919}.home-container .bodydiv .main_display .box[data-v-335a4cfc]{height:184px;background-size:100% 100%;background-image:url(/static/img/icon_46.3328697.33286971.png);padding:96px 22px 0 19px;box-sizing:border-box}.home-container .bodydiv .main_display .box .item[data-v-335a4cfc]{width:158px;overflow:hidden}.home-container .bodydiv .main_display .box .item uni-view[data-v-335a4cfc]{text-align:center;font-size:20px;color:#fff;margin-bottom:10px;font-weight:700}.home-container .bodydiv .main_display .box .item uni-text[data-v-335a4cfc]{display:block;text-align:center;font-size:9px;opacity:.8;color:#fff}.home-container .bodydiv .main_about[data-v-335a4cfc]{height:725px;background-image:url(/static/img/bgbg_04.0954b65.0954b651.png);background-size:100% 100%}.home-container .bodydiv .main_about .about[data-v-335a4cfc]{height:500px;padding:30px 0 0;box-sizing:border-box}.home-container .bodydiv .main_about .about .title[data-v-335a4cfc]{text-align:center;font-size:12px;font-weight:700;margin-bottom:7px;color:#ef5079}.home-container .bodydiv .main_about .about uni-text[data-v-335a4cfc]{display:block;text-align:center;font-size:18px;font-weight:700;color:#2a2a2a}.home-container .bodydiv .main_about .about uni-image[data-v-335a4cfc]{width:338px;height:188px;margin:25px auto 0}.home-container .bodydiv .main_about .about .content[data-v-335a4cfc]{width:285px;margin:7px auto 0;font-size:9px;color:#2a2a2a;text-align:center}.home-container .bodydiv .main_about .oartners[data-v-335a4cfc]{overflow:hidden;margin-top:37px}.home-container .bodydiv .main_about .oartners uni-view[data-v-335a4cfc]{text-align:center;font-size:21px;margin-bottom:30px;color:#2a2a2a;font-weight:700}.home-container .bodydiv .main_about .oartners .grow[data-v-335a4cfc]{display:flex;flex-wrap:wrap;justify-content:center}.home-container .bodydiv .main_about .oartners .grow uni-image[data-v-335a4cfc]{display:block;width:80px;height:30px;margin:0 13px 16px 16px}.home-container .footer[data-v-335a4cfc]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(/static/images/footerbg.png);background-size:100% 100%}.home-container .footer .item[data-v-335a4cfc]{padding-top:39px}.home-container .footer .mid[data-v-335a4cfc]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.home-container .footer .tabbar[data-v-335a4cfc]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.home-container .footer .tabbar uni-view[data-v-335a4cfc]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.home-container .footer .tabbar uni-view.active[data-v-335a4cfc]{color:#ff2768}</style><script charset="utf-8" src="/static/js/pages-home-recharge~pages-investlist-recharge~pages-share-share.023c252f.js"></script><script charset="utf-8" src="/static/js/pages-investlist-recharge.f5f360d1.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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

          
          .invest-list-container[data-v-1409a1ee]{min-height:100vh;background-image:url(/static/images/commonbg.36a8d8d.jpg);padding-bottom:85px;background-size:100%}.invest-list-container .arrow[data-v-1409a1ee]{color:#2a2a2a}.invest-list-container .arrow uni-image[data-v-1409a1ee]{width:21px;height:21px}.invest-list-container .header-icon[data-v-1409a1ee]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.invest-list-container .header-icon uni-image[data-v-1409a1ee]{width:21px;height:21px}.invest-list-container .header-icon .counter[data-v-1409a1ee]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.invest-list-container .head-dropdown[data-v-1409a1ee]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.invest-list-container .menus .menu-item[data-v-1409a1ee]{height:175px;margin:10px;border-radius:15px;padding:30px 16px 0;line-height:24px;background:linear-gradient(45deg,#a399fa,#6c60dc)}.invest-list-container .menus .menu-item[data-v-1409a1ee]:nth-child(2){background:linear-gradient(45deg,#fe935f,#fa4847)}.invest-list-container .menus .menu-item uni-image[data-v-1409a1ee]{width:40px;height:40px;margin-bottom:20px}.invest-list-container .container[data-v-1409a1ee]{margin:0 15px;padding:25px 0;color:green}.invest-list-container .container uni-image[data-v-1409a1ee]{width:140px;height:145px;border-radius:10px}.invest-list-container .main-container[data-v-1409a1ee]{background-color:#f0f3f7;border-radius:20px}.invest-list-container .main-container .input-group[data-v-1409a1ee]{height:33px}.invest-list-container .main-container .input-group uni-input[data-v-1409a1ee]{height:100%;padding:0 10px;background-color:#fff;border-radius:24px 0 0 24px;box-sizing:border-box}.invest-list-container .main-container .input-group .cop-btn[data-v-1409a1ee]{width:126px;height:100%;color:#fff;background-color:#ff2768;border-radius:0 24px 24px 0}.invest-list-container .main-container .card[data-v-1409a1ee]{border-radius:15px}.invest-list-container .main-container .card .card-tip1[data-v-1409a1ee]{color:#6c757d;font-size:80%}.invest-list-container .main-container .card .card-tip2[data-v-1409a1ee]{color:red;font-size:80%}.invest-list-container .main-container .complete-btn[data-v-1409a1ee]{height:33px;background-color:#ff2768;color:#fff;border-radius:24px}.invest-list-container .footer[data-v-1409a1ee]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(/static/images/footerbg.png);background-size:100% 100%}.invest-list-container .footer .item[data-v-1409a1ee]{padding-top:39px}.invest-list-container .footer .mid[data-v-1409a1ee]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.invest-list-container .footer .tabbar[data-v-1409a1ee]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.invest-list-container .footer .tabbar uni-view[data-v-1409a1ee]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.invest-list-container .footer .tabbar uni-view.active[data-v-1409a1ee]{color:#ff2768}</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
      }</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
      }</style>
      </head>

      <body class="uni-body pages-investlist-recharge">
        
        <uni-app class="uni-app--maxwidth">
        <uni-page-wrapper>
          <uni-page-body class="invest-list-container">
            
        
        
        <uni-view class="flex-between plr20">
              
          <div><img onclick="history.back()" style="position:absolute; z-index:100;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABzUlEQVR4Xu3b0VHCQBDG8d0BR32SEvJgHnySEuzAEoQS7EA7sITQgR2IHfDmzSTOXAlW4DpRGYEBnvZ2v/NCAcf9f7fJQyBMhX+48H4aAIYJKFxguARyGYCqqiZ0cnpHn/wR38NCa99ZTEBV11OS8QszTfpwEXmMXXjQQIAH2I3/BXiNXbj59wD74ouZgIPxJIvYhpnG6fdrQF4CVvGQAJbxcADW8VAAHvEwAF7xEACe8e4A3vGuAAjxbgAo8S4ASPHmAGjxpgCI8WYAqPEmAMjxyQHQ45MC5BCfDCCX+CQAOcWrAxx+hkf3sXt70nqMpbmO2iOxIyc/j21oNDetuZYewOXVMzPdbm5OSKDjVS+Baj9AE9sw1zwx7bX0JqCupyyjJTFf7EwBNIIaQB/d3wdyQ1AFyBFBHSA3hCQAOSEkA8gFISlADgjJAdARTACQEcwAUBFMARARzAHQEFwAkBDcAFAQXAEQENwBvBEgADwRYAC8EKAAPBDgAKwRIAEsEWAB1ghEo4aJr7cetBb1d/nvFyXOlpsIIlLG3+XXp/7ztsgfQlEvTGwhjM9nRLKKXVhq/UACfQ/Qijy2zgBgoYz8HcMEIJ+Oxd6Kn4AvZySdUIVGIMEAAAAASUVORK5CYII="></div>
        
          <h2 style=""> Recharge </h2>
        
      </uni-view>




      
      <!-----------for bar code -->
      <uni-view data-v-1409a1ee="" class="container flex-column alcenter"><uni-view data-v-1409a1ee="" style="color:gray;" class="mb20">Transfer to Basic Account</uni-view><uni-view data-v-ea322ef6="" data-v-1409a1ee="" class="uqrcode"><uni-canvas data-v-ea322ef6="" canvas-id="qrcode_ukAvpQG26n2MZOAF9bvjpwcuZIVSQm2d" id="qrcode_ukAvpQG26n2MZOAF9bvjpwcuZIVSQm2d" style="width: 140px; height: 140px;">
    <img src="https://chart.apis.google.com/chart?cht=qr&chs=170x170&chl=<? echo $detadrestrx; ?>" style="position:relative;">
      <div style="position:relative; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden;"></div>
 
        
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden;"></div><uni-resize-sensor><div><div></div></div><div><div></div></div></uni-resize-sensor></uni-canvas></uni-view>
      
 
  
      
  
  <uni-view data-v-1409a1ee="" class="mt80">TRX Address</uni-view></uni-view>
      
      
      
      <uni-view data-v-1409a1ee="" class="main-container pt30 pb30">
          
          
          
          
          
          
          
          
          
          
          
          

          
          
          
          
          
          
          
          
          
          
          
          
          
<style>
@media all and (max-width:700px)
 {
.vinpttrxadress{
    width: 100% !important;
    overflow-x:auto !important;
    overflow-y:hidden !important;
    height:2rem !important;
  }
 }
</style>      
          
 <uni-view data-v-1409a1ee="" class="mb40 flex alcenter input-group mlr30">
          
 <uni-input data-v-1409a1ee="" class=" flex-one"><div class="uni-input-wrapper vinpttrxadress" style="text-align:center;margin-top:8px;position:relative;z-index:100; ">

<? echo $detadrestrx; ?>
 
  <input type="text" style="width:1px;opacity:0;font-size:1px;position:relative; z-index:-1;" id="copyreflinkjs" value="<? echo $detadrestrx; ?>">      
 </div></uni-input>
          
 <uni-view data-v-1409a1ee="" class="cop-btn flex-center" onclick="copyrefbtn()" id="copyrefbtn">Copy address</uni-view></uni-view>
      
  


<div style="width:100%; background:white; border-radius: 20px; overflow-wrap: break-word; margin:1em; padding: 1em;">
<p>Please don’t recharge other non TRX assets. It will be recorded about 5~10 minutes after charging. <b style="color:red;"> If it hasn't arrived for a long time, please refresh this page. Minimum <? echo $chkq['min_deposite']; ?> TRX investment.</b></p>
</div>

      <br>

  <a href="mine.php" style="text-decoration:none;" data-v-1409a1ee="" style="position:relative; z-index:100;" class="flex-center complete-btn mlr30">Recharge completed</a>
  
  
  
  
  </uni-view></uni-page-body></uni-page-wrapper></uni-app>
          
          
      
   
      <div class="bluepopup" style="display:none;">
        <div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 100px; right:0; border-right:14px solid rgb(0, 102, 255);">
         <div style="display:flex; flex-direction:row;">
          <img src="static/img/Coffee-blue.gif" style="width:2.5em;">
         </div>
         <div style="color:rgb(0, 102, 255); margin-top:0.5em; margin-left:5px; margin-right:5px;">
          <b> success </b>
         </div>
         <button class="popclosebtnblue" style="border: none; outline-offset:none;"> X </button>
        </div>
        </div>
        
        <div class="redpopup" style="display:none;">
        <div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 100px; right:0; border-right:14px solid rgb(230, 3, 48);">
          <div style="display:flex; flex-direction:row;">
           <img src="static/img/Coffee-red.gif" style="width:2.5em;">
          </div>
          <div style="color:rgb(236, 17, 46); margin-top:0.5em; margin-left:5px; margin-right:5px;">
           <b> Warning </b>
          </div>
          <button class="popclosebtnred" style="border: none; outline-offset:none;"> X </button>
         </div>
        </div>
         


          </body>
          
  <script src="static/js/jqoffline.js"></script>
  <script>
    
  $(document).on('click','#hstryback', function(){
    onclick="history.back()";
  }); 
  //////////////////////////
  //////////////////////////
  $(document).on('click','.popclosebtnblue', function(){
        $('.bluepopup').hide();
  });                     
  $(document).on('click','.popclosebtnred', function(){
        $('.redpopup').hide();
  });                     
  //////////////////////////
   //////////////////////////
     // start for copy refferal link
    function copyrefbtn()
  { var selectto = document.getElementById("copyreflinkjs");
    selectto.select();
   document.execCommand("copy");
   document.getElementById("copyrefbtn").style.color = "white";
   document.getElementById("copyrefbtn").style.background = "rgb(166,6,69)";
   document.getElementById("copyrefbtn").style.border = "1px solid rgb(243,18,18)";
   document.getElementById("copyrefbtn").innerHTML = "Copeid !"; 
  } 
////////////
   </script>       
          
          
 </html>
          
          