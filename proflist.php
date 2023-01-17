
<?php

include 'config.php';
session_start();
$vusrlog = $_COOKIE['coklog'];

$vusrdata = "SELECT * FROM `userslog` WHERE usrphone = '$vusrlog'";
$vusrdataq =mysqli_query($db,$vusrdata);
$vusrdataf = mysqli_fetch_array($vusrdataq);











?>


<!DOCTYPE html>
<html lang="en" style="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; --window-top:calc(var(--top-window-height) + 0px); --window-bottom:0px;" class="translated-ltr">




<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Profit list</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
    document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')</script><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><link rel="stylesheet" href="static/index.a5c69d49.css"><style type="text/css">



.col-3{width:93px}.flex{display:flex}.flex-one{flex:1}.flex-wrap{flex-wrap:wrap}.flex-center{display:flex;justify-content:center;align-items:center}.flex-around{display:flex;justify-content:space-around}.flex-end{display:flex;justify-content:flex-end}.flex-between{display:flex;justify-content:space-between!important}.justify-center{justify-content:center}.alcenter{align-items:center}.flex-column{display:flex;flex-direction:column}.rounded{border-radius:4px}.bg-white{background-color:#fff}.bg-EE9D18{background-color:#ee9d18}.bg-e5e5e5{background-color:#e5e5e5}.bg_FFA1AF{background-color:#ffa1af}.bg_f0f2f5{background-color:#f0f2f5}.bg_54BCB7{background-color:#54bcb7}.bg_C5CFD5{background-color:#c5cfd5}.c_172045{color:#172045}.c_FF5C5C{color:#ff5c5c}.c_099AFF{color:#099aff}.c_AAAAAA{color:#aaa}.c_F71D1D{color:#f71d1d}.c_313233{color:#313233}.c_4945FF{color:#4945ff}.c_10AA06{color:#10aa06}.c_FF9900{color:#f90}.c_B4B5B6{color:#b4b5b6}.c_C7D0D6{color:#c7d0d6}.c_6c757d{color:#6c757d}.c_8C9FAD{color:#8c9fad}.c_989AAA{color:#989aaa}.c_9B9898{color:#9b9898}.c_a9acb2{color:#a9acb2}.c_171717{color:#171717}.c_191919{color:#191919}.c_f07a9a{color:#f07a9a}.c_ef5079{color:#ef5079}.c_54BCB7{color:#54bcb7}.c_C5CFD5{color:#c5cfd5}.c_FFA1AF{color:#ffa1af}.c-EE9D18{color:#ee9d18}.c_FF5900{color:#ff5900}.c-00A212{color:#00a212}.c_2a2a2a{color:#2a2a2a}.c_FA9A43{color:#fa9a43}.c-white{color:#fff}.c_666{color:#666}.c_999{color:#999}.c_gray{color:#ccc}.c_969797{color:#969797}.c_8E8E93{color:#8e8e93}.c_abacb9{color:#abacb9}.c_848484{color:#848484}.c_F7B500{color:#f7b500}.c_8A6756{color:#8a6756}.c_F43F36{color:#f43f36}.c_FA6400{color:#fa6400}.c_red{color:red}.color-red{color:#ff5340}.c_black{color:#000}.c_333{color:c_333}.line:after{content:"";position:absolute;left:0;bottom:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_top:after{content:"";position:absolute;left:0;top:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom:after{content:"";position:absolute;left:0;bottom:0;background:#e6e6e6;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom_one:after{content:"";position:absolute;left:0;bottom:1px;background:#d5d5d8;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_right:after{content:"";position:absolute;top:0;right:0;background:#d5d5d8;width:1px;height:100%;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.w_650{width:325px}.h_100{height:100%}.h40{height:20px}.h120{height:60px}.h100{height:50px}.h110{height:55px}.h60{height:30px}.h80{height:40px}.h88{height:44px}.h90{height:45px}.mt32-mb48{margin-top:16px;margin-bottom:24px}.mt10{margin-top:5px}.mt48{margin-top:24px}.mb10{margin-bottom:5px}.mb16{margin-bottom:8px}.mb20{margin-bottom:10px}.mb30{margin-bottom:15px}.mb40{margin-bottom:20px!important}.mb45{margin-bottom:22px!important}.ml4{margin-left:2px}.ml10{margin-left:5px}.ml60{margin-left:30px}.ml70{margin-left:35px}.ml100{margin-left:50px}.ml110{margin-left:55px}.ml20{margin-left:10px}.ml30{margin-left:15px}.ml40{margin-left:20px}.mr10{margin-right:5px}.mr20{margin-right:10px}.mr30{margin-right:15px}.mr40{margin-right:20px}.mr70{margin-right:35px}.mr100{margin-right:50px}.mt20{margin-top:10px!important}.mt13{margin-top:6px}.mt30{margin-top:15px}.mt40{margin-top:20px}.mt50{margin-top:25px}.mt60{margin-top:30px}.mt80{margin-top:40px}.mt120{margin-top:60px}.mt160{margin-top:80px}.mlr10{margin-left:5px;margin-right:5px}.mlr30{margin-left:15px;margin-right:15px}.mlr40{margin-left:20px;margin-right:20px}.pl10{padding-left:5px}.pl30{padding-left:15px}.pl60{padding-left:30px}.pl130{padding-left:65px}.pl20{padding-left:10px}.pr10{padding-right:5px}.pr20{padding-right:10px}.pd10{padding:5px}.pd20{padding:10px!important}.pd30{padding:15px}.pd40{padding:20px}.plr10{padding-left:5px;padding-right:5px}.plr20{padding-left:10px;padding-right:10px}.plr30{padding-left:15px;padding-right:15px}.plr40{padding-left:20px!important;padding-right:20px!important}.plr56{padding-left:28px!important;padding-right:28px!important}.pt20{padding-top:10px}.pt30{padding-top:15px}.pt40{padding-top:20px}.pb20{padding-bottom:10px}.pb30{padding-bottom:15px}.pb40{padding-bottom:20px}.pb100{padding-bottom:50px}.mb20{margin-bottom:10px!important}.mb40{margin-bottom:20px!important}.mb60{margin-bottom:30px!important}.mb80{margin-bottom:40px!important}.text-center{text-align:center}.line-one{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.line-two{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden;text-overflow:ellipsis}.ft16{font-size:8px}.ft20{font-size:10px!important}.ft24{font-size:12px}.ft26{font-size:13px}.ft28{font-size:14px}.ft30{font-size:15px}.ft32{font-size:16px}.ft36{font-size:18px}.ft40{font-size:20px}.ft48{font-size:24px}.ft50{font-size:25px}.ft60{font-size:30px}.ft73{font-size:36px}.ft80{font-size:40px}.lh36{line-height:18px}.lh40{line-height:20px}.lh56{line-height:28px}.font-bold{font-weight:700}.relative{position:relative}.pf{font-family:PingFangSC-Semibold,PingFang SC}uni-page-body{font-size:14px;color:#212529;font-family:PingFangSC-Semibold,PingFang SC;background-color:#f5f8fa}body{background-color:#f5f8fa}</style><script charset="utf-8" src="static/js/pages-mine-mine.9b3f2078.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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


            .mine-container[data-v-1463d8c0]{min-height:100vh;background-image:url(static/img/minebg.94d2a2a.94d2a2a8.jpg);background-size:100%;background-repeat:no-repeat;padding-bottom:85px}.mine-container .header-icon[data-v-1463d8c0]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.mine-container .header-icon uni-image[data-v-1463d8c0]{width:21px;height:21px}.mine-container .header-icon .counter[data-v-1463d8c0]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.mine-container .head-dropdown[data-v-1463d8c0]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.mine-container .services_content[data-v-1463d8c0]{padding-top:40px;padding-bottom:25px;box-sizing:border-box}.mine-container .services_content .link_icon[data-v-1463d8c0]{padding:0 16px 0 18px;box-sizing:border-box;display:flex;margin-top:32px;justify-content:space-between}.mine-container .services_content .link_icon .item[data-v-1463d8c0]{width:162px;height:61px;display:flex;align-items:center;font-size:15px;color:#fff;font-weight:700;padding-left:75px;background-size:100% 100%;background-image:url(static/img/deposit.a81e70ba.png);box-sizing:border-box}.mine-container .services_content .link_icon .item[data-v-1463d8c0]:last-child{padding-left:62px;background-image:url(static/img/withdrawal.aa608514.png)}.mine-container .services_content .main_quantity[data-v-1463d8c0]{height:140px;padding:40px 40px 0 43px;background-size:100% 100%;background-image:url(static/img/pagebgs_02.61737d2.61737d2d.png);box-sizing:border-box}.mine-container .services_content .main_quantity .title[data-v-1463d8c0]{align-items:flex-end;font-size:13px;color:#191919;font-weight:700}.mine-container .services_content .main_quantity .title uni-text[data-v-1463d8c0]{font-size:17px;margin-left:7px;color:#ff3c78}.mine-container .services_content .main_quantity .des[data-v-1463d8c0]{font-size:12px;color:#191919;line-height:19px;margin-top:10px}.mine-container .services_content .service_list[data-v-1463d8c0]{padding:45px 0 0}.mine-container .services_content .service_list .h3[data-v-1463d8c0]{font-size:21px;color:#191919;font-weight:700;margin-left:25px;margin-bottom:10px}.mine-container .services_content .service_list .list[data-v-1463d8c0]{margin-top:7px}.mine-container .services_content .service_list .item[data-v-1463d8c0]{display:flex;align-items:center;padding-left:32px;height:88px;background-size:100% 100%;background-image:url(static/img/mine-item.a16d491b.png);font-size:15px;color:#5a5253;font-weight:700;box-sizing:border-box}.mine-container .services_content .service_list .item uni-image[data-v-1463d8c0]{width:45px;height:44px}.mine-container .services_content .service_list .item uni-view[data-v-1463d8c0]{margin-left:14px}.mine-container .footer[data-v-1463d8c0]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.mine-container .footer .item[data-v-1463d8c0]{padding-top:39px}.mine-container .footer .mid[data-v-1463d8c0]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.mine-container .footer .tabbar[data-v-1463d8c0]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.mine-container .footer .tabbar uni-view[data-v-1463d8c0]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.mine-container .footer .tabbar uni-view.active[data-v-1463d8c0]{color:#ff2768}</style><script charset="utf-8" src="static/js/pages-mine-transfer.7737106d.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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


            .transfer-container[data-v-3901c79c]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);background-size:100%}.transfer-container .main-container[data-v-3901c79c]{background-color:#f0f3f7;border-radius:20px}.transfer-container .card[data-v-3901c79c]{height:86px}.transfer-container .card .card-body[data-v-3901c79c]{border-radius:15px;background-color:#fff}.transfer-container .card .title[data-v-3901c79c]{color:#6c757d;font-size:80%}.transfer-container .card .num[data-v-3901c79c]{font-size:15px;font-weight:700;color:#20c2ce}.transfer-container .form-group[data-v-3901c79c]{height:33px;color:#495057;border:1px solid #ced4da;border-radius:18px;background-color:#fff}.transfer-container .form-group uni-input[data-v-3901c79c]{height:100%}.transfer-container .confirm-btn[data-v-3901c79c]{height:33px;background-color:#ff2768;color:#fff;border-radius:24px}</style><script charset="utf-8" src="static/js/pages-mine-profit~pages-tradin-tradelist.8307726c.js"></script><script charset="utf-8" src="static/js/pages-mine-profit.e44999d1.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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

.uni-calendar-item__weeks-box[data-v-a2dc3574]{flex:1;display:flex;flex-direction:column;justify-content:center;align-items:center;margin:3px 0}.uni-calendar-item__weeks-box-text[data-v-a2dc3574]{font-size:12px}.uni-calendar-item__weeks-lunar-text[data-v-a2dc3574]{font-size:12px;color:#333}.uni-calendar-item__weeks-box-item[data-v-a2dc3574]{position:relative;display:flex;flex-direction:column;justify-content:center;align-items:center;width:40px;height:40px;cursor:pointer}.uni-calendar-item__weeks-box-circle[data-v-a2dc3574]{position:absolute;top:5px;right:5px;width:8px;height:8px;border-radius:8px;background-color:#dd524d}.uni-calendar-item__weeks-box .uni-calendar-item--disable[data-v-a2dc3574]{color:silver;cursor:default}.uni-calendar-item__weeks-box .uni-calendar-item--isDay-text[data-v-a2dc3574]{color:#007aff}.uni-calendar-item--isDay[data-v-a2dc3574]{background-color:#007aff;opacity:.8;color:#fff}.uni-calendar-item--extra[data-v-a2dc3574]{color:#dd524d;opacity:.8}.uni-calendar-item__weeks-box .uni-calendar-item--checked[data-v-a2dc3574]{background-color:#007aff;box-sizing:border-box;border:6px solid #f2f6fc;color:#fff;opacity:.8}.uni-calendar-item--multiple .uni-calendar-item--checked-range-text[data-v-a2dc3574]{color:#333}.uni-calendar-item--multiple[data-v-a2dc3574]{background-color:#f2f6fc;opacity:.8}.uni-calendar-item--multiple .uni-calendar-item--before-checked[data-v-a2dc3574]{background-color:#409eff;color:#fff!important;box-sizing:border-box;border:6px solid #f2f6fc}.uni-calendar-item--multiple .uni-calendar-item--after-checked[data-v-a2dc3574]{background-color:#409eff;color:#fff!important;box-sizing:border-box;border:6px solid #f2f6fc}.uni-calendar-item--before-checked-x[data-v-a2dc3574]{background-color:#f2f6fc}.uni-calendar-item--after-checked-x[data-v-a2dc3574]{background-color:#f2f6fc}</style><style type="text/css">.uni-datetime-picker[data-v-259b5530]{

/* width: 100%; */
}.uni-datetime-picker-view[data-v-259b5530]{height:130px;width:270px;
cursor:pointer
}.uni-datetime-picker-item[data-v-259b5530]{height:50px;line-height:50px;text-align:center;font-size:14px}.uni-datetime-picker-btn[data-v-259b5530]{margin-top:60px;
display:flex;cursor:pointer;
flex-direction:row;justify-content:space-between}.uni-datetime-picker-btn-text[data-v-259b5530]{font-size:14px;color:#007aff}.uni-datetime-picker-btn-group[data-v-259b5530]{
display:flex;
flex-direction:row}.uni-datetime-picker-cancel[data-v-259b5530]{margin-right:30px}.uni-datetime-picker-mask[data-v-259b5530]{position:fixed;bottom:0;top:0;left:0;right:0;background-color:rgba(0,0,0,.4);transition-duration:.3s;z-index:998}.uni-datetime-picker-popup[data-v-259b5530]{border-radius:8px;padding:30px;width:270px;



background-color:#fff;position:fixed;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);transition-duration:.3s;z-index:999}.fix-nvue-height[data-v-259b5530]{
}.uni-datetime-picker-time[data-v-259b5530]{color:grey}.uni-datetime-picker-column[data-v-259b5530]{height:50px}.uni-datetime-picker-timebox[data-v-259b5530]{border:1px solid #e5e5e5;border-radius:5px;padding:7px 10px;
box-sizing:border-box;cursor:pointer
}.uni-datetime-picker-timebox-pointer[data-v-259b5530]{
cursor:pointer
}.uni-datetime-picker-disabled[data-v-259b5530]{opacity:.4;
cursor:not-allowed!important
}.uni-datetime-picker-text[data-v-259b5530]{font-size:14px}.uni-datetime-picker-sign[data-v-259b5530]{position:absolute;top:53px;
color:#999;
}.sign-left[data-v-259b5530]{left:86px}.sign-right[data-v-259b5530]{right:86px}.sign-center[data-v-259b5530]{left:135px}.uni-datetime-picker__container-box[data-v-259b5530]{position:relative;display:flex;align-items:center;justify-content:center;margin-top:40px}.time-hide-second[data-v-259b5530]{width:180px}</style><style type="text/css">@charset "UTF-8";


    .uni-calendar[data-v-6473dfca]{display:flex;flex-direction:column}.uni-calendar__mask[data-v-6473dfca]{position:fixed;bottom:0;top:0;left:0;right:0;background-color:rgba(0,0,0,.4);transition-property:opacity;transition-duration:.3s;opacity:0;z-index:99}.uni-calendar--mask-show[data-v-6473dfca]{opacity:1}.uni-calendar--fixed[data-v-6473dfca]{position:fixed;bottom:calc(var(--window-bottom));left:0;right:0;transition-property:-webkit-transform;transition-property:transform;transition-property:transform,-webkit-transform;transition-duration:.3s;-webkit-transform:translateY(460px);transform:translateY(460px);z-index:99}.uni-calendar--ani-show[data-v-6473dfca]{-webkit-transform:translateY(0);transform:translateY(0)}.uni-calendar__content[data-v-6473dfca]{background-color:#fff}.uni-calendar__header[data-v-6473dfca]{position:relative;display:flex;flex-direction:row;justify-content:center;align-items:center;height:50px}.uni-calendar--fixed-top[data-v-6473dfca]{display:flex;flex-direction:row;justify-content:space-between;border-top-color:#c8c7cc;border-top-style:solid;border-top-width:1px}.uni-calendar--fixed-width[data-v-6473dfca]{width:50px}.uni-calendar__backtoday[data-v-6473dfca]{position:absolute;right:0;top:12px;padding:0 5px;padding-left:10px;height:25px;line-height:25px;font-size:12px;border-top-left-radius:25px;border-bottom-left-radius:25px;color:#333;background-color:#f1f1f1}.uni-calendar__header-text[data-v-6473dfca]{text-align:center;width:100px;font-size:14px;color:#333}.uni-calendar__button-text[data-v-6473dfca]{text-align:center;width:100px;font-size:14px;color:#007aff;letter-spacing:3px}.uni-calendar__header-btn-box[data-v-6473dfca]{display:flex;flex-direction:row;align-items:center;justify-content:center;width:50px;height:50px}.uni-calendar__header-btn[data-v-6473dfca]{width:8px;height:8px;border-left-color:grey;border-left-style:solid;border-left-width:1px;border-top-color:#555;border-top-style:solid;border-top-width:1px}.uni-calendar--left[data-v-6473dfca]{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.uni-calendar--right[data-v-6473dfca]{-webkit-transform:rotate(135deg);transform:rotate(135deg)}.uni-calendar__weeks[data-v-6473dfca]{position:relative;display:flex;flex-direction:row}.uni-calendar__weeks-item[data-v-6473dfca]{flex:1}.uni-calendar__weeks-day[data-v-6473dfca]{flex:1;display:flex;flex-direction:column;justify-content:center;align-items:center;height:40px;border-bottom-color:#f5f5f5;border-bottom-style:solid;border-bottom-width:1px}.uni-calendar__weeks-day-text[data-v-6473dfca]{font-size:12px}.uni-calendar__box[data-v-6473dfca]{position:relative}.uni-calendar__box-bg[data-v-6473dfca]{display:flex;justify-content:center;align-items:center;position:absolute;top:0;left:0;right:0;bottom:0}.uni-calendar__box-bg-text[data-v-6473dfca]{font-size:200px;font-weight:700;color:#999;opacity:.1;text-align:center;line-height:1}.uni-date-changed[data-v-6473dfca]{padding:0 10px;text-align:center;color:#333;border-top-color:#c8c7cc;border-top-style:solid;border-top-width:1px;flex:1}.uni-date-changed--time-start[data-v-6473dfca]{display:flex;align-items:center}.uni-date-changed--time-end[data-v-6473dfca]{display:flex;align-items:center}.uni-date-changed--time-date[data-v-6473dfca]{color:#999;line-height:50px;margin-right:5px}.time-picker-style[data-v-6473dfca]{display:flex;justify-content:center;align-items:center}.mr-10[data-v-6473dfca]{margin-right:10px}</style><style type="text/css">.uni-date-x[data-v-24cc61b4]{display:flex;flex-direction:row;align-items:center;justify-content:center;padding:0 10px;border-radius:4px;background-color:#fff;color:#666;font-size:14px}.uni-date-x--border[data-v-24cc61b4]{box-sizing:border-box;border-radius:4px;border:1px solid #dcdfe6}.uni-date-editor--x[data-v-24cc61b4]{position:relative}.uni-date-editor--x .uni-date__icon-clear[data-v-24cc61b4]{position:absolute;top:5px;right:0;display:inline-block;box-sizing:border-box;border:6px solid transparent;margin-right:6px;
cursor:pointer
}.uni-date__x-input[data-v-24cc61b4]{padding:0 8px;height:40px;width:100%;line-height:40px;font-size:14px}.t-c[data-v-24cc61b4]{text-align:center}.uni-date__input[data-v-24cc61b4]{height:40px;width:100%;line-height:40px;font-size:14px}.uni-date-range__input[data-v-24cc61b4]{text-align:center;max-width:142px}.uni-date-picker__container[data-v-24cc61b4]{position:relative
/* 		position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
box-sizing: border-box;
z-index: 996;
font-size: 14px; */}.uni-date-mask[data-v-24cc61b4]{position:fixed;bottom:0;top:0;left:0;right:0;background-color:transparent;transition-duration:.3s;z-index:996}.uni-date-single--x[data-v-24cc61b4]{
/* padding: 0 8px; */background-color:#fff;position:absolute;top:0;z-index:999;border:1px solid #e4e7ed;box-shadow:0 2px 12px 0 rgb(0 0 0/10%);border-radius:4px}.uni-date-range--x[data-v-24cc61b4]{
/* padding: 0 8px; */background-color:#fff;position:absolute;top:0;z-index:999;border:1px solid #e4e7ed;box-shadow:0 2px 12px 0 rgb(0 0 0/10%);border-radius:4px}.uni-date-editor--x__disabled[data-v-24cc61b4]{opacity:.4;cursor:default}.uni-date-editor--logo[data-v-24cc61b4]{width:16px;height:16px;vertical-align:middle}

.popup-x-header[data-v-24cc61b4]{
display:flex;
flex-direction:row
/* justify-content: space-between; */}.popup-x-header--datetime[data-v-24cc61b4]{
display:flex;
flex-direction:row;flex:1}.popup-x-body[data-v-24cc61b4]{display:flex}.popup-x-footer[data-v-24cc61b4]{padding:0 15px;border-top-color:#f1f1f1;border-top-style:solid;border-top-width:1px;background-color:#fff;line-height:40px;text-align:right;color:#666}.popup-x-footer uni-text[data-v-24cc61b4]:hover{color:#007aff;cursor:pointer;opacity:.8}.popup-x-footer .confirm[data-v-24cc61b4]{margin-left:20px;color:#007aff}.uni-date-changed[data-v-24cc61b4]{background-color:#fff;text-align:center;color:#333;border-bottom-color:#f1f1f1;border-bottom-style:solid;border-bottom-width:1px
/* padding: 0 50px; */}.uni-date-changed--time uni-text[data-v-24cc61b4]{
/* padding: 0 20px; */height:50px;line-height:50px}.uni-date-changed .uni-date-changed--time[data-v-24cc61b4]{
/* display: flex; */flex:1}.uni-date-changed--time-date[data-v-24cc61b4]{color:#333;opacity:.6}.mr-50[data-v-24cc61b4]{margin-right:50px}.uni-date_calendar-pc[data-v-24cc61b4]{padding:0 6px}</style><style type="text/css">.fy[data-v-13827240]{display:flex;justify-content:center;margin:auto;width:1024px;text-align:center}.fy uni-view[data-v-13827240]{display:flex;align-items:center;justify-content:center;width:37px;height:37px;font-size:12px;margin-left:5px}.btn-view[data-v-13827240]{margin-top:20px}</style><style type="text/css">@charset "UTF-8";




    .profit-container[data-v-99afa0f8]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);background-size:100%}.profit-container .main-container[data-v-99afa0f8]{background-color:#f0f3f7;border-radius:20px}.profit-container .time-picker uni-image[data-v-99afa0f8]{flex-shrink:0;width:21px;height:21px;margin-left:20px}.profit-container .card[data-v-99afa0f8]{height:86px}.profit-container .card .card-body[data-v-99afa0f8]{border-radius:15px;background-color:#fff}.profit-container .card .title[data-v-99afa0f8]{color:#6c757d;font-size:80%}.profit-container .card .num[data-v-99afa0f8]{font-size:15px;font-weight:700;color:#20c2ce}.profit-container .card-table[data-v-99afa0f8]{border-radius:15px;background-color:#fff}.profit-container .card-table .title[data-v-99afa0f8]{height:36px;border-bottom:1px solid #dee2e6}.profit-container .card-table .table-header[data-v-99afa0f8]{height:45px;border-bottom:1px solid #dee2e6}.profit-container .card-table .table-body[data-v-99afa0f8]{height:45px}</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
        }</style></head>


<body class="uni-body pages-mine-profit"><noscript><strong>Please enable JavaScript to continue.</strong></noscript><uni-app class="uni-app--maxwidth"><uni-page data-page="pages/mine/profit"><uni-page-head uni-page-head-type="default"><div class="uni-page-head" style="background-color: rgb(248, 248, 248); color: rgb(0, 0, 0);"><div class="uni-page-head-hd"><div class="uni-page-head-btn"><i onclick="history.back()" class="uni-btn-icon" style="color: rgb(0, 0, 0); font-size: 27px;"></i></div><div class="uni-page-head-ft"></div></div><div class="uni-page-head-bd"><div class="uni-page-head__title" style="font-size: 16px; opacity: 1;"><!----> Profit list </div></div><!---->
<div class="uni-page-head-ft"></div></div><div class="uni-placeholder"></div></uni-page-head>





<uni-page-wrapper><uni-page-body><uni-view data-v-99afa0f8="" class="profit-container"><uni-view data-v-99afa0f8="" class="main-container pd30">
  
  
  
  
  
   <form method="post">
  <uni-view data-v-99afa0f8="" class="flex-between alcenter time-picker mb30">
  
   <uni-view style="background:white; border:1px solid silver; border-radius:5px;"> 
   
  <img src="static/images/date.png" style="width:1rem;padding-top:0.3rem;padding-left:0.3rem;"> <input name="dateinpt1" type="date"  style="width:5.5rem;padding:0.4rem; background:none;font-size:0.7rem;outline:none; border:none;" placeholder="Date" id="dateidjs1" required="">
   </uni-view> ~
   
   <uni-view style="background:white; border:1px solid silver; border-radius:5px;"> 
  <img src="static/images/date.png" style="width:1rem;padding-top:0.3rem;padding-left:0.3rem;"> <input name="dateinpt2" type="date" style="width:5.5rem;padding:0.4rem; background:none;font-size:0.7rem;outline:none; border:none;" placeholder="Date" id="dateidjs2" required="">
   </uni-view>

            
<button type="submit" name="searchdatebtn" style="background:none;border:none;outline:none;"> <uni-image type="submit" data-v-99afa0f8=""><div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAE1klEQVR4Xt2bjW0VMQyA3QmACYAJaCcAJgAmgE4ATABMAEwAnQCYADoBdAJgAsoEoE86oyjKxT+XPPpepKo/L5fYXxzbca5HMrbdEpG7IsL3eyJyXUSOqym+iciliPCdr3MR+TFWDP9oR/6uqz1R9oGIPGko6x0eAB9F5O2uYWwBwAo/FZGHXi2d/b6IyCsR4fv0lgHAir9bTHymgAB4vmyTafNEAbwQkZfTpGkPzHxYxJTmBYAz+7CDVV9TEmd5f3GeQ0F4AODFPy8efejkwcGIHEAAxrBmAbgqyqvCwyH0AGSV/72ENJwY4U1jPkoQOWg4UqIHv18LLudQCGsA2PPfg2b/SUTeL8pHdALEsyWB8j4HhJMROcMaAPa8rpYl1MWiwNa4zXx4fDJJT8MXAGFTawFACMKdpxGn33g6BvpgDa+d/ckc6Z9uNQD2JqZvNfY5E2PyrYb/YCU1S+T3G9agxec8x9ge/4AVpCNDDcBj+iiPubYm5e9kiYCsmxVx6v5AY1tZEOhDeEy1UiiEB4DVThsr70mUogCQA0sgAbMaAFI+qBTKs/qkpHUq7A2XGQAo7vEJaStQoTx7/2fDtHvKExY54uq531rF3ucoaEWHlC9QAHhyjra9VpvZWq5AgYNVSzumhhCe7ZmKCAoAz99yXCoLStV5QWtVWltky8qXz2JNFF7WGlnn7ehkAMCMvxoPPqoyvNaKzFTe6xABECqvAYBSFqGr12oHVq8++310ZaglDylwLyy2IpSpmLX/a+VaDjNMPmqqS3+So8edZ8N+gJW1PGyd7tZhaVer79kGLV9lWoDlAGvvXwMLm11y9XnMigbhAxIW8CcY/moAqfibhOBx2KGEywOAQwzORxte9mbxe2jCpOLlY9aCheTxAAgNOEBBa4idA0gfNCxNEp9bW4CTKhmqu7G6OI47nSeuEgDLCaaigBUGd+nlrZWzjscpAFYJ7GzJFi3hdvG5lQiF03FPKkwEiJSzZoL4Zezx+sxiygIAnAYD91p4YHPmeAdr/zNiOCfREGcdNdMVl7ieq09QGusduFoFG3N6BeA5Ef7PaOBZ/VSJPlISC+fZJn5/B0+9MnUiLbM8y8MibtjL+nVc7ekpiobDn85WAvAURnlulw7RY/rIlN6edZ7vsYKht7MdC/GW29Orz9zZqzEgkCESPWY0vD1lOk9ev8kiWyc9z55TpWe8v0N5PnLhuun1mbWjrpUXlKs+6rU29ju30t5r+VKGNIQ1AJgeg5aFD8vUAcHKUSOMNGr9WF1G8c0QesUO7+1srSz+AQvii585o+stkV5vla/IePa5F2jYEqxqTxaCV+AZ/UIQLAAIeNAQPACAgJli0tYN7YwVzY7psgQvABUCZ0Xos97ayAo9+jkTQhQAAuLAyBhnWwMZHlbHSbVXs7SgdSFkAOiEhC2E693VWcK1PqcEB2B95YXtx89TIGwBoMJjERrHs0LyrqG+ZNm63p4GYQSAchURFMvgS/9Vhr8pGKo25euz+vqM505/CoTRADImH3lmOIR9A6AheZhP2EcAIyGc7CuAURBO9xnACAjn+w5gM4RDALAJwqEAyEK4OCQAGQh77wRbSZQ3WSL9Pj40C1AgVv0C5UnXLw8VgILgtModg75kjeIUbv/9q89fVV8WnututNIAAAAASUVORK5CYII=&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div></uni-image>
</button>
</uni-view>
</form>

<uni-view data-v-99afa0f8="" class="flex">

<uni-view data-v-99afa0f8="" class="card plr30 flex-one">
<uni-view data-v-99afa0f8="" class="card-body flex-column flex-center pd30"><uni-view data-v-99afa0f8="" class="title">Basic income</uni-view><uni-view data-v-99afa0f8="" class="num mt20"><? echo $vusrdataf['sumout']; ?> TRX</uni-view></uni-view></uni-view>

<uni-view data-v-99afa0f8="" class="card plr30 flex-one">
<uni-view data-v-99afa0f8="" class="card-body flex-column flex-center pd30"><uni-view data-v-99afa0f8="" class="title">Promotion income</uni-view><uni-view data-v-99afa0f8="" class="num mt20"><? echo $vusrdataf['refbonus']; ?>  TRX</uni-view></uni-view>

</uni-view></uni-view><uni-view data-v-99afa0f8="" class="card-table mt40"><uni-view data-v-99afa0f8="" class="title flex alcenter plr30">Profit list</uni-view><uni-view data-v-99afa0f8="" class="flex-between alcenter table-header plr30"><uni-view data-v-99afa0f8="">Date</uni-view><uni-view data-v-99afa0f8="">Amount</uni-view></uni-view>



















<?

$vproflistp = "SELECT * FROM `trading` WHERE byusr='$vusrlog' AND status=1 ORDER BY id DESC LIMIT 28";
  $vproflistpq = mysqli_query($db,$vproflistp);



if(isset($_POST['searchdatebtn']))
{
$dateinpt1 = strtotime($_POST['dateinpt1']);
$dateinpt2 = strtotime($_POST['dateinpt2']);
  
 while($vproflistf = mysqli_fetch_assoc($vproflistpq)){
$tosec = substr($vproflistf['time'],0,10);
$tofsec = strtotime($tosec);

  if($dateinpt1 <= $tofsec && $dateinpt2 >= $tofsec){
    ?>
<uni-view data-v-99afa0f8="" class="table-body pt20 plr30">
<uni-view data-v-99afa0f8="" class="flex-between alcenter"><uni-view data-v-99afa0f8=""><? echo $vproflistf['time']; ?> </uni-view><uni-view data-v-99afa0f8="" style="color: rgb(32, 194, 206);">+<? echo $vproflistf['bns']; ?>TRX</uni-view></uni-view><uni-view data-v-99afa0f8="" class="c_999">Interest Reward</uni-view>
</uni-view>

<?  }
 }
  
 
}else{
  
 while($vproflistf = mysqli_fetch_assoc($vproflistpq)){
  $vtblsprow.='
<uni-view data-v-99afa0f8="" class="table-body pt20 plr30">
<uni-view data-v-99afa0f8="" class="flex-between alcenter"><uni-view data-v-99afa0f8="">'.$vproflistf['time'].'</uni-view><uni-view data-v-99afa0f8="" style="color: rgb(32, 194, 206);">+'.$vproflistf['bns'].'TRX</uni-view></uni-view><uni-view data-v-99afa0f8="" class="c_999">Interest Reward</uni-view>
</uni-view>';
 } ///// end while loop 
 echo $vtblsprow;
   
  
}







?>














<div class="vprofitablesdiv">

</div>
























<uni-view data-v-13827240="" data-v-99afa0f8=""><uni-view data-v-13827240="" style="width: 100%;"><uni-view data-v-13827240="" class="fy"><!---->
            
            
            <!----></uni-view><!----></uni-view></uni-view></uni-view></uni-view></uni-view></uni-page-body></uni-page-wrapper></uni-page><uni-tabbar class="uni-tabbar-bottom" style="display: none;"><div class="uni-tabbar" style="background-color: rgb(255, 255, 255); backdrop-filter: none;"><div class="uni-tabbar-border" style="background-color: rgba(0, 0, 0, 0.33);"></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/home-selected.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> home <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/tradin.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> tradin <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/tradin.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> investlist <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/share.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(198, 204, 211); font-size: 10px; line-height: normal; margin-top: 3px;"> share <!----></div></div></div><div class="uni-tabbar__item"><!----><div class="uni-tabbar__bd" style="height: 50px;"><div class="uni-tabbar__icon" style="width: 24px; height: 24px;"><img src="static/images/tabbar/mine.jpg"><!----></div><div class="uni-tabbar__label" style="color: rgb(255, 39, 104); font-size: 10px; line-height: normal; margin-top: 3px;"> mine <!----></div></div></div></div><div class="uni-placeholder" style="height: 50px;"></div></uni-tabbar><!----><uni-actionsheet><div class="uni-mask uni-actionsheet__mask" style="display: none;"></div><div class="uni-actionsheet"><div class="uni-actionsheet__menu"><!----><!----><div style="max-height: 260px; overflow: hidden;"><div style="transform: translateY(0px) translateZ(0px);"></div></div></div><div class="uni-actionsheet__action"><div class="uni-actionsheet__cell" style="color: rgb(0, 0, 0);"> Cancel </div></div><div></div></div><!----></uni-actionsheet><uni-modal style="display: none;"><div class="uni-mask"></div><div class="uni-modal"><!----><div class="uni-modal__bd"></div><div class="uni-modal__ft"><div class="uni-modal__btn uni-modal__btn_default" style="color: rgb(0, 0, 0);"> Cancel </div><div class="uni-modal__btn uni-modal__btn_primary" style="color: rgb(0, 122, 255);"> OK </div></div></div><!----></uni-modal><!----></uni-app><script src="static/js/chunk-vendors.2820b272.js"></script><script src="static/js/index.8124fd70.js"></script><div style="position: absolute; left: 0px; top: 0px; width: 0px; height: 0px; z-index: -1; overflow: hidden; visibility: hidden;"><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-top);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-left);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-right);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 400px; height: 400px;"></div></div><div style="position: absolute; width: 100px; height: 200px; box-sizing: border-box; overflow: hidden; padding-bottom: env(safe-area-inset-bottom);"><div style="transition: all 0s ease 0s; animation: 0s ease 0s 1 normal none running none; width: 250%; height: 250%;"></div></div></div>
          
          
   

          
          
          
          
          
          
          
          
          
          </body>
        </html>