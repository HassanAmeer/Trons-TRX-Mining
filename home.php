<?
include 'config.php';
// error_reporting(0);

if(!isset($_COOKIE['coklog']))
{ header('location:index.php'); }

$vusrlog = $_COOKIE['coklog'];
$vlog = "SELECT * FROM `userslog` WHERE usrphone = '$vusrlog'";
$vlogq =mysqli_query($db,$vlog);
$vlogf = mysqli_fetch_array($vlogq);

//////////////////////////////////////
//////////////////////////////////////

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

////////////////////
?>


<!DOCTYPE html>
<html lang="en" style="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; --window-top:calc(var(--top-window-height) + 0px); --window-bottom:0px;" class="translated-ltr">
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>home</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
    document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')</script><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><link rel="stylesheet" href="static/index.a5c69d49.css"><style type="text/css">





.col-3{width:93px}.flex{display:flex}.flex-one{flex:1}.flex-wrap{flex-wrap:wrap}.flex-center{display:flex;justify-content:center;align-items:center}.flex-around{display:flex;justify-content:space-around}.flex-end{display:flex;justify-content:flex-end}.flex-between{display:flex;justify-content:space-between!important}.justify-center{justify-content:center}.alcenter{align-items:center}.flex-column{display:flex;flex-direction:column}.rounded{border-radius:4px}.bg-white{background-color:#fff}.bg-EE9D18{background-color:#ee9d18}.bg-e5e5e5{background-color:#e5e5e5}.bg_FFA1AF{background-color:#ffa1af}.bg_f0f2f5{background-color:#f0f2f5}.bg_54BCB7{background-color:#54bcb7}.bg_C5CFD5{background-color:#c5cfd5}.c_172045{color:#172045}.c_FF5C5C{color:#ff5c5c}.c_099AFF{color:#099aff}.c_AAAAAA{color:#aaa}.c_F71D1D{color:#f71d1d}.c_313233{color:#313233}.c_4945FF{color:#4945ff}.c_10AA06{color:#10aa06}.c_FF9900{color:#f90}.c_B4B5B6{color:#b4b5b6}.c_C7D0D6{color:#c7d0d6}.c_6c757d{color:#6c757d}.c_8C9FAD{color:#8c9fad}.c_989AAA{color:#989aaa}.c_9B9898{color:#9b9898}.c_a9acb2{color:#a9acb2}.c_171717{color:#171717}.c_191919{color:#191919}.c_f07a9a{color:#f07a9a}.c_ef5079{color:#ef5079}.c_54BCB7{color:#54bcb7}.c_C5CFD5{color:#c5cfd5}.c_FFA1AF{color:#ffa1af}.c-EE9D18{color:#ee9d18}.c_FF5900{color:#ff5900}.c-00A212{color:#00a212}.c_2a2a2a{color:#2a2a2a}.c_FA9A43{color:#fa9a43}.c-white{color:#fff}.c_666{color:#666}.c_999{color:#999}.c_gray{color:#ccc}.c_969797{color:#969797}.c_8E8E93{color:#8e8e93}.c_abacb9{color:#abacb9}.c_848484{color:#848484}.c_F7B500{color:#f7b500}.c_8A6756{color:#8a6756}.c_F43F36{color:#f43f36}.c_FA6400{color:#fa6400}.c_red{color:red}.color-red{color:#ff5340}.c_black{color:#000}.c_333{color:c_333}.line:after{content:"";position:absolute;left:0;bottom:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_top:after{content:"";position:absolute;left:0;top:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom:after{content:"";position:absolute;left:0;bottom:0;background:#e6e6e6;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom_one:after{content:"";position:absolute;left:0;bottom:1px;background:#d5d5d8;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_right:after{content:"";position:absolute;top:0;right:0;background:#d5d5d8;width:1px;height:100%;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.w_650{width:325px}.h_100{height:100%}.h40{height:20px}.h120{height:60px}.h100{height:50px}.h110{height:55px}.h60{height:30px}.h80{height:40px}.h88{height:44px}.h90{height:45px}.mt32-mb48{margin-top:16px;margin-bottom:24px}.mt10{margin-top:5px}.mt48{margin-top:24px}.mb10{margin-bottom:5px}.mb16{margin-bottom:8px}.mb20{margin-bottom:10px}.mb30{margin-bottom:15px}.mb40{margin-bottom:20px!important}.mb45{margin-bottom:22px!important}.ml4{margin-left:2px}.ml10{margin-left:5px}.ml60{margin-left:30px}.ml70{margin-left:35px}.ml100{margin-left:50px}.ml110{margin-left:55px}.ml20{margin-left:10px}.ml30{margin-left:15px}.ml40{margin-left:20px}.mr10{margin-right:5px}.mr20{margin-right:10px}.mr30{margin-right:15px}.mr40{margin-right:20px}.mr70{margin-right:35px}.mr100{margin-right:50px}.mt20{margin-top:10px!important}.mt13{margin-top:6px}.mt30{margin-top:15px}.mt40{margin-top:20px}.mt50{margin-top:25px}.mt60{margin-top:30px}.mt80{margin-top:40px}.mt120{margin-top:60px}.mt160{margin-top:80px}.mlr10{margin-left:5px;margin-right:5px}.mlr30{margin-left:15px;margin-right:15px}.mlr40{margin-left:20px;margin-right:20px}.pl10{padding-left:5px}.pl30{padding-left:15px}.pl60{padding-left:30px}.pl130{padding-left:65px}.pl20{padding-left:10px}.pr10{padding-right:5px}.pr20{padding-right:10px}.pd10{padding:5px}.pd20{padding:10px!important}.pd30{padding:15px}.pd40{padding:20px}.plr10{padding-left:5px;padding-right:5px}.plr20{padding-left:10px;padding-right:10px}.plr30{padding-left:15px;padding-right:15px}.plr40{padding-left:20px!important;padding-right:20px!important}.plr56{padding-left:28px!important;padding-right:28px!important}.pt20{padding-top:10px}.pt30{padding-top:15px}.pt40{padding-top:20px}.pb20{padding-bottom:10px}.pb30{padding-bottom:15px}.pb40{padding-bottom:20px}.pb100{padding-bottom:50px}.mb20{margin-bottom:10px!important}.mb40{margin-bottom:20px!important}.mb60{margin-bottom:30px!important}.mb80{margin-bottom:40px!important}.text-center{text-align:center}.line-one{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.line-two{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden;text-overflow:ellipsis}.ft16{font-size:8px}.ft20{font-size:10px!important}.ft24{font-size:12px}.ft26{font-size:13px}.ft28{font-size:14px}.ft30{font-size:15px}.ft32{font-size:16px}.ft36{font-size:18px}.ft40{font-size:20px}.ft48{font-size:24px}.ft50{font-size:25px}.ft60{font-size:30px}.ft73{font-size:36px}.ft80{font-size:40px}.lh36{line-height:18px}.lh40{line-height:20px}.lh56{line-height:28px}.font-bold{font-weight:700}.relative{position:relative}.pf{font-family:PingFangSC-Semibold,PingFang SC}uni-page-body{font-size:14px;color:#212529;font-family:PingFangSC-Semibold,PingFang SC;background-color:#f5f8fa}body{background-color:#f5f8fa}</style><script charset="utf-8" src="static/js/pages-login-login.abd1149e.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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



















/* start of login css */

            .login-container[data-v-46374971]{min-height:100vh;background-image:url(static/img/login-bg.36a8d8de.jpg);background-size:100% 100%}.login-container .header[data-v-46374971]{padding:10px 15px}.login-container .header .left[data-v-46374971]{height:30px;line-height:30px}.login-container .header .language[data-v-46374971]{width:30px;height:30px;line-height:30px;color:#000;background:#f5c7eb;border-radius:50%;text-align:center}.login-container .header .language .head-dropdown[data-v-46374971]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.login-container .reg_content[data-v-46374971]{position:relative;padding-top:25px}.login-container .reg_content .logo[data-v-46374971]{width:154px;height:154px}.login-container .reg_content .form[data-v-46374971]{overflow:hidden;width:270px;margin:0 auto;padding-top:50px}.login-container .reg_content .form .item[data-v-46374971]{overflow:hidden;margin-bottom:12px}.login-container .reg_content .form .item .form-title[data-v-46374971]{font-size:16px;color:#191919;font-weight:700;margin-bottom:10px}.login-container .reg_content .form .item .label[data-v-46374971]{overflow:hidden;width:100%;border-radius:30px;background:#fff1f5;justify-content:flex-start;font-size:12px;height:52px;margin-left:14px;margin-bottom:13px}.login-container .reg_content .form .item .label uni-input[data-v-46374971]{width:60%;height:100%;padding-left:15px;font-size:14px;color:#ff8ab0}.login-container .reg_content .form .item .label .attach-img[data-v-46374971]{width:75px;height:30px}.login-container .reg_content .form .switchs .des[data-v-46374971]{color:#191919;font-size:10px;font-weight:700;margin-left:5px}.login-container .reg_content .button_grow[data-v-46374971]{overflow:hidden;width:247px;margin:50px auto 0}.login-container .reg_content .button_grow .btn[data-v-46374971]{overflow:hidden;width:100%;height:42px;border-radius:25px;display:flex;margin:0 auto 19px;align-items:center;background:#ff1964;justify-content:center;font-size:15px;font-weight:700;color:#fff}.login-container .reg_content .button_grow .btn.on[data-v-46374971]{background:#ffecf2;color:#ff1964}</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"><script charset="utf-8" src="static/js/pages-home-home.2f1faa9c.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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










/*----------------end for login top --*/
















.home-container[data-v-335a4cfc]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);padding-bottom:85px;background-size:100%}.home-container .header-icon[data-v-335a4cfc]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.home-container .header-icon uni-image[data-v-335a4cfc]{width:21px;height:21px}.home-container .header-icon .counter[data-v-335a4cfc]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.home-container .head-dropdown[data-v-335a4cfc]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.home-container .notice-pop-container[data-v-335a4cfc]{width:75vw;background-color:#fff}.home-container .notice-pop-container .notification_title[data-v-335a4cfc]{color:#010166;height:45px;line-height:45px;border-bottom:1px solid #f5f2f2;text-align:center;font-weight:700;font-size:18px}.home-container .notice-pop-container .notification_content[data-v-335a4cfc]{height:250px;padding:15px;max-height:250px;min-height:100px;box-sizing:border-box}.home-container .notice-pop-container .notification_btn[data-v-335a4cfc]{height:45px;padding:0 10px;border-top:1px solid #f5f2f2}.home-container .notice-pop-container .notification_btn .button[data-v-335a4cfc]{width:96%;height:32px;line-height:32px;text-align:center;color:#fff;background:#ddd}.home-container .notice-pop-container .notification_btn .button.close[data-v-335a4cfc]{background:#d4d170}.home-container .bodydiv .contact[data-v-335a4cfc]{width:338px;height:57px;background-image:url(static/img/icon_15.ac3e2f9.ac3e2f9e.png);background-size:100% 100%;margin-left:17px;margin-top:25px;padding-left:69px;padding-top:5px;box-sizing:border-box}.home-container .bodydiv .main_problem[data-v-335a4cfc]{width:338px;height:70px;background-image:url(static/img/icon_18.d6bdad9.d6bdad9b.png);background-size:100% 100%;margin-left:17px;margin-top:8px;padding-top:17px;padding-left:70px;box-sizing:border-box}.home-container .bodydiv .navbar[data-v-335a4cfc]{display:flex;flex-wrap:wrap;justify-content:space-between;width:100%;padding:0 20px;margin-bottom:67px;box-sizing:border-box}.home-container .bodydiv .navbar .nav-item[data-v-335a4cfc]{width:33.3%;margin-top:21px}.home-container .bodydiv .navbar .nav-item uni-image[data-v-335a4cfc]{display:block;width:60px;height:60px;margin:0 auto}.home-container .bodydiv .label[data-v-335a4cfc]{width:341px;height:85px;background-image:url(static/img/icon_39.8e09b5a.8e09b5a4.png);background-size:100% 100%;margin-left:14px;margin-bottom:13px;padding-left:90px;padding-top:20px;box-sizing:border-box}.home-container .bodydiv .label.on[data-v-335a4cfc]{background-image:url(static/img/icon_41.794ced2.794ced21.png)}.home-container .bodydiv .main_join[data-v-335a4cfc]{width:100%;height:422px;background-size:100% 100%;background-image:url(static/img/bgbg_02.54c1fc0.54c1fc0b.png);padding-top:65px;text-align:center;box-sizing:border-box}.home-container .bodydiv .main_join .des[data-v-335a4cfc]{width:245px;text-align:center;margin:0 auto;line-height:17px}.home-container .bodydiv .main_join uni-image[data-v-335a4cfc]{width:338px;height:190px;margin:15px auto 0}.home-container .bodydiv .main_join .btn[data-v-335a4cfc]{width:148px;height:35px;border-radius:25px;font-size:16px;font-weight:700;color:#fff;background-color:#e73b66;margin:10px auto 0}.home-container .bodydiv .main_display .h3[data-v-335a4cfc]{font-size:21px;font-weight:700;margin-left:23px;color:#191919}.home-container .bodydiv .main_display .box[data-v-335a4cfc]{height:184px;background-size:100% 100%;background-image:url(static/img/icon_46.3328697.33286971.png);padding:96px 22px 0 19px;box-sizing:border-box}.home-container .bodydiv .main_display .box .item[data-v-335a4cfc]{width:158px;overflow:hidden}.home-container .bodydiv .main_display .box .item uni-view[data-v-335a4cfc]{text-align:center;font-size:20px;color:#fff;margin-bottom:10px;font-weight:700}.home-container .bodydiv .main_display .box .item uni-text[data-v-335a4cfc]{display:block;text-align:center;font-size:9px;opacity:.8;color:#fff}.home-container .bodydiv .main_about[data-v-335a4cfc]{height:725px;background-image:url(static/img/bgbg_04.0954b65.0954b651.png);background-size:100% 100%}.home-container .bodydiv .main_about .about[data-v-335a4cfc]{height:500px;padding:30px 0 0;box-sizing:border-box}.home-container .bodydiv .main_about .about .title[data-v-335a4cfc]{text-align:center;font-size:12px;font-weight:700;margin-bottom:7px;color:#ef5079}.home-container .bodydiv .main_about .about uni-text[data-v-335a4cfc]{display:block;text-align:center;font-size:18px;font-weight:700;color:#2a2a2a}.home-container .bodydiv .main_about .about uni-image[data-v-335a4cfc]{width:338px;height:188px;margin:25px auto 0}.home-container .bodydiv .main_about .about .content[data-v-335a4cfc]{width:285px;margin:7px auto 0;font-size:9px;color:#2a2a2a;text-align:center}.home-container .bodydiv .main_about .oartners[data-v-335a4cfc]{overflow:hidden;margin-top:37px}.home-container .bodydiv .main_about .oartners uni-view[data-v-335a4cfc]{text-align:center;font-size:21px;margin-bottom:30px;color:#2a2a2a;font-weight:700}.home-container .bodydiv .main_about .oartners .grow[data-v-335a4cfc]{display:flex;flex-wrap:wrap;justify-content:center}.home-container .bodydiv .main_about .oartners .grow uni-image[data-v-335a4cfc]{display:block;width:80px;height:30px;margin:0 13px 16px 16px}.home-container .footer[data-v-335a4cfc]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.home-container .footer .item[data-v-335a4cfc]{padding-top:39px}.home-container .footer .mid[data-v-335a4cfc]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.home-container .footer .tabbar[data-v-335a4cfc]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.home-container .footer .tabbar uni-view[data-v-335a4cfc]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.home-container .footer .tabbar uni-view.active[data-v-335a4cfc]{color:#ff2768}</style></head>










<body class="uni-body pages-home-home">
    <uni-app class="uni-app--maxwidth"><uni-page data-page="pages/home/home"><!----><!----><uni-page-wrapper><uni-page-body><uni-view data-v-335a4cfc="" class="home-container"><uni-view data-v-335a4cfc="" class="flex-between alcenter h110 plr30"><uni-view data-v-335a4cfc=""></uni-view><uni-view data-v-335a4cfc="" class="flex alcenter">
      
      
      <uni-navigator data-v-335a4cfc="" class="header-icon flex-center bellicon"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADHElEQVR4Xu2bgZENQRCG/4sAGRDBEQEiIANEgAgQARkgAkSACI4IyAARUF/ZVXNzs+9mpntmS73uqld39Wp2tvubnu5+O70nOnI5OXL7FQDCA/YjcFXSveX2HyT93EOVvbYAxn+UdHMx+ouku3tA2AvAE0kvsxV/JOnNbC/YC8BzSc8yY19I4vupEgCm4pauSzqVxBa4k937k6RXkr5K+j5LrxkeQMB7sBgNgBoBADDejg6MIwFg+OPFcP7vEVIjIIgPQ2QUANLb6yTNWZUnTZIl+OsqIwA8XIy/TNFfiUEAu3LZBQsE11TpDeCQ8RiM8gS79xvG3l+CI/NsAXGtFzwBbBmP4exjPrXlLjGDTJHXCis3NwheAHBhSts82GE86a537zIvHpN7AyApnXvn/eeAXgDOCgGPfI7xtau+FQKACgTqh1Qw/lZF3Dg4xANAyfVZeVbPq6ChfsDg3BPMW8EDwDf9rfBSwT1ZNU/Bm9hmqQD4huUmVgCl1ad64/sRQhahqkzF5AVWACWFWBEv188h4ml4XCom4FYAP7LI/7nwI8fbE4gFaUAkyF7rvYkFAEGO6J/K0yXf9+pTc13pYQrZoCslWgCUgtKI4JdDcb2vBUBpJUbu/xVEKQ50B0ILgNJjLct8Ne6/jvmdDe5+nGZROAAUfqxYgIYHNBCILRAx4DyBCIK9hyqWoBVZILLAxWd2Fo9qSAKKLBBZILLAOQKRBiMNdjZXWKJ21AFRB0QdcOHw0rKlohBqIBCVYFSCO1WCPJOn96e226vBq12GciTHI/Lqg9nWoFU6CXbR3HGSphPjVgB58HHU23WqaruqBy7qHT0AjsN6mh5LjdGlJa8dd8hd1ubKKpdq9YCqSQuDUCptbykdotIi9y65ljabHthNOs4CQF/g+nYICuYvSOQvUDCGt0iAMlRmASgdaeMVa8MkhuarPeOofepbY+Tm25XLOWX10WWWB3CvrX6/nIlXf2EV65kAVghkEj55z9/aUjv1tZnZANZVwRuIC+lbY2wRa1dp1aqng/YC0KzoqAsCwCiy/8u8R+8BfwDQSrpBniVOAgAAAABJRU5ErkJggg==&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADHElEQVR4Xu2bgZENQRCG/4sAGRDBEQEiIANEgAgQARkgAkSACI4IyAARUF/ZVXNzs+9mpntmS73uqld39Wp2tvubnu5+O70nOnI5OXL7FQDCA/YjcFXSveX2HyT93EOVvbYAxn+UdHMx+ouku3tA2AvAE0kvsxV/JOnNbC/YC8BzSc8yY19I4vupEgCm4pauSzqVxBa4k937k6RXkr5K+j5LrxkeQMB7sBgNgBoBADDejg6MIwFg+OPFcP7vEVIjIIgPQ2QUANLb6yTNWZUnTZIl+OsqIwA8XIy/TNFfiUEAu3LZBQsE11TpDeCQ8RiM8gS79xvG3l+CI/NsAXGtFzwBbBmP4exjPrXlLjGDTJHXCis3NwheAHBhSts82GE86a537zIvHpN7AyApnXvn/eeAXgDOCgGPfI7xtau+FQKACgTqh1Qw/lZF3Dg4xANAyfVZeVbPq6ChfsDg3BPMW8EDwDf9rfBSwT1ZNU/Bm9hmqQD4huUmVgCl1ad64/sRQhahqkzF5AVWACWFWBEv188h4ml4XCom4FYAP7LI/7nwI8fbE4gFaUAkyF7rvYkFAEGO6J/K0yXf9+pTc13pYQrZoCslWgCUgtKI4JdDcb2vBUBpJUbu/xVEKQ50B0ILgNJjLct8Ne6/jvmdDe5+nGZROAAUfqxYgIYHNBCILRAx4DyBCIK9hyqWoBVZILLAxWd2Fo9qSAKKLBBZILLAOQKRBiMNdjZXWKJ21AFRB0QdcOHw0rKlohBqIBCVYFSCO1WCPJOn96e226vBq12GciTHI/Lqg9nWoFU6CXbR3HGSphPjVgB58HHU23WqaruqBy7qHT0AjsN6mh5LjdGlJa8dd8hd1ubKKpdq9YCqSQuDUCptbykdotIi9y65ljabHthNOs4CQF/g+nYICuYvSOQvUDCGt0iAMlRmASgdaeMVa8MkhuarPeOofepbY+Tm25XLOWX10WWWB3CvrX6/nIlXf2EV65kAVghkEj55z9/aUjv1tZnZANZVwRuIC+lbY2wRa1dp1aqng/YC0KzoqAsCwCiy/8u8R+8BfwDQSrpBniVOAgAAAABJRU5ErkJggg==" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="counter"></uni-view></uni-navigator>
      
      <a href="<? echo $chkq['tglink']; ?>" style="text-decoration:none;" data-v-335a4cfc="" class="header-icon flex-center"><uni-image data-v-335a4cfc="">
    
    <div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABACAYAAACunKHjAAAFlUlEQVR4Xu2ci3HUMBCGNxUAFQAVABUAFQAVQCoAKgAqACqAVACpAFIBUAFJBUAFMN+NN7PZk7yyLMtm5jTjyc3Z1uPff5/S5Uj6tbsicl9EbokIn/nLZdu5iOj1XUTORIS/i7ejhUd4JCKPh+t65Vi/ReTzcJ1W9hG+tgQQLPi5iLwQkdrF5yYOKO9E5L2I8LlZaw3EqwIALgb6Q3m/GIBTtbk5skoF5E0rJFoB8UBEPiR0Xud5IiJfhwsbUNKwH/TL9TTzAn0dD/2W9Jl9pgUQsOB1YgQkz/fo91wawxRsDf2lmML3s9gxBwgm92mQmMXhz6AeH2eJKP/yswwgqNrDWtBrgQCEL4M+2yljxJDOXAZEGDI+42CUbasGowaIFAiwAEmhBj0b9oMxr5lBq8CYCkQKBGwB+tsl8EmgjJdBDe/MAWMqEHgGJK/tx2AjllaFiGUICK9kwYApT6IX9f4UIAiQ3pqOUQdc3Nog6JQAA1Zar/JyCMBCPEqBYMHfTKQICOjnWuqQWxhqAjOszbg9BHCjYJQCgYdg4dqKkQ5F0f4BVBcV1gYwuNXZQAAAQGgjI7SgRGOscR/7QMKnjehzNK4pYQQqAeW0FVFtjdWbMVFl1FZVhFCceWdbBARukehRG2FsKpxeed3J4Zkn4X8RKyIgPMVubMhLRODjRWCCsoJaBoJNtjEgoNdP8xYZpI0hools4T52wWauWbUeA8Jb33sbdJcR2Ng2bJy2rLcbA8KqBWG0ry9Gk9jKfdRDg6yseowB8fc/VwudPqU9m6Um15wDwtuH0A9vRfyJeRSpeA4I7zb/R/ugmBQJNQeE98GRm90wIXZTs2qejIVKgCDBal2W7w2cNZiTgCCatMEHqTYhKwkMlndrWacHFrdJrkFOxGcrSOaOql9pnhG8SM3B5hYp6c2uGi9IiVxV3Q65tw1ggfDWNZprVW0w6nTG/VxVfazLS2+oQHgvwcvYBoIq3ZCBLWzi2kbVmsrVFpqPF5gTJQPUmYb3YJ22aMP3OzAUCHIKGzliB2CIL8MBBvG7LYdRF+xdvfbA+5oJQmTRCoI+D2uYv61V7FJ0gPBsiAovPn4Pc/0OdPE1kyju2SvcAISnVEnhZWtxRhgnOGHAjF/muxOAgD6q+5TnI4/B+56K1AQ9DTsQYTdE7Vzsus88EFNqDlYKaxZz/TZDafHIasK5B2JKKW4qHZdiSK2aXnnvAMQgngMQByB21fjLKveBEQdGjDOi1n1O8TatvYd3n6VFJOs+L3jJhptReK2LqA1iWoPQNKDyfrgkIKkNYpYAgj6nxjQ+xD6FEV660UkTf1ZiC3se1Eb0tAwZM0nX2HlOX4E7Vn2ycTcIoz/ovU/DyUM4e2DzkS2k4T6DBhjqDKmSoq9g7WqyCoTfRgcMECV3pzM9Ue/3Pkc3VpfSg0y/fp+Tx3T+rAXhMX+/Y7dLGOeU6lAJOt/yGapIFnulOn0hdVQv1Vmvg6XRQux9is6lZcO908E5n0uH6B3AaI2PWgUUw36sVXtIAZMr2hIK2PnzLixGXVjDFSaXBB/oVOmJ+ikSbPEsC8UDeL23e7X6S6FR4ZUA0WLCtg/cNbvT/M3toGGgufBcKSGM/TimasO6NxD+5G4JyHZhYwDkKtclY0hPIFL7DkWTHGICthByP4/CHmDTqj1YLyD81jwAkODlbE9qMykFWrPfhvQCwrOhJBr1OZAFAgDoc8/6l1LMP9cLiJotA59Mqftj8bjAajVIgbUGEKWpvgdi0X3WXkB41Yi25ADBp/qLbiL1AsKn+tAaeqc2j/UXfTbBW/zUTi8gkLDfeJ1i10qM65T+9p7tCQSSBgx/xiJawKK2QQfvCYSOCeXRf/v7Kw8GqkCIjQvtkuCtAYRdtD/oxT39twkRU5re/wfK82KZR+2RowAAAABJRU5ErkJggg==&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABACAYAAACunKHjAAAFlUlEQVR4Xu2ci3HUMBCGNxUAFQAVABUAFQAVQCoAKgAqACqAVACpAFIBUAFJBUAFMN+NN7PZk7yyLMtm5jTjyc3Z1uPff5/S5Uj6tbsicl9EbokIn/nLZdu5iOj1XUTORIS/i7ejhUd4JCKPh+t65Vi/ReTzcJ1W9hG+tgQQLPi5iLwQkdrF5yYOKO9E5L2I8LlZaw3EqwIALgb6Q3m/GIBTtbk5skoF5E0rJFoB8UBEPiR0Xud5IiJfhwsbUNKwH/TL9TTzAn0dD/2W9Jl9pgUQsOB1YgQkz/fo91wawxRsDf2lmML3s9gxBwgm92mQmMXhz6AeH2eJKP/yswwgqNrDWtBrgQCEL4M+2yljxJDOXAZEGDI+42CUbasGowaIFAiwAEmhBj0b9oMxr5lBq8CYCkQKBGwB+tsl8EmgjJdBDe/MAWMqEHgGJK/tx2AjllaFiGUICK9kwYApT6IX9f4UIAiQ3pqOUQdc3Nog6JQAA1Zar/JyCMBCPEqBYMHfTKQICOjnWuqQWxhqAjOszbg9BHCjYJQCgYdg4dqKkQ5F0f4BVBcV1gYwuNXZQAAAQGgjI7SgRGOscR/7QMKnjehzNK4pYQQqAeW0FVFtjdWbMVFl1FZVhFCceWdbBARukehRG2FsKpxeed3J4Zkn4X8RKyIgPMVubMhLRODjRWCCsoJaBoJNtjEgoNdP8xYZpI0hools4T52wWauWbUeA8Jb33sbdJcR2Ng2bJy2rLcbA8KqBWG0ry9Gk9jKfdRDg6yseowB8fc/VwudPqU9m6Um15wDwtuH0A9vRfyJeRSpeA4I7zb/R/ugmBQJNQeE98GRm90wIXZTs2qejIVKgCDBal2W7w2cNZiTgCCatMEHqTYhKwkMlndrWacHFrdJrkFOxGcrSOaOql9pnhG8SM3B5hYp6c2uGi9IiVxV3Q65tw1ggfDWNZprVW0w6nTG/VxVfazLS2+oQHgvwcvYBoIq3ZCBLWzi2kbVmsrVFpqPF5gTJQPUmYb3YJ22aMP3OzAUCHIKGzliB2CIL8MBBvG7LYdRF+xdvfbA+5oJQmTRCoI+D2uYv61V7FJ0gPBsiAovPn4Pc/0OdPE1kyju2SvcAISnVEnhZWtxRhgnOGHAjF/muxOAgD6q+5TnI4/B+56K1AQ9DTsQYTdE7Vzsus88EFNqDlYKaxZz/TZDafHIasK5B2JKKW4qHZdiSK2aXnnvAMQgngMQByB21fjLKveBEQdGjDOi1n1O8TatvYd3n6VFJOs+L3jJhptReK2LqA1iWoPQNKDyfrgkIKkNYpYAgj6nxjQ+xD6FEV660UkTf1ZiC3se1Eb0tAwZM0nX2HlOX4E7Vn2ycTcIoz/ovU/DyUM4e2DzkS2k4T6DBhjqDKmSoq9g7WqyCoTfRgcMECV3pzM9Ue/3Pkc3VpfSg0y/fp+Tx3T+rAXhMX+/Y7dLGOeU6lAJOt/yGapIFnulOn0hdVQv1Vmvg6XRQux9is6lZcO908E5n0uH6B3AaI2PWgUUw36sVXtIAZMr2hIK2PnzLixGXVjDFSaXBB/oVOmJ+ikSbPEsC8UDeL23e7X6S6FR4ZUA0WLCtg/cNbvT/M3toGGgufBcKSGM/TimasO6NxD+5G4JyHZhYwDkKtclY0hPIFL7DkWTHGICthByP4/CHmDTqj1YLyD81jwAkODlbE9qMykFWrPfhvQCwrOhJBr1OZAFAgDoc8/6l1LMP9cLiJotA59Mqftj8bjAajVIgbUGEKWpvgdi0X3WXkB41Yi25ADBp/qLbiL1AsKn+tAaeqc2j/UXfTbBW/zUTi8gkLDfeJ1i10qM65T+9p7tCQSSBgx/xiJawKK2QQfvCYSOCeXRf/v7Kw8GqkCIjQvtkuCtAYRdtD/oxT39twkRU5re/wfK82KZR+2RowAAAABJRU5ErkJggg==" draggable="true"><!----></uni-image></a><uni-view data-v-335a4cfc="" style=" display: none;" class="header-icon flex-center"><uni-view data-v-335a4cfc="" class="type ft26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EN</font></font></uni-view><uni-view data-v-335a4cfc="" class="head-dropdown" style="display:none;"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">English</font></font></uni-view><uni-view data-v-335a4cfc="">
        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Portuguese</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Indonesian</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Korean</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">German</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Japanese</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">French</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arabic</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Turkish</font></font></uni-view><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spanish</font></font></uni-view></uni-view></uni-view></uni-view></uni-view><uni-view data-v-335a4cfc="" class="bodydiv"><uni-view data-v-335a4cfc="" class="main_title mt80"><uni-view data-v-335a4cfc="" class="c_abacb9 ft30 mb45 text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Balance</font></font></uni-view><uni-view data-v-335a4cfc="" class="c_2a2a2a ft80 text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><? echo $vlogf['sumout']; ?></font></font><uni-text data-v-335a4cfc="" class="ft28 ml20"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TRX</font></font></span></uni-text></uni-view></uni-view><uni-view data-v-335a4cfc="" class="contact flex alcenter"><marquee data-v-335a4cfc="" behavior="scroll" direction="" scrollamount="3" style="font-weight: 500;"><font style="vertical-align: inherit;">
          
   
         
    <font style="vertical-align: inherit;"><? echo $chkq['maarquee']; ?></font>
          
     </font></marquee></uni-view>
 <uni-navigator data-v-335a4cfc="" class="main_problem"><a href="details.php" style="text-decoration:none;"><uni-view data-v-335a4cfc="" class="title ft26 c-white mb10 font-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The Common problem</font></font></uni-view><uni-view data-v-335a4cfc="" class="ft26 c-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Latest Announcement</font></font></uni-view></a></uni-navigator>
        
        
        <!--------midle dashbord btns -->
  <uni-view data-v-335a4cfc="" class="navbar">
          
          
 <uni-navigator id="depositnav" data-v-335a4cfc="" class="nav-item"><a href="recharge.php" style="text-decoration:none;"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_1811.94738a2b.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_1811.94738a2b.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="ft22 text-center c_2a2a2a"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deposit</font></font></uni-view></a></uni-navigator>
          
          
  <uni-navigator data-v-335a4cfc="" class="nav-item"><a href="sumout.php" style="text-decoration:none;"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_1810.b0a6636a.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_1810.b0a6636a.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="ft22 text-center c_2a2a2a"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Withdrawal</font></font></uni-view></a></uni-navigator>
          
          
 <uni-navigator data-v-335a4cfc="" class="nav-item"><a href="share.php" style="text-decoration:none;"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_189.1c757b43.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_189.1c757b43.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="ft22 text-center c_2a2a2a"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Share</font></font></uni-view></a></uni-navigator>
          
          
          
   <uni-navigator id="teamnav" data-v-335a4cfc="" class="nav-item"><a href="team.php" style="text-decoration:none;"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_186.2d61eb54.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_186.2d61eb54.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="ft22 text-center c_2a2a2a"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Team</font></font></uni-view></a></uni-navigator>
          
          
          <uni-view data-v-335a4cfc=""class="nav-item"><a href="<? echo $chkq['applink']; ?>" style="text-decoration:none;"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_188.9c14a882.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_188.9c14a882.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="ft22 text-center c_2a2a2a"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">App</font></font></uni-view></a></uni-view>
          
          
          <uni-view data-v-335a4cfc="" class="nav-item"><a href="logout.php" style="text-decoration:none;"> <uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_187.8c398298.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_187.8c398298.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="ft22 text-center c_2a2a2a"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Logout</font></font></uni-view></a></uni-view>
        
        </uni-view>
           <!--------end midle dashbord btns -->
<uni-view data-v-335a4cfc="" class="label"><uni-view data-v-335a4cfc=""><uni-view data-v-335a4cfc="" class="ft26 font-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wallet</font></font><uni-text data-v-335a4cfc="" class="ft20 c_a9acb2 ml10"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Account</font></font></span></uni-text></uni-view><uni-view data-v-335a4cfc="" class="font-bold mt20 c_ef5079 ft30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><? echo $vlogf['sumout']; ?></font></font><uni-text data-v-335a4cfc="" class="ft20 c_2a2a2a ml10 mr10"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TRX</font></font></span></uni-text><uni-text data-v-335a4cfc=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">≈ $ <b 
id="btotron">
  
</b></font></span></uni-text></uni-view></uni-view></uni-view>
        
        <uni-view data-v-335a4cfc="" class="label on"><uni-view data-v-335a4cfc=""><uni-view data-v-335a4cfc="" class="ft26 font-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Promotion</font></font><uni-text data-v-335a4cfc="" class="ft20 c_a9acb2 ml10"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Account</font></font></span></uni-text></uni-view><uni-view data-v-335a4cfc="" class="font-bold mt20 c_ef5079 ft30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><? echo $vlogf['refbonus']; ?></font></font><uni-text data-v-335a4cfc="" class="ft20 c_2a2a2a ml10 mr10"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TRX</font></font></span></uni-text><uni-text data-v-335a4cfc=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">≈ $
 <b id="ptotron">
  
</b></font></font></span></uni-text></uni-view></uni-view></uni-view><uni-view data-v-335a4cfc="" class="main_join"><uni-view data-v-335a4cfc="" class="c_171717 ft38 text-center font-bold mb10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Join to be a TRON Millionaire</font></font></uni-view><uni-view data-v-335a4cfc="" class="c_f07a9a ft20 des"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Use cloud mining and Defi technology to ensure that all users get the most TRX revenue.</font></font></uni-view><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_44.848a2789.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_44.848a2789.png" draggable="true"><!----></uni-image>
        
        <a href="details.php" style="text-decoration:none;" data-v-335a4cfc="" class="btn flex-center"><font style="vertical-align: inherit;">
           <font style="vertical-align: inherit;">Details</font>
        </font></a>
      
      </uni-view><uni-view data-v-335a4cfc="" class="main_display"><uni-view data-v-335a4cfc="" class="h3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Platform data display</font></font></uni-view><uni-view data-v-335a4cfc="" class="box flex-between"><uni-view data-v-335a4cfc="" class="item"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
   <?    
$navtsouts = " SELECT SUM(sumout) AS usumouts FROM userslog";
$navtsoutq = mysqli_query($db,$navtsouts);
$navtsout = mysqli_fetch_assoc($navtsoutq);
echo substr($navtsout['usumouts'],0,12) + $chkq['fake_profite'];
   ?> 
    
      </font></font></uni-view><uni-text data-v-335a4cfc=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Accumulated profit</font></font></span></uni-text></uni-view><uni-view data-v-335a4cfc="" class="item"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  
   <?    
$navrefbns = " SELECT SUM(refbonus) AS refbonuses FROM userslog";
$navrfbnsq = mysqli_query($db,$navrefbns);
$vrefbnsp = mysqli_fetch_assoc($navrfbnsq);
echo substr($vrefbnsp['refbonuses'],0,12) + $chkq['fake_members'];
   ?> 
   </font></font></uni-view><uni-text data-v-335a4cfc=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Membership</font></font></span></uni-text></uni-view></uni-view></uni-view><uni-view data-v-335a4cfc="" class="main_about">
            
            
            
<uni-view data-v-335a4cfc="" class="about"><uni-view data-v-335a4cfc="" class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">About us</font></font></uni-view><uni-text data-v-335a4cfc=""><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">We are at our best</font></font></span></uni-text><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_49.de681bd4.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_49.de681bd4.png" draggable="true"><!----></uni-image><uni-view data-v-335a4cfc="" class="content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cloud mining offered a potentially cost-effective way of mining for Bitcoins Trx and other cryptocurrencies. At the same time, both Quantitative trading and DeFi technology will allow you to easily participate in blockchain transactions with a small amount of capital, and obtain stable income like insurance.</font></font></uni-view></uni-view><uni-view data-v-335a4cfc="" class="oartners"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Global partners</font></font></uni-view><uni-view data-v-335a4cfc="" class="grow"><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_185.64d973f1.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_185.64d973f1.png" draggable="true"><!----></uni-image><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_184.c2c6ce5c.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_184.c2c6ce5c.png" draggable="true"><!----></uni-image><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_183.abc39bbd.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_183.abc39bbd.png" draggable="true"><!----></uni-image><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAA8CAYAAADha7EVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3VpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTMyIDc5LjE1OTI4NCwgMjAxNi8wNC8xOS0xMzoxMzo0MCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo0Nzg2ZWEyZC00ZjAxLTQ0MTYtYjk2MS1iMDY3NjVkMDEwNWIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEMzNDY5RkYyMTRDMTFFQzg3REQ5RTE3NTJCMzAxNDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEMzMEMzMDYyMTRDMTFFQzg3REQ5RTE3NTJCMzAxNDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDphZThmNThjMi0xMTcyLTRlMjktYjU0ZS0wNzM5ZGU0YzliNmIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDc4NmVhMmQtNGYwMS00NDE2LWI5NjEtYjA2NzY1ZDAxMDViIi8+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&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAA8CAYAAADha7EVAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3VpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTMyIDc5LjE1OTI4NCwgMjAxNi8wNC8xOS0xMzoxMzo0MCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo0Nzg2ZWEyZC00ZjAxLTQ0MTYtYjk2MS1iMDY3NjVkMDEwNWIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEMzNDY5RkYyMTRDMTFFQzg3REQ5RTE3NTJCMzAxNDkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEMzMEMzMDYyMTRDMTFFQzg3REQ5RTE3NTJCMzAxNDkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDphZThmNThjMi0xMTcyLTRlMjktYjU0ZS0wNzM5ZGU0YzliNmIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDc4NmVhMmQtNGYwMS00NDE2LWI5NjEtYjA2NzY1ZDAxMDViIi8+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" draggable="true"><!----></uni-image><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_62.ed1af8b1.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_62.ed1af8b1.png" draggable="true"><!----></uni-image><uni-image data-v-335a4cfc=""><div style="background-image: url(&quot;static/img/icon_181.838ebb0d.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/icon_181.838ebb0d.png" draggable="true"><!----></uni-image></uni-view></uni-view></uni-view></uni-view><uni-view data-v-335a4cfc="" class="footer">

  <uni-view data-v-335a4cfc="" class="item flex">
  <uni-navigator data-v-335a4cfc="" class="tabbar bhomebtn" style="background-image: url(&quot;static/images/tabbar/home-selected.jpg&quot;);"><uni-view data-v-335a4cfc="" class="active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Home</font></font></uni-view></uni-navigator>
                  
  <uni-navigator data-v-335a4cfc="" class="tabbar btradebtn" style="background-image: url(&quot;static/images/tabbar/tradin.jpg&quot;);"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trading</font></font></uni-view></uni-navigator>
                </uni-view>

 <uni-navigator data-v-335a4cfc="" class="mid bmidbtn"></uni-navigator>

<uni-view data-v-335a4cfc="" class="item flex">
  <uni-navigator data-v-335a4cfc="" class="tabbar bsharebtn" style="background-image: url(&quot;static/images/tabbar/share.jpg&quot;);"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Share</font></font></uni-view></uni-navigator>
   <uni-navigator data-v-335a4cfc="" class="tabbar bminebtn" style="background-image: url(&quot;static/images/tabbar/mine.jpg&quot;);"><uni-view data-v-335a4cfc=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mine</font></font></uni-view></uni-navigator>
                </uni-view></uni-view>
                
                
                
                
           
  <!---------------------------------notification-->
 <uni-view id="popupclosdiv" data-v-ad4fc5b6="" data-v-335a4cfc="" class="uni-popup center" style="display:;"><uni-view data-v-016ede03="" data-v-ad4fc5b6="" class="uni-transition fade-out" style="position: fixed; inset: 0px; background-color: rgba(0, 0, 0, 0.4); transition-duration: 0.3s;"></uni-view><uni-view data-v-016ede03="" data-v-ad4fc5b6="" class="uni-transition fade-out" style="transform: scale(1); position: fixed; z-index:200; top:170px; left:12%;display: flex; flex-direction: column; inset: 0px; justify-content: center; align-items: center; transition-duration: 0.3s;">
                  
                    
 <uni-view data-v-ad4fc5b6="" class="uni-popup__wrapper-box">
                    
 <uni-view data-v-335a4cfc="" class="notice-pop-container"><uni-view data-v-335a4cfc="" class="notification_title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Latest Announcement</font></font></uni-view><uni-scroll-view data-v-335a4cfc="" class="notification_content"><div class="uni-scroll-view"><div class="uni-scroll-view" style="overflow: hidden auto;"><div class="uni-scroll-view-content"><!----><uni-view data-v-335a4cfc=""><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Great platform for novices and novices only needs to deposit their own funds. For example, USDT TRX BTC ETH is deposited into the platform and then the platform automatically helps you participate in mining, and the proceeds can be extracted to your account daily, with a yield of up to 5-15%.</font></font></div>
 <br>
 <div>&nbsp;looking for the only official link:</div><div>&nbsp;<? echo $_SERVER['HTTP_HOST']; ?></div>
  
  <div><br></div>
  <div>Official Telegram Customer Service:</div><div><? echo $chkq['tglink']; ?></div>
  
  <div><br></div>
  <div>Official TRX PDF:</div><div><? echo $_SERVER['HTTP_HOST'].'/pdf'; ?></div>
  <br><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Minimum Funds: 5Trx minimum daily profit 5%</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-Cumulative 5-30,000TRX daily minimum profit 5%</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-Cumulative 30,001-200,000TRX daily minimum profit 6%</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-Cumulative 200,001-500,000TRX daily minimum profit 7%</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-Cumulative 500,001-1,000,000 TRX daily minimum profit 8%</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-Cumulative 1,000,001-10,000,000 TRX daily minimum profit 10%</font></font></div><div><br></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recommend recharge to get rich rewards:</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recommend new user recharge rewards: 13% for first-level users, 5% for second-level users, and 2% for third-level users</font></font></div><div><br></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">You invite user A</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">You can get 1300TRX by investing 10000TRX in one recharge.</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A invites B</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B Recharge and invest 10000TRX to get 500TRX.</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B invite C</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C recharge and invest 10000TRX to get 200TRX.</font></font></div><div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Note: The inviter invests in the basic account</font></font></div></uni-view></div></div></div></uni-scroll-view><uni-view data-v-335a4cfc="" class="notification_btn flex alcenter"><uni-view data-v-335a4cfc="" class="flex-one"><uni-view data-v-335a4cfc="" class="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Previous</font></font></uni-view></uni-view><uni-view id="popupclosbtn" data-v-335a4cfc="" class="flex-one"><uni-view data-v-335a4cfc="" class="button close popclosedbtn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Close</font></font></uni-view></uni-view><uni-view data-v-335a4cfc="" class="flex-one"><uni-view data-v-335a4cfc="" class="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Next</font></font>
                    </uni-view>
                </uni-view>
            </uni-view>
        </uni-view>
    </uni-view>

      </uni-view></uni-view>
   <!----------------------------end of notification-->
      
      
      
      </uni-view></uni-page-body></uni-page-wrapper></uni-page>
                
    </uni-app>
             
                
                
                
                
                
                
                
                
                
    </body>

    <script src="static/js/jqoffline.js"></script>
    <script>
      
 ///////////////////////////////////////
$(document).on('click','.popclosedbtn', function(){
localStorage.setItem('popupvset','dj');
});
/////2.
 var popupvornot = localStorage.getItem('popupvset');
if(popupvornot)
{ $('#popupclosdiv').hide(10); }
///////////////////////////////////////////
      
      
    $(document).on('click','.bellicon', function(){
          window.location.href="notify.php";
    }); 
    $(document).on('click','#popupclosbtn', function(){
      $('#popupclosdiv').hide();
    }); 
    //////////////////////////
   
    /////////////////////////////////////////////
    /////////////////////////////////////////////
    $(document).on('click','.bhomebtn', function(){
          window.location.href="home.php";
    });     
    $(document).on('click','.btradebtn', function(){
          window.location.href="trading.php";
    }); 
    $(document).on('click','.bmidbtn', function(){
          window.location.href="productbuy.php";
    }); 
    $(document).on('click','.bsharebtn', function(){
          window.location.href="share.php";
    }); 
    $(document).on('click','.bminebtn', function(){
          window.location.href="mine.php";
    });       
 ///////////////////////////////////////








    </script>
            
<script>
var btotron = document.getElementById('btotron');
var ptotron = document.getElementById('ptotron');

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=tron&vs_currencies=usd",

    "method": "GET",
    "headers": {}
}

$.ajax(liveprice).done(function (response){
    var tronprice = response.tron.usd;
    
 var forbacc = <? echo $vlogf['sumout'] ?> * tronprice;
 btotron.innerHTML 
  = forbacc.toString().substring(0, 9);
  
 var forpacc = <? echo $vlogf['refbonus'] ?> * tronprice;
 ptotron.innerHTML 
  = forpacc.toString().substring(0, 9);
});
///////////////// TRON /////////////
</script>
        
</html>