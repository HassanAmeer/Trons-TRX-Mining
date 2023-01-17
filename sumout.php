<?
include 'config.php';
// error_reporting(0);



///////////////////////////////////////////
///////////////////////////////////////////

///////////////////////////////////////////
///////////////////////////////////////////







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






    <head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Withdrawal</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
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


                .mine-container[data-v-1463d8c0]{min-height:100vh;background-image:url(static/img/minebg.94d2a2a.94d2a2a8.jpg);background-size:100%;background-repeat:no-repeat;padding-bottom:85px}.mine-container .header-icon[data-v-1463d8c0]{position:relative;width:30px;height:30px;background:#f5c7eb;border-radius:50%;margin-left:3px}.mine-container .header-icon uni-image[data-v-1463d8c0]{width:21px;height:21px}.mine-container .header-icon .counter[data-v-1463d8c0]{width:6px;height:6px;border-radius:4px;background-color:#dc3545;position:absolute;top:0;right:0;margin-top:5px;margin-right:2px}.mine-container .head-dropdown[data-v-1463d8c0]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:80px;line-height:38px;top:50px;right:0;border-bottom-left-radius:4px;border-bottom-right-radius:4px;font-size:12px;text-align:center;color:#fff}.mine-container .services_content[data-v-1463d8c0]{padding-top:40px;padding-bottom:25px;box-sizing:border-box}.mine-container .services_content .link_icon[data-v-1463d8c0]{padding:0 16px 0 18px;box-sizing:border-box;display:flex;margin-top:32px;justify-content:space-between}.mine-container .services_content .link_icon .item[data-v-1463d8c0]{width:162px;height:61px;display:flex;align-items:center;font-size:15px;color:#fff;font-weight:700;padding-left:75px;background-size:100% 100%;background-image:url(static/img/deposit.a81e70ba.png);box-sizing:border-box}.mine-container .services_content .link_icon .item[data-v-1463d8c0]:last-child{padding-left:62px;background-image:url(static/img/withdrawal.aa608514.png)}.mine-container .services_content .main_quantity[data-v-1463d8c0]{height:140px;padding:40px 40px 0 43px;background-size:100% 100%;background-image:url(static/img/pagebgs_02.61737d2.61737d2d.png);box-sizing:border-box}.mine-container .services_content .main_quantity .title[data-v-1463d8c0]{align-items:flex-end;font-size:13px;color:#191919;font-weight:700}.mine-container .services_content .main_quantity .title uni-text[data-v-1463d8c0]{font-size:17px;margin-left:7px;color:#ff3c78}.mine-container .services_content .main_quantity .des[data-v-1463d8c0]{font-size:12px;color:#191919;line-height:19px;margin-top:10px}.mine-container .services_content .service_list[data-v-1463d8c0]{padding:45px 0 0}.mine-container .services_content .service_list .h3[data-v-1463d8c0]{font-size:21px;color:#191919;font-weight:700;margin-left:25px;margin-bottom:10px}.mine-container .services_content .service_list .list[data-v-1463d8c0]{margin-top:7px}.mine-container .services_content .service_list .item[data-v-1463d8c0]{display:flex;align-items:center;padding-left:32px;height:88px;background-size:100% 100%;background-image:url(static/img/mine-item.a16d491b.png);font-size:15px;color:#5a5253;font-weight:700;box-sizing:border-box}.mine-container .services_content .service_list .item uni-image[data-v-1463d8c0]{width:45px;height:44px}.mine-container .services_content .service_list .item uni-view[data-v-1463d8c0]{margin-left:14px}.mine-container .footer[data-v-1463d8c0]{position:fixed;left:50%;bottom:25px;display:flex;width:340px;height:94px;align-items:center;justify-content:space-between;padding:0 12px;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-image:url(static/images/footerbg.png);background-size:100% 100%}.mine-container .footer .item[data-v-1463d8c0]{padding-top:39px}.mine-container .footer .mid[data-v-1463d8c0]{width:62px;height:100%;position:absolute;bottom:0;left:50%;-webkit-transform:translateX(-35%);transform:translateX(-35%)}.mine-container .footer .tabbar[data-v-1463d8c0]{width:37px;margin:0 10px;height:40px;background-size:100% 100%}.mine-container .footer .tabbar uni-view[data-v-1463d8c0]{width:100%;height:100%;padding-top:25px;font-size:13px;color:#c6ccd3;text-align:center;box-sizing:border-box;overflow:hidden}.mine-container .footer .tabbar uni-view.active[data-v-1463d8c0]{color:#ff2768}</style><script charset="utf-8" src="static/js/pages-home-Withdrawal.91084837.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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


.withdraw-container[data-v-4c8a97d4]{min-height:100vh;background-image:url(static/img/commonbg.36a8d8d.36a8d8de.jpg);background-size:100%}.withdraw-container .main-container[data-v-4c8a97d4]{background-color:#f0f3f7;border-radius:20px;padding-top:15px;padding-bottom:15px;box-sizing:border-box}.withdraw-container .main-container .balance[data-v-4c8a97d4]{height:97px;font-size:40px;font-weight:700;color:#495057;background-color:#e9ecef;border-radius:18px;padding:0 30px;box-sizing:border-box}.withdraw-container .main-container .limit[data-v-4c8a97d4]{color:#6c757d}.withdraw-container .main-container .limit uni-text[data-v-4c8a97d4]{color:#20c2ce;margin-left:3px}.withdraw-container .main-container .form-group[data-v-4c8a97d4]{height:33px;color:#495057;border:1px solid #ced4da;border-radius:18px;background-color:#fff}.withdraw-container .main-container .form-group uni-input[data-v-4c8a97d4]{height:100%}.withdraw-container .main-container .form-area[data-v-4c8a97d4]{color:#495057;border:1px solid #ced4da;border-radius:18px;background-color:#fff}.withdraw-container .main-container .form-area uni-textarea[data-v-4c8a97d4]{height:54px;padding:5px 0}.withdraw-container .main-container .confirm-btn[data-v-4c8a97d4]{height:33px;background-color:#ff2768;color:#fff;border-radius:24px}</style></head>









<body class="uni-body pages-home-Withdrawal"><noscript><strong>Please enable JavaScript to continue.</strong></noscript>
  
  
  <div id="div1">
  <uni-app class="uni-app--maxwidth"><uni-page data-page="pages/home/Withdrawal">
    
   <uni-page-head uni-page-head-type="default"><div class="uni-page-head" style="background-color: rgb(248, 248, 248); color: rgb(0, 0, 0);"><div class="uni-page-head-hd"><div class="uni-page-head-btn" onclick="history.back()"><i class="uni-btn-icon" style="color: rgb(0, 0, 0); font-size: 27px;"></i></div><div class="uni-page-head-ft"></div></div><div class="uni-page-head-bd"><div class="uni-page-head__title" style="font-size: 16px; opacity: 1;"><!----> Withdrawals </div></div><!----><div class="uni-page-head-ft"></div></div><div class="uni-placeholder"></div></uni-page-head><!---->
  
  <uni-page-wrapper><uni-page-body><uni-view data-v-4c8a97d4="" class="withdraw-container"><uni-view data-v-4c8a97d4="" class="main-container plr30"><uni-view data-v-4c8a97d4="" class="container">
    
    <uni-view data-v-4c8a97d4="" class="text-center c_6c757d mt60">Basic account balance(TRX)</uni-view><uni-view data-v-4c8a97d4="" class="text-center color-red mb10">24-hour withdrawal</uni-view><uni-view data-v-4c8a97d4="" class="balance flex-center vbamountdiv"> 
    </uni-view><uni-view data-v-4c8a97d4="" class="limit text-center mb80">Daily withdrawal limit:<uni-text data-v-4c8a97d4=""><span class="vbcutlimit">
 

 </span></uni-text></uni-view>
    
    <uni-view data-v-4c8a97d4="" id="frefbtn" class="mb20 flex alcenter plr30 form-group">Basic account <select style="color: crimson; background:none;outline:none;border:none;"> </select> </uni-view>
    
    <uni-view data-v-4c8a97d4="" class="form-group plr30 mb20"><uni-input data-v-4c8a97d4="" class="ft28">
      
      
      
      <div class="uni-input-wrapper">
      
 <input maxlength="140" placeholder="quota 0.1-1000000" enterkeyhint="done" autocomplete="off" type="number" class="uni-input-input btrxinpt"><!----></div>
    
    
    </uni-input></uni-view><uni-view data-v-4c8a97d4="" class="c_red mb20">Fee: <? echo $chkq['sumout_fee']; ?>.00 ，to account <span class="tobaccfee"> </span>.00</uni-view><uni-view data-v-4c8a97d4="" class="form-area plr30 mb20"><uni-textarea data-v-4c8a97d4="" class="ft28"><div class="uni-textarea-wrapper">
      
      
      <div class="uni-textarea-placeholder textarea-placeholder" data-v-4c8a97d4=""></div><div class="uni-textarea-line"> </div><div class="uni-textarea-compute"><div>.</div><uni-resize-sensor><div><div></div></div><div><div></div></div></uni-resize-sensor></div>
      
      <textarea placeholder="Address(Start with T)" maxlength="140" enterkeyhint="" class="uni-textarea-textarea btrxadrsinpt" style="overflow-y: auto;"></textarea> <!----></div></uni-textarea></uni-view><uni-view data-v-4c8a97d4="" class="form-group plr30 mb20"><uni-input data-v-4c8a97d4="" class="ft28">
      

      <div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-4c8a97d4=""> </div><input placeholder="Security Password" maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input bsecpassinpt"><!----></div>
    
    </uni-input></uni-view><uni-view data-v-4c8a97d4="" class="flex-center confirm-btn bconfirmbtn">Confirm</uni-view></uni-view></uni-view></uni-view></uni-page-body></uni-page-wrapper></uni-page></uni-app></div>
    
    <!----------------------------promotion withdrawal div start -->




      
  <div id="div2" style="display:none;">
    <uni-app class="uni-app--maxwidth"><uni-page data-page="pages/home/Withdrawal"><uni-page-head uni-page-head-type="default"><div class="uni-page-head" style="background-color: rgb(248, 248, 248); color: rgb(0, 0, 0);"><div class="uni-page-head-hd"><div class="uni-page-head-btn" onclick="history.back()"><i class="uni-btn-icon" style="color: rgb(0, 0, 0); font-size: 27px;"></i></div><div class="uni-page-head-ft"></div></div><div class="uni-page-head-bd"><div class="uni-page-head__title" style="font-size: 16px; opacity: 1;"><!----> Withdrawals </div></div><!----><div class="uni-page-head-ft"></div></div><div class="uni-placeholder"></div></uni-page-head><!---->
    
    <uni-page-wrapper><uni-page-body><uni-view data-v-4c8a97d4="" class="withdraw-container"><uni-view data-v-4c8a97d4="" class="main-container plr30"><uni-view data-v-4c8a97d4="" class="container">
      
      <uni-view data-v-4c8a97d4="" class="text-center c_6c757d mt60">Promotion account balance(TRX)</uni-view><uni-view data-v-4c8a97d4="" class="text-center color-red mb10">24-hour withdrawal</uni-view><uni-view data-v-4c8a97d4="" class="balance flex-center vpamountdiv"> 
      </uni-view><uni-view data-v-4c8a97d4="" class="limit text-center mb80">Daily withdrawal limit:<uni-text data-v-4c8a97d4=""><span class="vpcutlimit">
        
        
        
        
        </span></uni-text></uni-view>
      
      <uni-view data-v-4c8a97d4="" id="fbasicbtn" class="mb20 flex alcenter plr30 form-group">Promotion Account <select style="color: crimson; background:none;outline:none;border:none;"> </select> </uni-view>
      
      <uni-view data-v-4c8a97d4="" class="form-group plr30 mb20"><uni-input data-v-4c8a97d4="" class="ft28">
        
        
        
<div class="uni-input-wrapper">
<input maxlength="140" placeholder="quota 0.1-1000000" enterkeyhint="done" autocomplete="off" type="number" class="uni-input-input ptrxinpt"><!----></div>
      
</uni-input></uni-view><uni-view data-v-4c8a97d4="" class="c_red mb20">Fee: <? echo $chkq['sumout_fee']; ?>.00 ，to account <span class="topaccfee"> </span>.00</uni-view><uni-view data-v-4c8a97d4="" class="form-area plr30 mb20"><uni-textarea data-v-4c8a97d4="" class="ft28"><div class="uni-textarea-wrapper">
        
        
 <div class="uni-textarea-placeholder textarea-placeholder" data-v-4c8a97d4=""></div><div class="uni-textarea-line"> </div><div class="uni-textarea-compute"><div>.</div><uni-resize-sensor><div><div></div></div><div><div></div></div></uni-resize-sensor></div>
        
 <textarea placeholder="Address(Start with T)" maxlength="140" enterkeyhint="" class="uni-textarea-textarea ptrxadrsinpt" style="overflow-y: auto;"></textarea> <!----></div></uni-textarea></uni-view><uni-view data-v-4c8a97d4="" class="form-group plr30 mb20"><uni-input data-v-4c8a97d4="" class="ft28">
        
        
<div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-4c8a97d4=""> </div><input placeholder="Security Password" maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input psecpassinpt"><!----></div>
      
</uni-input></uni-view><uni-view data-v-4c8a97d4="" class="flex-center confirm-btn pconfirmbtn">Confirm</uni-view></uni-view></uni-view></uni-view></uni-page-body></uni-page-wrapper></uni-page></uni-app></div>
      
      <!----------------------------promotion withdrawal div end -->




 <div class="bluepopup" style="display:none;">
 <div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 150px; right:0; border-right:14px solid rgb(0, 102, 255);">
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
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 100px; right:0; border-right:14px solid rgb(230, 3, 48);">
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
////////////////////////////////////      
////////////////////////////////////  
$(document).on('input','.btrxinpt',function() { 
    var onbtrxinpt = $(this).val() - <? echo $chkq['sumout_fee'] ?>;
    $('.tobaccfee').html(onbtrxinpt);
});
////////////////////////////////////      
////////////////////////////////////  
$(document).on('input','.ptrxinpt',function() { 
    var onptrxinpt = $(this).val() - <? echo $chkq['sumout_fee'] ?>;
    $('.topaccfee').html(onptrxinpt);
});
////////////////////////////////////      
////////////////////////////////////      
$(document).on('click','#frefbtn', function(){
    $('#div1').hide();
    $('#div2').show();
    }); 
         
$(document).on('click','#fbasicbtn', function(){
    $('#div2').hide();
    $('#div1').show();
}); 
    //////////////////////////
$(document).on('click','.popclosebtnblue', function(){
        $('.bluepopup').hide();
  });                     
  $(document).on('click','.popclosebtnred', function(){
        $('.redpopup').hide();
  });                     
  //////////////////////////




//////////////////////////////////////////
//////////////////////////////////////////
function vbamountf()
{
   $.post(
   "a.php",
   {vbamountjs:'vbamount'},
   function(bamountf){
    $('.vbamountdiv').html(bamountf)
    });
}
//////////////////////////////////////////
//////////////////////////////////////////
function vpamountf()
{
   $.post(
   "a.php",
   {vpamountjs:'vpamount'},
   function(pamountf){
    $('.vpamountdiv').html(pamountf)
    });
}
//////////////////////////////////////////
//////////////////////////////////////////
function vbcutlimitf()
{
   $.post(
   "a.php",
   {vbcutlimitjs:'vbcutlimit'},
   function(bcutlimitf){
    $('.vbcutlimit').html(bcutlimitf)
    });
}
//////////////////////////////////////////
//////////////////////////////////////////
function vpcutlimitf()
{
   $.post(
   "a.php",
   {vpcutlimitjs:'vpcutlimit'},
   function(pcutlimitf){
    $('.vpcutlimit').html(pcutlimitf)
    });
}
//////////////////////////////////////////
//////////////////////////////////////////
 /////2.
 $(document).on('click','.bconfirmbtn', function(){
   var btrxinpt = $('.btrxinpt').val();
   var btrxadrsinpt = $('.btrxadrsinpt').val();
   var bsecpassinpt = $('.bsecpassinpt').val();
   trxadrslenth = btrxadrsinpt.length;
 if(btrxinpt == "" || btrxadrsinpt == "" || bsecpassinpt == "")
 {
  $('.redpopup').fadeIn();
  $('.popinerred').html(' All filds Are required ');
 }else if(btrxinpt < 0.1){
  $('.redpopup').fadeIn();
  $('.popinerred').html('Min - 0.1 TRX');
 }else if(trxadrslenth < 8){
  $('.redpopup').fadeIn();
  $('.popinerred').html('TRX Address Is Not Correct');
 }else{
    $.post(
      "a.php",
      {btrxinptjs:btrxinpt,btrxadrsinptjs:btrxadrsinpt,bsecpassinptjs:bsecpassinpt},
      function(bsoutbtnf){
        vbamountf();
        vbcutlimitf();
     if(bsoutbtnf == 0){
     $('.redpopup').fadeIn();
     $('.popinerred').html(' Security Password Not Match');
     }else if(bsoutbtnf == 1){
       $('.bluepopup').fadeIn();
       $('.popinerblue').html(' withdrawal success');
     }else if(bsoutbtnf == 2){
       $('.bluepopup').fadeIn();
       $('.popinerblue').html('withdrawal  Requested');
     }else if(bsoutbtnf == 3){
     $('.redpopup').fadeIn();
     $('.popinerred').html('Promotion Account is not Active ');
     }else if(bsoutbtnf == 4){
     $('.redpopup').fadeIn();
     $('.popinerred').html(' Account is Ban ');
     }else if(bsoutbtnf == 5){
     $('.redpopup').fadeIn();
     $('.popinerred').html("You entered higher Amounts from daily limits ");
     }else if(bsoutbtnf == 6){
     $('.redpopup').fadeIn();
     $('.popinerred').html("Today Already Withdrawal");
     }else{
     $('.redpopup').fadeIn();
     $('.popinerred').html("Network Problem Tray Again Later ");
     }
     
      
      });
    } // end empty filds
 });
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
 /////2.
 $(document).on('click','.pconfirmbtn', function(){
   var ptrxinpt = $('.ptrxinpt').val();
   var ptrxadrsinpt = $('.ptrxadrsinpt').val();
   var psecpassinpt = $('.psecpassinpt').val();
   trxadrslenth = ptrxadrsinpt.length;
 if(ptrxinpt == "" || ptrxadrsinpt == "" || psecpassinpt == "")
 {
  $('.redpopup').fadeIn();
  $('.popinerred').html(' All filds Are required ');
 }else if(ptrxinpt < 0.1){
  $('.redpopup').fadeIn();
  $('.popinerred').html('Min - 0.1 TRX');
 }else if(trxadrslenth < 8){
  $('.redpopup').fadeIn();
  $('.popinerred').html('TRX Address Is Not Correct');
 }else{
    $.post(
      "a.php",
      {ptrxinptjs:ptrxinpt,ptrxadrsinptjs:ptrxadrsinpt,psecpassinptjs:psecpassinpt},
      function(psoutbtnf){
        vpcutlimitf();
        vpamountf();
     if(psoutbtnf == 0){
     $('.redpopup').fadeIn();
     $('.popinerred').html(' Security Password Not Match');
     }else if(psoutbtnf == 1){
       $('.bluepopup').fadeIn();
       $('.popinerblue').html(' withdrawal success');
     }else if(psoutbtnf == 2){
       $('.bluepopup').fadeIn();
       $('.popinerblue').html('withdrawal  Requested');
     }else if(psoutbtnf == 3){
     $('.redpopup').fadeIn();
     $('.popinerred').html('Promotion Account is not Active ');
     }else if(psoutbtnf == 4){
     $('.redpopup').fadeIn();
     $('.popinerred').html(' Account is Ban ');
     }else if(psoutbtnf == 5){
     $('.redpopup').fadeIn();
     $('.popinerred').html("You entered higher Amounts from daily limits ");
     }else if(psoutbtnf == 6){
     $('.redpopup').fadeIn();
     $('.popinerred').html("Today Already Withdrawal");
     }else{
     $('.redpopup').fadeIn();
     $('.popinerred').html("Network Problem Tray Again Later ");
     }
     
      
      });
    } // end empty filds
 });
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
 window.onload = vbamountf();
 window.onload = vpamountf();
 window.onload = vbcutlimitf();
 window.onload = vpcutlimitf();
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    

    </script>
</html>