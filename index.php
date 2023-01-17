<?
include 'config.php';
 error_reporting(0);

if(isset($_COOKIE['coklog']))
{ header('location: home.php'); }

/*
$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);
$d = $chkq['end_date'];
  $h = $chkq['end_h'];
  $m = $chkq['end_m'];
  $s = $chkq['end_s'];

if(isset($_GET['referid']))
{ $_SESSION['refby'] = $_GET['referid']; }
*/

?>

<!DOCTYPE html>
<html lang="en" style="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; --window-top:calc(var(--top-window-height) + 0px); --window-bottom:0px;" class="translated-ltr">
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>login</title><script>var coverSupport = 'CSS' in window && typeof CSS.supports === 'function' && (CSS.supports('top: env(a)') || CSS.supports('top: constant(a)'))
    document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' + (coverSupport ? ', viewport-fit=cover' : '') + '" />')</script><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover"><link rel="stylesheet" href="static/index.a5c69d49.css"><style type="text/css">



.col-3{width:90px}.flex{display:flex}.flex-one{flex:1}.flex-wrap{flex-wrap:wrap}.flex-center{display:flex;justify-content:center;align-items:center}.flex-around{display:flex;justify-content:space-around}.flex-end{display:flex;justify-content:flex-end}.flex-between{display:flex;justify-content:space-between!important}.justify-center{justify-content:center}.alcenter{align-items:center}.flex-column{display:flex;flex-direction:column}.rounded{border-radius:3px}.bg-white{background-color:#fff}.bg-EE9D18{background-color:#ee9d18}.bg-e5e5e5{background-color:#e5e5e5}.bg_FFA1AF{background-color:#ffa1af}.bg_f0f2f5{background-color:#f0f2f5}.bg_54BCB7{background-color:#54bcb7}.bg_C5CFD5{background-color:#c5cfd5}.c_172045{color:#172045}.c_FF5C5C{color:#ff5c5c}.c_099AFF{color:#099aff}.c_AAAAAA{color:#aaa}.c_F71D1D{color:#f71d1d}.c_313233{color:#313233}.c_4945FF{color:#4945ff}.c_10AA06{color:#10aa06}.c_FF9900{color:#f90}.c_B4B5B6{color:#b4b5b6}.c_C7D0D6{color:#c7d0d6}.c_6c757d{color:#6c757d}.c_8C9FAD{color:#8c9fad}.c_989AAA{color:#989aaa}.c_9B9898{color:#9b9898}.c_a9acb2{color:#a9acb2}.c_171717{color:#171717}.c_191919{color:#191919}.c_f07a9a{color:#f07a9a}.c_ef5079{color:#ef5079}.c_54BCB7{color:#54bcb7}.c_C5CFD5{color:#c5cfd5}.c_FFA1AF{color:#ffa1af}.c-EE9D18{color:#ee9d18}.c_FF5900{color:#ff5900}.c-00A212{color:#00a212}.c_2a2a2a{color:#2a2a2a}.c_FA9A43{color:#fa9a43}.c-white{color:#fff}.c_666{color:#666}.c_999{color:#999}.c_gray{color:#ccc}.c_969797{color:#969797}.c_8E8E93{color:#8e8e93}.c_abacb9{color:#abacb9}.c_848484{color:#848484}.c_F7B500{color:#f7b500}.c_8A6756{color:#8a6756}.c_F43F36{color:#f43f36}.c_FA6400{color:#fa6400}.c_red{color:red}.color-red{color:#ff5340}.c_black{color:#000}.c_333{color:c_333}.line:after{content:"";position:absolute;left:0;bottom:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_top:after{content:"";position:absolute;left:0;top:0;background:#f0f0f0;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom:after{content:"";position:absolute;left:0;bottom:0;background:#e6e6e6;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_bottom_one:after{content:"";position:absolute;left:0;bottom:1px;background:#d5d5d8;width:100%;height:1px;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.border_right:after{content:"";position:absolute;top:0;right:0;background:#d5d5d8;width:1px;height:100%;-webkit-transform:scaleX(.5);transform:scaleX(.5)}.w_650{width:312px}.h_100{height:100%}.h40{height:19px}.h120{height:57px}.h100{height:48px}.h110{height:52px}.h60{height:28px}.h80{height:38px}.h88{height:42px}.h90{height:43px}.mt32-mb48{margin-top:15px;margin-bottom:23px}.mt10{margin-top:4px}.mt48{margin-top:23px}.mb10{margin-bottom:4px}.mb16{margin-bottom:7px}.mb20{margin-bottom:9px}.mb30{margin-bottom:14px}.mb40{margin-bottom:19px!important}.mb45{margin-bottom:21px!important}.ml4{margin-left:1px}.ml10{margin-left:4px}.ml60{margin-left:28px}.ml70{margin-left:33px}.ml100{margin-left:48px}.ml110{margin-left:52px}.ml20{margin-left:9px}.ml30{margin-left:14px}.ml40{margin-left:19px}.mr10{margin-right:4px}.mr20{margin-right:9px}.mr30{margin-right:14px}.mr40{margin-right:19px}.mr70{margin-right:33px}.mr100{margin-right:48px}.mt20{margin-top:9px!important}.mt13{margin-top:6px}.mt30{margin-top:14px}.mt40{margin-top:19px}.mt50{margin-top:24px}.mt60{margin-top:28px}.mt80{margin-top:38px}.mt120{margin-top:57px}.mt160{margin-top:76px}.mlr10{margin-left:4px;margin-right:4px}.mlr30{margin-left:14px;margin-right:14px}.mlr40{margin-left:19px;margin-right:19px}.pl10{padding-left:4px}.pl30{padding-left:14px}.pl60{padding-left:28px}.pl130{padding-left:62px}.pl20{padding-left:9px}.pr10{padding-right:4px}.pr20{padding-right:9px}.pd10{padding:4px}.pd20{padding:9px!important}.pd30{padding:14px}.pd40{padding:19px}.plr10{padding-left:4px;padding-right:4px}.plr20{padding-left:9px;padding-right:9px}.plr30{padding-left:14px;padding-right:14px}.plr40{padding-left:19px!important;padding-right:19px!important}.plr56{padding-left:26px!important;padding-right:26px!important}.pt20{padding-top:9px}.pt30{padding-top:14px}.pt40{padding-top:19px}.pb20{padding-bottom:9px}.pb30{padding-bottom:14px}.pb40{padding-bottom:19px}.pb100{padding-bottom:48px}.mb20{margin-bottom:9px!important}.mb40{margin-bottom:19px!important}.mb60{margin-bottom:28px!important}.mb80{margin-bottom:38px!important}.text-center{text-align:center}.line-one{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.line-two{display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden;text-overflow:ellipsis}.ft16{font-size:7px}.ft20{font-size:9px!important}.ft24{font-size:11px}.ft26{font-size:12px}.ft28{font-size:13px}.ft30{font-size:14px}.ft32{font-size:15px}.ft36{font-size:17px}.ft40{font-size:19px}.ft48{font-size:23px}.ft50{font-size:24px}.ft60{font-size:28px}.ft73{font-size:35px}.ft80{font-size:38px}.lh36{line-height:17px}.lh40{line-height:19px}.lh56{line-height:26px}.font-bold{font-weight:700}.relative{position:relative}.pf{font-family:PingFangSC-Semibold,PingFang SC}uni-page-body{font-size:13px;color:#212529;font-family:PingFangSC-Semibold,PingFang SC;background-color:#f5f8fa}body{background-color:#f5f8fa}</style><script charset="utf-8" src="static/js/pages-login-login.abd1149e.js"></script><style type="text/css">.uni-app--showtabbar uni-page-wrapper {
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















.login-container[data-v-46374971]{min-height:100vh;background-image:url(static/img/login-bg.36a8d8de.jpg);background-size:100% 100%}.login-container .header[data-v-46374971]{padding:9px 14px}.login-container .header .left[data-v-46374971]{height:28px;line-height:28px}.login-container .header .language[data-v-46374971]{width:28px;height:28px;line-height:28px;color:#000;background:#f5c7eb;border-radius:50%;text-align:center}.login-container .header .language .head-dropdown[data-v-46374971]{position:fixed;padding:0;background-color:#fe6ea2;z-index:999;width:76px;line-height:36px;right:0;border-bottom-left-radius:3px;border-bottom-right-radius:3px;font-size:11px;text-align:center;color:#fff}.login-container .reg_content[data-v-46374971]{position:relative;padding-top:24px}.login-container .reg_content .logo[data-v-46374971]{width:147px;height:147px}.login-container .reg_content .form[data-v-46374971]{overflow:hidden;width:259px;margin:0 auto;padding-top:48px}.login-container .reg_content .form .item[data-v-46374971]{overflow:hidden;margin-bottom:11px}.login-container .reg_content .form .item .form-title[data-v-46374971]{font-size:15px;color:#191919;font-weight:700;margin-bottom:9px}.login-container .reg_content .form .item .label[data-v-46374971]{overflow:hidden;width:100%;border-radius:28px;background:#fff1f5;justify-content:flex-start;font-size:11px;height:50px;margin-left:13px;margin-bottom:12px}.login-container .reg_content .form .item .label uni-input[data-v-46374971]{width:60%;height:100%;padding-left:14px;font-size:13px;color:#ff8ab0}.login-container .reg_content .form .item .label .attach-img[data-v-46374971]{width:72px;height:28px}.login-container .reg_content .form .switchs .des[data-v-46374971]{color:#191919;font-size:9px;font-weight:700;margin-left:4px}.login-container .reg_content .button_grow[data-v-46374971]{overflow:hidden;width:237px;margin:48px auto 0}.login-container .reg_content .button_grow .btn[data-v-46374971]{overflow:hidden;width:100%;height:40px;border-radius:24px;display:flex;margin:0 auto 18px;align-items:center;background:#ff1964;justify-content:center;font-size:14px;font-weight:700;color:#fff}.login-container .reg_content .button_grow .btn.on[data-v-46374971]{background:#ffecf2;color:#ff1964}</style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<body class="uni-body pages-login-login"><noscript><strong>Please enable JavaScript to continue.</strong></noscript><uni-app class="uni-app--maxwidth"><uni-page data-page=""><!----><!----><uni-page-wrapper><uni-page-body><uni-view data-v-46374971="" class="login-container"><uni-view data-v-46374971="" class="header flex-between alcenter"><a href="signup.php" style="text-decoration:none;color:black;" data-v-46374971="" class="left">Sign up</a>


<uni-view style="display: none;" data-v-46374971="" class="language"><uni-view data-v-46374971="" class="type ft26">zh</uni-view><uni-view data-v-46374971="" class="head-dropdown" ><uni-view data-v-46374971="">English</uni-view><uni-view data-v-46374971="">Portuguese</uni-view><uni-view data-v-46374971="">Indonesian</uni-view><uni-view data-v-46374971="">Korean</uni-view><uni-view data-v-46374971="">German</uni-view><uni-view data-v-46374971="">Japanese</uni-view><uni-view data-v-46374971="">French</uni-view><uni-view data-v-46374971="">Arabic</uni-view><uni-view data-v-46374971="">Turkish</uni-view><uni-view data-v-46374971="">Spanish</uni-view></uni-view></uni-view></uni-view><uni-view data-v-46374971="" class="reg_content"><uni-view data-v-46374971="" class="loginlogo flex-center"><uni-image data-v-46374971="" class="logo"><div style="background-image: url(&quot;static/img/loginlogo.3dae9f98.png&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="static/img/loginlogo.3dae9f98.png" draggable="true"><!----></uni-image></uni-view><uni-view data-v-46374971="" class="form"><uni-view data-v-46374971="" class="item"><uni-view data-v-46374971="" class="form-title">Mobile number</uni-view><uni-view data-v-46374971="" class="label flex alcenter"><uni-input data-v-46374971=""><div class="uni-input-wrapper">
  
  <input id="signphone" placeholder="Mobile number" maxlength="16" enterkeyhint="done" pattern="[0-9]*" autocomplete="off" type="number" class="uni-input-input"><!----></div></uni-input></uni-view></uni-view><uni-view data-v-46374971="" class="item mb30"><uni-view data-v-46374971="" class="form-title">Login password</uni-view><uni-view data-v-46374971="" class="label flex alcenter"><uni-input data-v-46374971=""><div class="uni-input-wrapper">
    
  <input id="signpass" placeholder="Login Password" maxlength="16" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input"><!----></div></uni-input></uni-view></uni-view><uni-view data-v-46374971="" class="item mb30" style="display: none;"><uni-view data-v-46374971="" class="form-title">Attach</uni-view><uni-view data-v-46374971="" class="label flex alcenter"><uni-input data-v-46374971=""><div class="uni-input-wrapper"><div class="uni-input-placeholder input-placeholder" data-v-46374971="" style="font-size: 13px; color: rgb(153, 153, 153); width: 54%;">Attach</div><input maxlength="6" step="" enterkeyhint="done" autocomplete="off" type="" class="uni-input-input"><!----></div></uni-input><uni-image data-v-46374971="" class="attach-img"><div style="background-image: none; background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><!----><!----></uni-image></uni-view></uni-view>
  
  
  <uni-view data-v-46374971="" class="switchs flex alcenter"><uni-switch data-v-46374971="" value="true" style="transform: scale(0.8);"><div class="uni-switch-wrapper"><div class="switcherbtn uni-switch-input uni-switch-input-checked" style="background-color: rgb(237, 70, 111); border-color: rgb(237, 70, 111);"></div><div class="uni-checkbox-input uni-checkbox-input-checked" style="color: rgb(237, 70, 111); display: none;"></div></div></uni-switch><uni-view data-v-46374971="" class="des">Remember the password</uni-view></uni-view>
  
  
  </uni-view><uni-view data-v-46374971="" class="button_grow">
    
 <uni-view data-v-46374971="" id="signbtn" class="btn">Sign In</uni-view>
    
    <uni-navigator data-v-46374971="" id="signupbtn" class="btn on">Sign up</uni-navigator></uni-view></uni-view></uni-view></uni-page-body></uni-page-wrapper></uni-page>
  
  
  
  
  
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
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; z-index:200; bottom: 50px; right:0; border-right:14px solid rgb(230, 3, 48);">
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
 localStorage.removeItem('popupvset');
 //////////
$(document).on('click','#signupbtn', function(){
        window.location.href="signup.php";
});
/////////////////))
$(document).on('click','.switcherbtn', function(){
    $('.switcherbtn').toggleClass('uni-switch-input-checked');
});
///////////////////////////////////
/////////////////// ///////////////
/////////////single ///////////////
/////////////single ///////////////
 $(document).on('click','#signbtn',function(){
   var signphone = $('#signphone').val();
   var signpass = $('#signpass').val();
   if(signphone == "" || signpass == "")
   { 
    $('.redpopup').fadeIn();
     $('.popinerred').html('All fields are required');
   }else{
      $.post(
      "jaxo1.php",
      {signphonejs:signphone , signpassjs:signpass},
       function(loginfchk){
       if(loginfchk == 1){ 
     window.location.href = 'home.php';
     }else if(loginfchk == 2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Wrong Account Data');
      }  }); // end post
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
//////////////////////////
 </script>


</html>