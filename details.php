<?
include 'config.php';
// error_reporting(0);

if(!isset($_COOKIE['coklog']))
{ header('location:index.php'); }
//////////////////////////////////////
//////////////////////////////////////

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

////////////////////







?>






<!DOCTYPE html>
<html lang="en" style="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; --window-top:calc(var(--top-window-height) + calc(44px + env(safe-area-inset-top))); --window-bottom:0px;"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Notification</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
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

            .login-container[data-v-46374971]{min-height:100vh;background-image:url(static/img/login-bg.36a8d8de.jpg);background-size:100% 100%}.login-container .header[data-v-46374971]{padding:10px 15px}.login-container .header .left[data-v-46374971]{height:30px;line-height:30px}.login-container .header .language[data-v-46374971]{width:30px;height:30px;line-height:30px;color:#000;background:#f5c7eb;border-radius:50%;text-align:center}.login-container .header .language .head-dropdown[data-v-46374971]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.login-container .reg_content[data-v-46374971]{position:relative;padding-top:25px}.login-container .reg_content .logo[data-v-46374971]{width:154px;height:154px}.login-container .reg_content .form[data-v-46374971]{overflow:hidden;width:270px;margin:0 auto;padding-top:50px}.login-container .reg_content .form .item[data-v-46374971]{overflow:hidden;margin-bottom:12px}.login-container .reg_content .form .item .form-title[data-v-46374971]{font-size:16px;color:#191919;font-weight:700;margin-bottom:10px}.login-container .reg_content .form .item .label[data-v-46374971]{overflow:hidden;width:100%;border-radius:30px;background:#fff1f5;justify-content:flex-start;font-size:12px;height:52px;margin-left:14px;margin-bottom:13px}.login-container .reg_content .form .item .label uni-input[data-v-46374971]{width:60%;height:100%;padding-left:15px;font-size:14px;color:#ff8ab0}.login-container .reg_content .form .item .label .attach-img[data-v-46374971]{width:75px;height:30px}.login-container .reg_content .form .switchs .des[data-v-46374971]{color:#191919;font-size:10px;font-weight:700;margin-left:5px}.login-container .reg_content .button_grow[data-v-46374971]{overflow:hidden;width:247px;margin:50px auto 0}.login-container .reg_content .button_grow .btn[data-v-46374971]{overflow:hidden;width:100%;height:42px;border-radius:25px;display:flex;margin:0 auto 19px;align-items:center;background:#ff1964;justify-content:center;font-size:15px;font-weight:700;color:#fff}.login-container .reg_content .button_grow .btn.on[data-v-46374971]{background:#ffecf2;color:#ff1964}</style><script charset="utf-8" src="static/js/pages-home-home.2f1faa9c.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
/* iphonex 等安全区设置，底部安全区适配 */padding-bottom:constant(safe-area-inset-bottom);padding-bottom:env(safe-area-inset-bottom)}.content-ani[data-v-ad4fc5b6]{transition-property:opacity,-webkit-transform;transition-property:transform,opacity;transition-property:transform,opacity,-webkit-transform;transition-duration:.2s}.uni-top-content[data-v-ad4fc5b6]{-webkit-transform:translateY(0);transform:translateY(0)}.uni-bottom-content[data-v-ad4fc5b6]{-webkit-transform:translateY(0);transform:translateY(0)}.uni-center-content[data-v-ad4fc5b6]{-webkit-transform:scale(1);transform:scale(1);opacity:1}</style><style type="text/css">@charset "UTF-8";


    .home-container[data-v-335a4cfc]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);padding-bottom:85px;background-size:100%}.home-container .header-icon[data-v-335a4cfc]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.home-container .header-icon uni-image[data-v-335a4cfc]{width:21px;height:21px}.home-container .header-icon .counter[data-v-335a4cfc]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.home-container .head-dropdown[data-v-335a4cfc]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.home-container .notice-pop-container[data-v-335a4cfc]{width:75vw;background-color:#fff}.home-container .notice-pop-container .notification_title[data-v-335a4cfc]{color:#010166;height:45px;line-height:45px;border-bottom:1px solid #f5f2f2;text-align:center;font-weight:700;font-size:18px}.home-container .notice-pop-container .notification_content[data-v-335a4cfc]{height:250px;padding:15px;max-height:250px;min-height:100px;box-sizing:border-box}.home-container .notice-pop-container .notification_btn[data-v-335a4cfc]{height:45px;padding:0 10px;border-top:1px solid #f5f2f2}.home-container .notice-pop-container .notification_btn .button[data-v-335a4cfc]{width:96%;height:32px;line-height:32px;text-align:center;color:#fff;background:#ddd}.home-container .notice-pop-container .notification_btn .button.close[data-v-335a4cfc]{background:#d4d170}.home-container .bodydiv .contact[data-v-335a4cfc]{width:338px;height:57px;background-image:url(static/img/icon_15.ac3e2f9.ac3e2f9e.png);background-size:100% 100%;margin-left:17px;margin-top:25px;padding-left:69px;padding-top:5px;box-sizing:border-box}.home-container .bodydiv .main_problem[data-v-335a4cfc]{width:338px;height:70px;background-image:url(static/img/icon_18.d6bdad9.d6bdad9b.png);background-size:100% 100%;margin-left:17px;margin-top:8px;padding-top:17px;padding-left:70px;box-sizing:border-box}.home-container .bodydiv .navbar[data-v-335a4cfc]{display:flex;flex-wrap:wrap;justify-content:space-between;width:100%;padding:0 20px;margin-bottom:67px;box-sizing:border-box}.home-container .bodydiv .navbar .nav-item[data-v-335a4cfc]{width:33.3%;margin-top:21px}.home-container .bodydiv .navbar .nav-item uni-image[data-v-335a4cfc]{display:block;width:60px;height:60px;margin:0 auto}.home-container .bodydiv .label[data-v-335a4cfc]{width:341px;height:85px;background-image:url(static/img/icon_39.8e09b5a.8e09b5a4.png);background-size:100% 100%;margin-left:14px;margin-bottom:13px;padding-left:90px;padding-top:20px;box-sizing:border-box}.home-container .bodydiv .label.on[data-v-335a4cfc]{background-image:url(static/img/icon_41.794ced2.794ced21.png)}.home-container .bodydiv .main_join[data-v-335a4cfc]{width:100%;height:422px;background-size:100% 100%;background-image:url(static/img/bgbg_02.54c1fc0.54c1fc0b.png);padding-top:65px;text-align:center;box-sizing:border-box}.home-container .bodydiv .main_join .des[data-v-335a4cfc]{width:245px;text-align:center;margin:0 auto;line-height:17px}.home-container .bodydiv .main_join uni-image[data-v-335a4cfc]{width:338px;height:190px;margin:15px auto 0}.home-container .bodydiv .main_join .btn[data-v-335a4cfc]{width:148px;height:35px;border-radius:25px;font-size:16px;font-weight:700;color:#fff;background-color:#e73b66;margin:10px auto 0}.home-container .bodydiv .main_display .h3[data-v-335a4cfc]{font-size:21px;font-weight:700;margin-left:23px;color:#191919}.home-container .bodydiv .main_display .box[data-v-335a4cfc]{height:184px;background-size:100% 100%;background-image:url(static/img/icon_46.3328697.33286971.png);padding:96px 22px 0 19px;box-sizing:border-box}.home-container .bodydiv .main_display .box .item[data-v-335a4cfc]{width:158px;overflow:hidden}.home-container .bodydiv .main_display .box .item uni-view[data-v-335a4cfc]{text-align:center;font-size:20px;color:#fff;margin-bottom:10px;font-weight:700}.home-container .bodydiv .main_display .box .item uni-text[data-v-335a4cfc]{display:block;text-align:center;font-size:9px;opacity:.8;color:#fff}.home-container .bodydiv .main_about[data-v-335a4cfc]{height:725px;background-image:url(static/img/bgbg_04.0954b65.0954b651.png);background-size:100% 100%}.home-container .bodydiv .main_about .about[data-v-335a4cfc]{height:500px;padding:30px 0 0;box-sizing:border-box}.home-container .bodydiv .main_about .about .title[data-v-335a4cfc]{text-align:center;font-size:12px;font-weight:700;margin-bottom:7px;color:#ef5079}.home-container .bodydiv .main_about .about uni-text[data-v-335a4cfc]{display:block;text-align:center;font-size:18px;font-weight:700;color:#2a2a2a}.home-container .bodydiv .main_about .about uni-image[data-v-335a4cfc]{width:338px;height:188px;margin:25px auto 0}.home-container .bodydiv .main_about .about .content[data-v-335a4cfc]{width:285px;margin:7px auto 0;font-size:9px;color:#2a2a2a;text-align:center}.home-container .bodydiv .main_about .oartners[data-v-335a4cfc]{overflow:hidden;margin-top:37px}.home-container .bodydiv .main_about .oartners uni-view[data-v-335a4cfc]{text-align:center;font-size:21px;margin-bottom:30px;color:#2a2a2a;font-weight:700}.home-container .bodydiv .main_about .oartners .grow[data-v-335a4cfc]{display:flex;flex-wrap:wrap;justify-content:center}.home-container .bodydiv .main_about .oartners .grow uni-image[data-v-335a4cfc]{display:block;width:80px;height:30px;margin:0 13px 16px 16px}.home-container .footer[data-v-335a4cfc]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.home-container .footer .item[data-v-335a4cfc]{padding-top:39px}.home-container .footer .mid[data-v-335a4cfc]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.home-container .footer .tabbar[data-v-335a4cfc]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.home-container .footer .tabbar uni-view[data-v-335a4cfc]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.home-container .footer .tabbar uni-view.active[data-v-335a4cfc]{color:#ff2768}</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
        }</style><script charset="utf-8" src="static/js/pages-home-noticeDetail.3c957a07.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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


            .notice-detail-container[data-v-d0ffc91e]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);background-size:100%;background-color:#f6f7fa}.notice-detail-container .main-container[data-v-d0ffc91e]{background-color:#f0f3f7;border-radius:20px;padding-top:15px;padding-bottom:15px;min-height:80%;box-sizing:border-box}.notice-detail-container .main-container .container[data-v-d0ffc91e]{padding:0 15px;margin:0 auto;box-sizing:border-box}.notice-detail-container .main-container .container .card[data-v-d0ffc91e]{position:relative;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:initial;box-shadow:0 2px 5px rgba(0,0,0,.05);border-radius:15px}.notice-detail-container .main-container .container .card .title[data-v-d0ffc91e]{font-size:16px;font-weight:700}.notice-detail-container .main-container .container .card .time[data-v-d0ffc91e]{margin:10px 0}.notice-detail-container .main-container .container .card .content[data-v-d0ffc91e]{color:#6c757d!important}</style><script charset="utf-8" src="static/js/pages-home-notice.86b91076.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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

            .uni-load-more[data-v-65a002e0]{display:flex;flex-direction:row;height:40px;align-items:center;justify-content:center}.uni-load-more__text[data-v-65a002e0]{font-size:15px}.uni-load-more__img[data-v-65a002e0]{width:24px;height:24px;margin-right:8px}.uni-load-more__img--nvue[data-v-65a002e0]{color:#666}.uni-load-more__img--android[data-v-65a002e0],
.uni-load-more__img--ios[data-v-65a002e0]{width:24px;height:24px;-webkit-transform:rotate(0deg);transform:rotate(0deg)}.uni-load-more__img--android[data-v-65a002e0]{-webkit-animation:loading-ios 1s 0s linear infinite;animation:loading-ios 1s 0s linear infinite}@-webkit-keyframes loading-android-data-v-65a002e0{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes loading-android-data-v-65a002e0{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.uni-load-more__img--ios-H5[data-v-65a002e0]{position:relative;-webkit-animation:loading-ios-H5-data-v-65a002e0 1s 0s step-end infinite;animation:loading-ios-H5-data-v-65a002e0 1s 0s step-end infinite}.uni-load-more__img--ios-H5 > uni-image[data-v-65a002e0]{position:absolute;width:100%;height:100%;left:0;top:0}@-webkit-keyframes loading-ios-H5-data-v-65a002e0{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}8%{-webkit-transform:rotate(30deg);transform:rotate(30deg)}16%{-webkit-transform:rotate(60deg);transform:rotate(60deg)}24%{-webkit-transform:rotate(90deg);transform:rotate(90deg)}32%{-webkit-transform:rotate(120deg);transform:rotate(120deg)}40%{-webkit-transform:rotate(150deg);transform:rotate(150deg)}48%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}56%{-webkit-transform:rotate(210deg);transform:rotate(210deg)}64%{-webkit-transform:rotate(240deg);transform:rotate(240deg)}73%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}82%{-webkit-transform:rotate(300deg);transform:rotate(300deg)}91%{-webkit-transform:rotate(330deg);transform:rotate(330deg)}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes loading-ios-H5-data-v-65a002e0{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}8%{-webkit-transform:rotate(30deg);transform:rotate(30deg)}16%{-webkit-transform:rotate(60deg);transform:rotate(60deg)}24%{-webkit-transform:rotate(90deg);transform:rotate(90deg)}32%{-webkit-transform:rotate(120deg);transform:rotate(120deg)}40%{-webkit-transform:rotate(150deg);transform:rotate(150deg)}48%{-webkit-transform:rotate(180deg);transform:rotate(180deg)}56%{-webkit-transform:rotate(210deg);transform:rotate(210deg)}64%{-webkit-transform:rotate(240deg);transform:rotate(240deg)}73%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}82%{-webkit-transform:rotate(300deg);transform:rotate(300deg)}91%{-webkit-transform:rotate(330deg);transform:rotate(330deg)}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.uni-load-more__img--android-H5[data-v-65a002e0]{-webkit-animation:loading-android-H5-rotate-data-v-65a002e0 2s linear infinite;animation:loading-android-H5-rotate-data-v-65a002e0 2s linear infinite;-webkit-transform-origin:center center;transform-origin:center center}.uni-load-more__img--android-H5 > circle[data-v-65a002e0]{display:inline-block;-webkit-animation:loading-android-H5-dash-data-v-65a002e0 1.5s ease-in-out infinite;animation:loading-android-H5-dash-data-v-65a002e0 1.5s ease-in-out infinite;stroke:currentColor;stroke-linecap:round}@-webkit-keyframes loading-android-H5-rotate-data-v-65a002e0{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes loading-android-H5-rotate-data-v-65a002e0{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@-webkit-keyframes loading-android-H5-dash-data-v-65a002e0{0%{stroke-dasharray:1,200;stroke-dashoffset:0}50%{stroke-dasharray:90,150;stroke-dashoffset:-40}100%{stroke-dasharray:90,150;stroke-dashoffset:-120}}@keyframes loading-android-H5-dash-data-v-65a002e0{0%{stroke-dasharray:1,200;stroke-dashoffset:0}50%{stroke-dasharray:90,150;stroke-dashoffset:-40}100%{stroke-dasharray:90,150;stroke-dashoffset:-120}}</style><style type="text/css">@charset "UTF-8";
.notice-container[data-v-289564d2]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);background-size:100%;background-color:#f6f7fa}.notice-container .list[data-v-289564d2]{background-color:#f0f3f7;border-radius:20px;padding-top:15px;padding-bottom:15px;min-height:80%}.notice-container .list .container[data-v-289564d2]{padding:0 15px;margin:0 auto}.notice-container .list .container .card[data-v-289564d2]{position:relative;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:initial;box-shadow:0 2px 5px rgba(0,0,0,.05);border-radius:15px}.notice-container .list .container .card uni-image[data-v-289564d2]{width:21px;height:21px;margin-right:15px}.notice-container .list .container .card .title[data-v-289564d2]{color:#007bff}.notice-container .list .container .card .time[data-v-289564d2]{color:#6c757d;font-size:80%}</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
        }</style></head><body class="uni-body pages-home-noticeDetail"><noscript><strong>Please enable JavaScript to continue.</strong></noscript><uni-app class="uni-app--maxwidth"><uni-page data-page="pages/home/noticeDetail"><uni-page-head uni-page-head-type="default"><div class="uni-page-head" style="background-color: rgb(248, 248, 248); color: rgb(0, 0, 0);"><div class="uni-page-head-hd"><div class="uni-page-head-btn"><i onclick="history.back()" class="uni-btn-icon" style="color: rgb(0, 0, 0); font-size: 27px;"></i></div><div class="uni-page-head-ft"></div></div><div class="uni-page-head-bd"><div class="uni-page-head__title" style="font-size: 16px; opacity: 1;"><!----> Notification </div></div><!----><div class="uni-page-head-ft"></div></div><div class="uni-placeholder"></div></uni-page-head><!----><uni-page-wrapper><uni-page-body><uni-view data-v-d0ffc91e="" class="notice-detail-container"><uni-view data-v-d0ffc91e="" class="main-container"><uni-view data-v-d0ffc91e="" class="container"><uni-view data-v-d0ffc91e="" class="card"><uni-view data-v-d0ffc91e="" class="card-body pd30"><uni-view data-v-d0ffc91e="" class="title">Latest Announcement</uni-view><uni-view data-v-d0ffc91e="" class="time">2021-12-17 22:21:09</uni-view>
  <uni-view data-v-d0ffc91e="" class="content"><div>Great platform for novices and novices only needs to deposit their own funds.For example, USDT TRX BTC ETH is deposited into the platform and then the platform automatically helps you participate in mining,and the proceeds can be extracted to your account daily, with a yield of up to 5-15%.</div><div><br></div><div>&nbsp;looking for the only official link:</div><div>&nbsp;<? echo $_SERVER['HTTP_HOST']; ?></div>
  
  <div><br></div>
  <div>Official Telegram Customer Service:</div><div><? echo $chkq['tglink']; ?></div>
  
  <div><br></div>
  <div>Official TRX PDF:</div><div><? echo $_SERVER['HTTP_HOST'].'/pdf'; ?></div>
  
  <div><br></div><div>Registration reward: 100Trx</div><div>Minimum Funds: 5Trx minimum daily profit 5%</div><div>-Cumulative 5-30,000TRX daily minimum profit 5%</div><div>-Cumulative 30,001-200,000TRX daily minimum profit 6%</div><div>-Cumulative 200,001-500,000TRX daily minimum profit 7%</div><div>-Cumulative 500,001-1,000,000 TRX daily minimum profit 8%</div><div>-Cumulative 1,000,001-10,000,000 TRX daily minimum profit 10%</div><div><br></div><div>Recommend recharge to get rich rewards:</div><div>Recommend new user recharge rewards: 13% for first-level users, 5% for second-level users, and 2% for third-level users</div><div><br></div><div>You invite user A</div><div>You can get 1300TRX by investing 10000TRX in one recharge.</div><div>A invites B</div><div>B Recharge and invest 10000TRX to get 500TRX.</div><div>B invite C</div><div>C recharge and invest 10000TRX to get 200TRX.</div><div>Note: The inviter invests in the basic account</div></uni-view></uni-view></uni-view></uni-view></uni-view></uni-view></uni-page-body></uni-page-wrapper></uni-page><uni-tabbar class="uni-tabbar-bottom" style="display: none;"><div class="uni-tabbar" style="background-color: rgb(255, 255, 255); backdrop-filter: none;"><div class="uni-tabbar-border" style="background-color: rgba(0, 0, 0, 0.33);"></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/home-selected.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(255, 39, 104); font-size: 10px; line-height: normal; margin-top: 3px;"> home <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/tradin.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> tradin <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/tradin.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> investlist <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/share.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> share <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/mine.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> mine <!----></div></div></div></div><div class="uni-placeholder" style="height: 50px;"></div></uni-tabbar><!----><uni-actionsheet><div class="uni-mask uni-actionsheet__mask" style="display: none;"></div><div class="uni-actionsheet"><div class="uni-actionsheet__menu"><!----><!----><div style="max-height: 260px; overflow: hidden;"><div style="transform: translateY(0px) translateZ(0px);"></div></div></div><div class="uni-actionsheet__action"><div class="uni-actionsheet__cell" style="color: rgb(0, 0, 0);"> Cancel </div></div><div></div></div><!----></uni-actionsheet><uni-modal style="display: none;"><div class="uni-mask"></div><div class="uni-modal"><!----><div class="uni-modal__bd"></div><div class="uni-modal__ft"><div class="uni-modal__btn uni-modal__btn_default" style="color: rgb(0, 0, 0);"> Cancel </div><div class="uni-modal__btn uni-modal__btn_primary" style="color: rgb(0, 122, 255);"> OK </div></div></div><!----></uni-modal><!----></uni-app><script src="static/js/chunk-vendors.2820b272.js"></script><script src="static/js/index.8124fd70.js"></script><div style="position: absolute; left: 0px; top: 0px; width: 0px; height: 0px; z-index: -1; overflow: hidden; visibility: hidden;"><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div></div>
        
      
      </body></html>