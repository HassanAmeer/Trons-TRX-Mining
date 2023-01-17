<?
include 'config.php';
// error_reporting(0);
if(!isset($_COOKIE['coklog']))
{ header('location:index.php'); }

 $setuidcok = uniqid();
setcookie('vusrifpk',$setuidcok,time() + 7200,'/');


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

<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Recharge</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
    document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')</script><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><link rel="stylesheet" href="static/index.a5c69d49.css"><style type="text/css">





.col-3{width:93px}.flex{display:flex}.flex-one{flex:1}.flex-wrap{flex-wrap:wrap}.flex-center{display:flex;justify-content:center;align-items:center}.flex-around{display:flex;justify-content:space-around}.flex-end{display:flex;justify-content:flex-end}.flex-between{display:flex;justify-content:space-between!important}.justify-center{justify-content:center}.alcenter{align-items:center}.flex-column{display:flex;flex-direction:column}.rounded{border-radius:4px}.bg-white{background-color:#fff}.bg-EE9D18{background-color:#ee9d18}.bg-e5e5e5{background-color:#e5e5e5}.bg_FFA1AF{background-color:#ffa1af}.bg_f0f2f5{background-color:#f0f2f5}.bg_54BCB7{background-color:#54bcb7}.bg_C5CFD5{background-color:#c5cfd5}.c_172045{color:#172045}.c_FF5C5C{color:#ff5c5c}.c_099AFF{color:#099aff}.c_AAAAAA{color:#aaa}.c_F71D1D{color:#f71d1d}.c_313233{color:#313233}.c_4945FF{color:#4945ff}.c_10AA06{color:#10aa06}.c_FF9900{color:#f90}.c_B4B5B6{color:#b4b5b6}.c_C7D0D6{color:#c7d0d6}.c_6c757d{color:#6c757d}.c_8C9FAD{color:#8c9fad}.c_989AAA{color:#989aaa}.c_9B9898{color:#9b9898}.c_a9acb2{color:#a9acb2}.c_171717{color:#171717}.c_191919{color:#191919}.c_f07a9a{color:#f07a9a}.c_ef5079{color:#ef5079}.c_54BCB7{color:#54bcb7}.c_C5CFD5{color:#c5cfd5}.c_FFA1AF{color:#ffa1af}.c-EE9D18{color:#ee9d18}.c_FF5900{color:#ff5900}.c-00A212{color:#00a212}.c_2a2a2a{color:#2a2a2a}.c_FA9A43{color:#fa9a43}.c-white{color:#fff}.c_666{color:#666}.c_999{color:#999}.c_gray{color:#ccc}.c_969797{color:#969797}.c_8E8E93{color:#8e8e93}.c_abacb9{color:#abacb9}.c_848484{color:#848484}.c_F7B500{color:#f7b500}.c_8A6756{color:#8a6756}.c_F43F36{color:#f43f36}.c_FA6400{color:#fa6400}.c_red{color:red}.color-red{color:#ff5340}.c_black{color:#000}.c_333{color:c_333}.line:after{content:"";position:absolute;left:0;bottom:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_top:after{content:"";position:absolute;left:0;top:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom:after{content:"";position:absolute;left:0;bottom:0;background:#e6e6e6;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom_one:after{content:"";position:absolute;left:0;bottom:1px;background:#d5d5d8;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_right:after{content:"";position:absolute;top:0;right:0;background:#d5d5d8;width:1px;height:100%;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.w_650{width:325px}.h_100{height:100%}.h40{height:20px}.h120{height:60px}.h100{height:50px}.h110{height:55px}.h60{height:30px}.h80{height:40px}.h88{height:44px}.h90{height:45px}.mt32-mb48{margin-top:16px;margin-bottom:24px}.mt10{margin-top:5px}.mt48{margin-top:24px}.mb10{margin-bottom:5px}.mb16{margin-bottom:8px}.mb20{margin-bottom:10px}.mb30{margin-bottom:15px}.mb40{margin-bottom:20px!important}.mb45{margin-bottom:22px!important}.ml4{margin-left:2px}.ml10{margin-left:5px}.ml60{margin-left:30px}.ml70{margin-left:35px}.ml100{margin-left:50px}.ml110{margin-left:55px}.ml20{margin-left:10px}.ml30{margin-left:15px}.ml40{margin-left:20px}.mr10{margin-right:5px}.mr20{margin-right:10px}.mr30{margin-right:15px}.mr40{margin-right:20px}.mr70{margin-right:35px}.mr100{margin-right:50px}.mt20{margin-top:10px!important}.mt13{margin-top:6px}.mt30{margin-top:15px}.mt40{margin-top:20px}.mt50{margin-top:25px}.mt60{margin-top:30px}.mt80{margin-top:40px}.mt120{margin-top:60px}.mt160{margin-top:80px}.mlr10{margin-left:5px;margin-right:5px}.mlr30{margin-left:15px;margin-right:15px}.mlr40{margin-left:20px;margin-right:20px}.pl10{padding-left:5px}.pl30{padding-left:15px}.pl60{padding-left:30px}.pl130{padding-left:65px}.pl20{padding-left:10px}.pr10{padding-right:5px}.pr20{padding-right:10px}.pd10{padding:5px}.pd20{padding:10px!important}.pd30{padding:15px}.pd40{padding:20px}.plr10{padding-left:5px;padding-right:5px}.plr20{padding-left:10px;padding-right:10px}.plr30{padding-left:15px;padding-right:15px}.plr40{padding-left:20px!important;padding-right:20px!important}.plr56{padding-left:28px!important;padding-right:28px!important}.pt20{padding-top:10px}.pt30{padding-top:15px}.pt40{padding-top:20px}.pb20{padding-bottom:10px}.pb30{padding-bottom:15px}.pb40{padding-bottom:20px}.pb100{padding-bottom:50px}.mb20{margin-bottom:10px!important}.mb40{margin-bottom:20px!important}.mb60{margin-bottom:30px!important}.mb80{margin-bottom:40px!important}.text-center{text-align:center}.line-one{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.line-two{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden;text-overflow:ellipsis}.ft16{font-size:8px}.ft20{font-size:10px!important}.ft24{font-size:12px}.ft26{font-size:13px}.ft28{font-size:14px}.ft30{font-size:15px}.ft32{font-size:16px}.ft36{font-size:18px}.ft40{font-size:20px}.ft48{font-size:24px}.ft50{font-size:25px}.ft60{font-size:30px}.ft73{font-size:36px}.ft80{font-size:40px}.lh36{line-height:18px}.lh40{line-height:20px}.lh56{line-height:28px}.font-bold{font-weight:700}.relative{position:relative}.pf{font-family:PingFangSC-Semibold,PingFang SC}uni-page-body{font-size:14px;color:#212529;font-family:PingFangSC-Semibold,PingFang SC;background-color:#f5f8fa}body{background-color:#f5f8fa}</style><script charset="utf-8" src="static/js/pages-investlist-investlist.89156bef.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
        }</style><style type="text/css">.fy[data-v-13827240]{display:flex;justify-content:center;margin:auto;width:1024px;text-align:center}.fy uni-view[data-v-13827240]{display:flex;align-items:center;justify-content:center;width:37px;height:37px;font-size:12px;margin-left:5px}.btn-view[data-v-13827240]{margin-top:20px}</style><style type="text/css">@charset "UTF-8";



          .invest-list-container[data-v-ad3ef5ac]{min-height:100vh;background-image:url(static/images/commonbg.36a8d8d.jpg);padding-bottom:120px;background-size:100%}.invest-list-container .header-icon[data-v-ad3ef5ac]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.invest-list-container .header-icon uni-image[data-v-ad3ef5ac]{width:21px;height:21px}.invest-list-container .header-icon .counter[data-v-ad3ef5ac]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.invest-list-container .head-dropdown[data-v-ad3ef5ac]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.invest-list-container .tabs[data-v-ad3ef5ac]{border-bottom:2px solid #abdbc2}.invest-list-container .tabs .tab-item[data-v-ad3ef5ac]{height:40px;color:#646566;border-right:1px solid #ddd}.invest-list-container .tabs .tab-item.active[data-v-ad3ef5ac]{color:#fff;background-color:#eb74a8}.invest-list-container .product-list-box[data-v-ad3ef5ac]{flex-wrap:wrap}.invest-list-container .product-list-box .col[data-v-ad3ef5ac]{width:50%;box-sizing:border-box;padding-right:5px}.invest-list-container .product-list-box .col[data-v-ad3ef5ac]:nth-child(2n){padding-left:5px;padding-right:0}.invest-list-container .product-list-box .product-item[data-v-ad3ef5ac]{background:linear-gradient(#e9b5cc,#eb74a8);margin-bottom:12px;padding:10px;border-radius:5px}.invest-list-container .product-list-box .product-item uni-image[data-v-ad3ef5ac]{width:100%;border-radius:5px}.invest-list-container .product-list-box .product-item .word[data-v-ad3ef5ac]{line-height:24px}.invest-list-container .product-list-box .product-item .red-btn[data-v-ad3ef5ac]{height:30px;color:#fff;background-color:#ff2768;border-radius:15px}.invest-list-container .empty-container[data-v-ad3ef5ac]{width:100%;text-align:center;color:#6f80b3}.invest-list-container .empty-container uni-image[data-v-ad3ef5ac]{width:65px;height:65px;margin:50px 0 13px}.invest-list-container .footer[data-v-ad3ef5ac]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.invest-list-container .footer .item[data-v-ad3ef5ac]{padding-top:39px}.invest-list-container .footer .mid[data-v-ad3ef5ac]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.invest-list-container .footer .tabbar[data-v-ad3ef5ac]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.invest-list-container .footer .tabbar uni-view[data-v-ad3ef5ac]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.invest-list-container .footer .tabbar uni-view.active[data-v-ad3ef5ac]{color:#ff2768}</style><script charset="utf-8" src="static/js/pages-home-recharge~pages-investlist-recharge~pages-share-share.023c252f.js"></script><script charset="utf-8" src="static/js/pages-investlist-recharge.f5f360d1.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
/**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
/**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
/* 颜色变量 */
/* 行为相关颜色 */
/* 文字基本颜色 */
/* 背景颜色 */
/* 边框颜色 */
/* 尺寸变量 */
/* 文字尺寸 */
/* 图片尺寸 */
/* Border Radius */
/* 水平间距 */
/* 垂直间距 */
/* 透明度 */
/* 文章场景相关 */.invest-list-container[data-v-1409a1ee]{min-height:100vh;background-image:url(static/images/commonbg.36a8d8d.jpg);padding-bottom:85px;background-size:100%}.invest-list-container .arrow[data-v-1409a1ee]{color:#2a2a2a}.invest-list-container .arrow uni-image[data-v-1409a1ee]{width:21px;height:21px}.invest-list-container .header-icon[data-v-1409a1ee]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.invest-list-container .header-icon uni-image[data-v-1409a1ee]{width:21px;height:21px}.invest-list-container .header-icon .counter[data-v-1409a1ee]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.invest-list-container .head-dropdown[data-v-1409a1ee]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.invest-list-container .menus .menu-item[data-v-1409a1ee]{height:175px;margin:10px;border-radius:15px;padding:30px 16px 0;line-height:24px;background:linear-gradient(45deg,#a399fa,#6c60dc)}.invest-list-container .menus .menu-item[data-v-1409a1ee]:nth-child(2){background:linear-gradient(45deg,#fe935f,#fa4847)}.invest-list-container .menus .menu-item uni-image[data-v-1409a1ee]{width:40px;height:40px;margin-bottom:20px}.invest-list-container .container[data-v-1409a1ee]{margin:0 15px;padding:25px 0;color:green}.invest-list-container .container uni-image[data-v-1409a1ee]{width:140px;height:145px;border-radius:10px}.invest-list-container .main-container[data-v-1409a1ee]{background-color:#f0f3f7;border-radius:20px}.invest-list-container .main-container .input-group[data-v-1409a1ee]{height:33px}.invest-list-container .main-container .input-group uni-input[data-v-1409a1ee]{height:100%;padding:0 10px;background-color:#fff;border-radius:24px 0 0 24px;box-sizing:border-box}.invest-list-container .main-container .input-group .cop-btn[data-v-1409a1ee]{width:126px;height:100%;color:#fff;background-color:#ff2768;border-radius:0 24px 24px 0}.invest-list-container .main-container .card[data-v-1409a1ee]{border-radius:15px}.invest-list-container .main-container .card .card-tip1[data-v-1409a1ee]{color:#6c757d;font-size:80%}.invest-list-container .main-container .card .card-tip2[data-v-1409a1ee]{color:red;font-size:80%}.invest-list-container .main-container .complete-btn[data-v-1409a1ee]{height:33px;background-color:#ff2768;color:#fff;border-radius:24px}.invest-list-container .footer[data-v-1409a1ee]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.invest-list-container .footer .item[data-v-1409a1ee]{padding-top:39px}.invest-list-container .footer .mid[data-v-1409a1ee]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.invest-list-container .footer .tabbar[data-v-1409a1ee]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.invest-list-container .footer .tabbar uni-view[data-v-1409a1ee]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.invest-list-container .footer .tabbar uni-view.active[data-v-1409a1ee]{color:#ff2768}</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
        }</style><script charset="utf-8" src="static/js/pages-investlist-investpro.0f696ea4.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
/**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
/**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
/* 颜色变量 */
/* 行为相关颜色 */
/* 文字基本颜色 */
/* 背景颜色 */
/* 边框颜色 */
/* 尺寸变量 */
/* 文字尺寸 */
/* 图片尺寸 */
/* Border Radius */
/* 水平间距 */
/* 垂直间距 */
/* 透明度 */
/* 文章场景相关 */.invest-list-container[data-v-72049ba9]{min-height:100vh;background-image:url(static/images/commonbg.36a8d8d.jpg);padding-bottom:85px;background-size:100%}.invest-list-container .arrow[data-v-72049ba9]{color:#2a2a2a}.invest-list-container .arrow uni-image[data-v-72049ba9]{width:21px;height:21px}.invest-list-container .header-icon[data-v-72049ba9]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.invest-list-container .header-icon uni-image[data-v-72049ba9]{width:21px;height:21px}.invest-list-container .header-icon .counter[data-v-72049ba9]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.invest-list-container .head-dropdown[data-v-72049ba9]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.invest-list-container .usertop[data-v-72049ba9]{background-color:#40afff;background-image:linear-gradient(45deg,#40afff,#3574fa);oclor:#fff;border-radius:5px;padding:15px;margin-bottom:15px;color:#fff}.invest-list-container .usertop .userdiv[data-v-72049ba9]{width:100%;background:url(static/images/invest_user.png) no-repeat 100% 100%;background-size:30%}.invest-list-container .form-box[data-v-72049ba9]{border-radius:5px}.invest-list-container .form-box .form-item[data-v-72049ba9]{color:#323233;line-height:24px;box-sizing:border-box;border-bottom:1px solid #ebedf0}.invest-list-container .form-box .btn[data-v-72049ba9]{height:44px;background-color:#eb74a8!important;border-radius:15px}.invest-list-container .footer[data-v-72049ba9]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.invest-list-container .footer .item[data-v-72049ba9]{padding-top:39px}.invest-list-container .footer .mid[data-v-72049ba9]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.invest-list-container .footer .tabbar[data-v-72049ba9]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.invest-list-container .footer .tabbar uni-view[data-v-72049ba9]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.invest-list-container .footer .tabbar uni-view.active[data-v-72049ba9]{color:#ff2768}</style><script charset="utf-8" src="static/js/pages-tradin-tradin.d39e80c2.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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




          .trade-container[data-v-65724246]{min-height:100vh;background-image:url(static/img/tradebg.c231143.c2311433.jpg);background-size:100%;background-color:#f6f7fa;background-repeat:no-repeat;padding-bottom:85px}.trade-container .header-icon[data-v-65724246]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.trade-container .header-icon uni-image[data-v-65724246]{width:21px;height:21px}.trade-container .header-icon .counter[data-v-65724246]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.trade-container .head-dropdown[data-v-65724246]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.trade-container .work_content[data-v-65724246]{padding-bottom:25px;overflow:hidden}.trade-container .work_content .main_work_title[data-v-65724246]{margin-top:25px;text-align:center}.trade-container .work_content .main_work_title .h2[data-v-65724246]{font-size:30px;font-weight:700;margin-bottom:20px}.trade-container .work_content .main_work_title .title[data-v-65724246]{text-align:center;font-size:16px;color:#191919;font-size:700}.trade-container .work_content .main_work[data-v-65724246]{margin-top:196px;padding:0 31px 0 29px;box-sizing:border-box}.trade-container .work_content .main_work .view-all[data-v-65724246]{width:61px;height:61px;background-image:url(data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAHoAAAB6CAYAAABwWUfkAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3VpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTMyIDc5LjE1OTI4NCwgMjAxNi8wNC8xOS0xMzoxMzo0MCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo2ZTNkMmUyNC04Mzc5LTQwYWMtYWZiMS1lNGFlZjI0N2M1MDciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0YzMDU1NzYyMTU3MTFFQ0JCQkM4RjRBRkU0MTJBODIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0YzMDU1NzUyMTU3MTFFQ0JCQkM4RjRBRkU0MTJBODIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjAgKE1hY2ludG9zaCkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoyNjBhYTMyYi04M2Q5LTQzY2YtODYzOC02N2E4M2JhMDI3OTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NmUzZDJlMjQtODM3OS00MGFjLWFmYjEtZTRhZWYyNDdjNTA3Ii8+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);background-size:100% 100%;color:#ff3c78}.trade-container .work_content .main_work .list[data-v-65724246]{margin-top:10px}.trade-container .work_content .main_work .list .lidiv[data-v-65724246]{border-bottom:1px solid #f2e5ea;padding:22px 0;box-sizing:border-box}.trade-container .work_content .main_work .list .lidiv .icon uni-image[data-v-65724246]{width:46px;height:46px}.trade-container .work_content .main_work .list .lidiv .icon .grow[data-v-65724246]{margin-left:15px}.trade-container .work_content .main_work .list .lidiv .icon .grow .price[data-v-65724246]{font-size:18px;color:#ff3c78;font-weight:700;display:flex;align-items:flex-end}.trade-container .work_content .main_work .list .lidiv .icon .grow .price uni-text[data-v-65724246]{font-size:11px;color:#2a2a2a;marign-left:5px;margin-bottom:2px}.trade-container .work_content .main_work .list .lidiv .icon .grow .des[data-v-65724246]{font-size:9px;color:#8b8b8b;margin-top:11px}.trade-container .work_content .main_work .list .lidiv .btn[data-v-65724246]{width:60px;height:24px;border-radius:20px;background:linear-gradient(90deg,#fe8bb7,#eb4068);font-size:9px;color:#fff}.trade-container .work_content .main_work .list .lidiv .btn.disabled[data-v-65724246]{opacity:.65}.trade-container .footer[data-v-65724246]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.trade-container .footer .item[data-v-65724246]{padding-top:39px}.trade-container .footer .mid[data-v-65724246]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.trade-container .footer .tabbar[data-v-65724246]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.trade-container .footer .tabbar uni-view[data-v-65724246]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.trade-container .footer .tabbar uni-view.active[data-v-65724246]{color:#ff2768}</style><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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
        }</style></head>


<body class="uni-body pages-investlist-recharge"><noscript><strong>Please enable JavaScript to continue.</strong></noscript><uni-app class="uni-app--maxwidth"><uni-page data-page="pages/investlist/recharge"><!----><!----><uni-page-wrapper><uni-page-body>
  
  
  
  <uni-view data-v-1409a1ee="" class="invest-list-container"><uni-view data-v-1409a1ee="" class="flex-between alcenter h110 plr30"><uni-navigator data-v-1409a1ee="" class="flex alcenter arrow">
  
  <uni-image data-v-1409a1ee="" class="mr10" onclick="history.back()">
  <div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABzUlEQVR4Xu3b0VHCQBDG8d0BR32SEvJgHnySEuzAEoQS7EA7sITQgR2IHfDmzSTOXAlW4DpRGYEBnvZ2v/NCAcf9f7fJQyBMhX+48H4aAIYJKFxguARyGYCqqiZ0cnpHn/wR38NCa99ZTEBV11OS8QszTfpwEXmMXXjQQIAH2I3/BXiNXbj59wD74ouZgIPxJIvYhpnG6fdrQF4CVvGQAJbxcADW8VAAHvEwAF7xEACe8e4A3vGuAAjxbgAo8S4ASPHmAGjxpgCI8WYAqPEmAMjxyQHQ45MC5BCfDCCX+CQAOcWrAxx+hkf3sXt70nqMpbmO2iOxIyc/j21oNDetuZYewOXVMzPdbm5OSKDjVS+Baj9AE9sw1zwx7bX0JqCupyyjJTFf7EwBNIIaQB/d3wdyQ1AFyBFBHSA3hCQAOSEkA8gFISlADgjJAdARTACQEcwAUBFMARARzAHQEFwAkBDcAFAQXAEQENwBvBEgADwRYAC8EKAAPBDgAKwRIAEsEWAB1ghEo4aJr7cetBb1d/nvFyXOlpsIIlLG3+XXp/7ztsgfQlEvTGwhjM9nRLKKXVhq/UACfQ/Qijy2zgBgoYz8HcMEIJ+Oxd6Kn4AvZySdUIVGIMEAAAAASUVORK5CYII=&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
  

</uni-image><uni-view data-v-1409a1ee="" class="ft30 font-bold">Recharge</uni-view></uni-navigator><uni-view data-v-1409a1ee="" class="flex alcenter"><a href="notify.php" style="text-decoration: none;" data-v-1409a1ee="" class="header-icon flex-center"><uni-image data-v-1409a1ee=""><div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADHElEQVR4Xu2bgZENQRCG/4sAGRDBEQEiIANEgAgQARkgAkSACI4IyAARUF/ZVXNzs+9mpntmS73uqld39Wp2tvubnu5+O70nOnI5OXL7FQDCA/YjcFXSveX2HyT93EOVvbYAxn+UdHMx+ouku3tA2AvAE0kvsxV/JOnNbC/YC8BzSc8yY19I4vupEgCm4pauSzqVxBa4k937k6RXkr5K+j5LrxkeQMB7sBgNgBoBADDejg6MIwFg+OPFcP7vEVIjIIgPQ2QUANLb6yTNWZUnTZIl+OsqIwA8XIy/TNFfiUEAu3LZBQsE11TpDeCQ8RiM8gS79xvG3l+CI/NsAXGtFzwBbBmP4exjPrXlLjGDTJHXCis3NwheAHBhSts82GE86a537zIvHpN7AyApnXvn/eeAXgDOCgGPfI7xtau+FQKACgTqh1Qw/lZF3Dg4xANAyfVZeVbPq6ChfsDg3BPMW8EDwDf9rfBSwT1ZNU/Bm9hmqQD4huUmVgCl1ad64/sRQhahqkzF5AVWACWFWBEv188h4ml4XCom4FYAP7LI/7nwI8fbE4gFaUAkyF7rvYkFAEGO6J/K0yXf9+pTc13pYQrZoCslWgCUgtKI4JdDcb2vBUBpJUbu/xVEKQ50B0ILgNJjLct8Ne6/jvmdDe5+nGZROAAUfqxYgIYHNBCILRAx4DyBCIK9hyqWoBVZILLAxWd2Fo9qSAKKLBBZILLAOQKRBiMNdjZXWKJ21AFRB0QdcOHw0rKlohBqIBCVYFSCO1WCPJOn96e226vBq12GciTHI/Lqg9nWoFU6CXbR3HGSphPjVgB58HHU23WqaruqBy7qHT0AjsN6mh5LjdGlJa8dd8hd1ubKKpdq9YCqSQuDUCptbykdotIi9y65ljabHthNOs4CQF/g+nYICuYvSOQvUDCGt0iAMlRmASgdaeMVa8MkhuarPeOofepbY+Tm25XLOWX10WWWB3CvrX6/nIlXf2EV65kAVghkEj55z9/aUjv1tZnZANZVwRuIC+lbY2wRa1dp1aqng/YC0KzoqAsCwCiy/8u8R+8BfwDQSrpBniVOAgAAAABJRU5ErkJggg==&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADHElEQVR4Xu2bgZENQRCG/4sAGRDBEQEiIANEgAgQARkgAkSACI4IyAARUF/ZVXNzs+9mpntmS73uqld39Wp2tvubnu5+O70nOnI5OXL7FQDCA/YjcFXSveX2HyT93EOVvbYAxn+UdHMx+ouku3tA2AvAE0kvsxV/JOnNbC/YC8BzSc8yY19I4vupEgCm4pauSzqVxBa4k937k6RXkr5K+j5LrxkeQMB7sBgNgBoBADDejg6MIwFg+OPFcP7vEVIjIIgPQ2QUANLb6yTNWZUnTZIl+OsqIwA8XIy/TNFfiUEAu3LZBQsE11TpDeCQ8RiM8gS79xvG3l+CI/NsAXGtFzwBbBmP4exjPrXlLjGDTJHXCis3NwheAHBhSts82GE86a537zIvHpN7AyApnXvn/eeAXgDOCgGPfI7xtau+FQKACgTqh1Qw/lZF3Dg4xANAyfVZeVbPq6ChfsDg3BPMW8EDwDf9rfBSwT1ZNU/Bm9hmqQD4huUmVgCl1ad64/sRQhahqkzF5AVWACWFWBEv188h4ml4XCom4FYAP7LI/7nwI8fbE4gFaUAkyF7rvYkFAEGO6J/K0yXf9+pTc13pYQrZoCslWgCUgtKI4JdDcb2vBUBpJUbu/xVEKQ50B0ILgNJjLct8Ne6/jvmdDe5+nGZROAAUfqxYgIYHNBCILRAx4DyBCIK9hyqWoBVZILLAxWd2Fo9qSAKKLBBZILLAOQKRBiMNdjZXWKJ21AFRB0QdcOHw0rKlohBqIBCVYFSCO1WCPJOn96e226vBq12GciTHI/Lqg9nWoFU6CXbR3HGSphPjVgB58HHU23WqaruqBy7qHT0AjsN6mh5LjdGlJa8dd8hd1ubKKpdq9YCqSQuDUCptbykdotIi9y65ljabHthNOs4CQF/g+nYICuYvSOQvUDCGt0iAMlRmASgdaeMVa8MkhuarPeOofepbY+Tm25XLOWX10WWWB3CvrX6/nIlXf2EV65kAVghkEj55z9/aUjv1tZnZANZVwRuIC+lbY2wRa1dp1aqng/YC0KzoqAsCwCiy/8u8R+8BfwDQSrpBniVOAgAAAABJRU5ErkJggg==" draggable="true"><!----></uni-image><uni-view data-v-1409a1ee="" class="counter"></uni-view></a>

<a href="<? echo $chkq['tglink']; ?>" style="text-decoration: none;" data-v-1409a1ee="" class="header-icon flex-center"><uni-image data-v-1409a1ee=""><div style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABACAYAAACunKHjAAAFlUlEQVR4Xu2ci3HUMBCGNxUAFQAVABUAFQAVQCoAKgAqACqAVACpAFIBUAFJBUAFMN+NN7PZk7yyLMtm5jTjyc3Z1uPff5/S5Uj6tbsicl9EbokIn/nLZdu5iOj1XUTORIS/i7ejhUd4JCKPh+t65Vi/ReTzcJ1W9hG+tgQQLPi5iLwQkdrF5yYOKO9E5L2I8LlZaw3EqwIALgb6Q3m/GIBTtbk5skoF5E0rJFoB8UBEPiR0Xud5IiJfhwsbUNKwH/TL9TTzAn0dD/2W9Jl9pgUQsOB1YgQkz/fo91wawxRsDf2lmML3s9gxBwgm92mQmMXhz6AeH2eJKP/yswwgqNrDWtBrgQCEL4M+2yljxJDOXAZEGDI+42CUbasGowaIFAiwAEmhBj0b9oMxr5lBq8CYCkQKBGwB+tsl8EmgjJdBDe/MAWMqEHgGJK/tx2AjllaFiGUICK9kwYApT6IX9f4UIAiQ3pqOUQdc3Nog6JQAA1Zar/JyCMBCPEqBYMHfTKQICOjnWuqQWxhqAjOszbg9BHCjYJQCgYdg4dqKkQ5F0f4BVBcV1gYwuNXZQAAAQGgjI7SgRGOscR/7QMKnjehzNK4pYQQqAeW0FVFtjdWbMVFl1FZVhFCceWdbBARukehRG2FsKpxeed3J4Zkn4X8RKyIgPMVubMhLRODjRWCCsoJaBoJNtjEgoNdP8xYZpI0hools4T52wWauWbUeA8Jb33sbdJcR2Ng2bJy2rLcbA8KqBWG0ry9Gk9jKfdRDg6yseowB8fc/VwudPqU9m6Um15wDwtuH0A9vRfyJeRSpeA4I7zb/R/ugmBQJNQeE98GRm90wIXZTs2qejIVKgCDBal2W7w2cNZiTgCCatMEHqTYhKwkMlndrWacHFrdJrkFOxGcrSOaOql9pnhG8SM3B5hYp6c2uGi9IiVxV3Q65tw1ggfDWNZprVW0w6nTG/VxVfazLS2+oQHgvwcvYBoIq3ZCBLWzi2kbVmsrVFpqPF5gTJQPUmYb3YJ22aMP3OzAUCHIKGzliB2CIL8MBBvG7LYdRF+xdvfbA+5oJQmTRCoI+D2uYv61V7FJ0gPBsiAovPn4Pc/0OdPE1kyju2SvcAISnVEnhZWtxRhgnOGHAjF/muxOAgD6q+5TnI4/B+56K1AQ9DTsQYTdE7Vzsus88EFNqDlYKaxZz/TZDafHIasK5B2JKKW4qHZdiSK2aXnnvAMQgngMQByB21fjLKveBEQdGjDOi1n1O8TatvYd3n6VFJOs+L3jJhptReK2LqA1iWoPQNKDyfrgkIKkNYpYAgj6nxjQ+xD6FEV660UkTf1ZiC3se1Eb0tAwZM0nX2HlOX4E7Vn2ycTcIoz/ovU/DyUM4e2DzkS2k4T6DBhjqDKmSoq9g7WqyCoTfRgcMECV3pzM9Ue/3Pkc3VpfSg0y/fp+Tx3T+rAXhMX+/Y7dLGOeU6lAJOt/yGapIFnulOn0hdVQv1Vmvg6XRQux9is6lZcO908E5n0uH6B3AaI2PWgUUw36sVXtIAZMr2hIK2PnzLixGXVjDFSaXBB/oVOmJ+ikSbPEsC8UDeL23e7X6S6FR4ZUA0WLCtg/cNbvT/M3toGGgufBcKSGM/TimasO6NxD+5G4JyHZhYwDkKtclY0hPIFL7DkWTHGICthByP4/CHmDTqj1YLyD81jwAkODlbE9qMykFWrPfhvQCwrOhJBr1OZAFAgDoc8/6l1LMP9cLiJotA59Mqftj8bjAajVIgbUGEKWpvgdi0X3WXkB41Yi25ADBp/qLbiL1AsKn+tAaeqc2j/UXfTbBW/zUTi8gkLDfeJ1i10qM65T+9p7tCQSSBgx/xiJawKK2QQfvCYSOCeXRf/v7Kw8GqkCIjQvtkuCtAYRdtD/oxT39twkRU5re/wfK82KZR+2RowAAAABJRU5ErkJggg==&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABACAYAAACunKHjAAAFlUlEQVR4Xu2ci3HUMBCGNxUAFQAVABUAFQAVQCoAKgAqACqAVACpAFIBUAFJBUAFMN+NN7PZk7yyLMtm5jTjyc3Z1uPff5/S5Uj6tbsicl9EbokIn/nLZdu5iOj1XUTORIS/i7ejhUd4JCKPh+t65Vi/ReTzcJ1W9hG+tgQQLPi5iLwQkdrF5yYOKO9E5L2I8LlZaw3EqwIALgb6Q3m/GIBTtbk5skoF5E0rJFoB8UBEPiR0Xud5IiJfhwsbUNKwH/TL9TTzAn0dD/2W9Jl9pgUQsOB1YgQkz/fo91wawxRsDf2lmML3s9gxBwgm92mQmMXhz6AeH2eJKP/yswwgqNrDWtBrgQCEL4M+2yljxJDOXAZEGDI+42CUbasGowaIFAiwAEmhBj0b9oMxr5lBq8CYCkQKBGwB+tsl8EmgjJdBDe/MAWMqEHgGJK/tx2AjllaFiGUICK9kwYApT6IX9f4UIAiQ3pqOUQdc3Nog6JQAA1Zar/JyCMBCPEqBYMHfTKQICOjnWuqQWxhqAjOszbg9BHCjYJQCgYdg4dqKkQ5F0f4BVBcV1gYwuNXZQAAAQGgjI7SgRGOscR/7QMKnjehzNK4pYQQqAeW0FVFtjdWbMVFl1FZVhFCceWdbBARukehRG2FsKpxeed3J4Zkn4X8RKyIgPMVubMhLRODjRWCCsoJaBoJNtjEgoNdP8xYZpI0hools4T52wWauWbUeA8Jb33sbdJcR2Ng2bJy2rLcbA8KqBWG0ry9Gk9jKfdRDg6yseowB8fc/VwudPqU9m6Um15wDwtuH0A9vRfyJeRSpeA4I7zb/R/ugmBQJNQeE98GRm90wIXZTs2qejIVKgCDBal2W7w2cNZiTgCCatMEHqTYhKwkMlndrWacHFrdJrkFOxGcrSOaOql9pnhG8SM3B5hYp6c2uGi9IiVxV3Q65tw1ggfDWNZprVW0w6nTG/VxVfazLS2+oQHgvwcvYBoIq3ZCBLWzi2kbVmsrVFpqPF5gTJQPUmYb3YJ22aMP3OzAUCHIKGzliB2CIL8MBBvG7LYdRF+xdvfbA+5oJQmTRCoI+D2uYv61V7FJ0gPBsiAovPn4Pc/0OdPE1kyju2SvcAISnVEnhZWtxRhgnOGHAjF/muxOAgD6q+5TnI4/B+56K1AQ9DTsQYTdE7Vzsus88EFNqDlYKaxZz/TZDafHIasK5B2JKKW4qHZdiSK2aXnnvAMQgngMQByB21fjLKveBEQdGjDOi1n1O8TatvYd3n6VFJOs+L3jJhptReK2LqA1iWoPQNKDyfrgkIKkNYpYAgj6nxjQ+xD6FEV660UkTf1ZiC3se1Eb0tAwZM0nX2HlOX4E7Vn2ycTcIoz/ovU/DyUM4e2DzkS2k4T6DBhjqDKmSoq9g7WqyCoTfRgcMECV3pzM9Ue/3Pkc3VpfSg0y/fp+Tx3T+rAXhMX+/Y7dLGOeU6lAJOt/yGapIFnulOn0hdVQv1Vmvg6XRQux9is6lZcO908E5n0uH6B3AaI2PWgUUw36sVXtIAZMr2hIK2PnzLixGXVjDFSaXBB/oVOmJ+ikSbPEsC8UDeL23e7X6S6FR4ZUA0WLCtg/cNbvT/M3toGGgufBcKSGM/TimasO6NxD+5G4JyHZhYwDkKtclY0hPIFL7DkWTHGICthByP4/CHmDTqj1YLyD81jwAkODlbE9qMykFWrPfhvQCwrOhJBr1OZAFAgDoc8/6l1LMP9cLiJotA59Mqftj8bjAajVIgbUGEKWpvgdi0X3WXkB41Yi25ADBp/qLbiL1AsKn+tAaeqc2j/UXfTbBW/zUTi8gkLDfeJ1i10qM65T+9p7tCQSSBgx/xiJawKK2QQfvCYSOCeXRf/v7Kw8GqkCIjQvtkuCtAYRdtD/oxT39twkRU5re/wfK82KZR+2RowAAAABJRU5ErkJggg==" draggable="true"><!----></uni-image></a>

</uni-view></uni-view>


<uni-view data-v-1409a1ee="" class="menus flex">
  <uni-view data-v-1409a1ee="" id="basicbtnpay" class="menu-item flex-column flex-center"><uni-image data-v-1409a1ee=""><div style="background-image: url(&quot;static/images/chongzhi.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/images/chongzhi.png" draggable="true"><!----></uni-image>
  <uni-view data-v-1409a1ee="" class="c-white">Transfer to basic account</uni-view>
</uni-view>


<uni-view data-v-1409a1ee="" id="refbtnpay" class="menu-item flex-column flex-center"><uni-image data-v-1409a1ee=""><div style="background-image: url(&quot;static/images/touzixiangmu.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/images/touzixiangmu.png" draggable="true"><!----></uni-image><uni-view data-v-1409a1ee="" class="c-white">Transfer to promotion account</uni-view></uni-view>
</uni-view>


<uni-view data-v-1409a1ee="" class="ft32 font-bold" style="margin: 0px 20px;">Investment is divided into two modes<br data-v-1409a1ee=""><br data-v-1409a1ee="">1:Recharge to the basic account and receive income according to Singapore time zone (after 24:00) every day<br data-v-1409a1ee=""><br data-v-1409a1ee="">2:Recharge into the promotion account, you can receive income according to different cycles, Return the principal and income upon maturity<br data-v-1409a1ee=""><br data-v-1409a1ee="">View notes:<br data-v-1409a1ee="">Before investing, please choose a basic account or an promotion account to invest according to your investment needs. Please be sure to wait for the account to be recharged. This is a very critical issue.</uni-view></uni-view>
    </uni-page-body></uni-page-wrapper></uni-page></uni-app>
    
    </body>

    <script src="static/js/jqoffline.js"></script>
    <script>
  $(document).on('click','#basicbtnpay', function(){
           window.location.href="basicpay.php";
  });

  $(document).on('click','#refbtnpay', function(){
           window.location.href="refpay.php";
  });

    </script>
  



</html>