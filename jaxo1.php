<?php
include 'config.php';
session_start();
$vusrlog = $_COOKIE['coklog'];

$vusrdata = "SELECT * FROM `userslog` WHERE usrphone = '$vusrlog'";
$vusrdataq =mysqli_query($db,$vusrdata);
$vusrdataf = mysqli_fetch_array($vusrdataq);

///////////////
$vfallstngs = "SELECT * FROM `ghstng` WHERE stngid = 1";
$vfallstngsq =mysqli_query($db,$vfallstngs);
$vfallstngf = mysqli_fetch_array($vfallstngsq);
$vregbonus = $vfallstngf['regbonus'];
$fminper = $vfallstngf['free_mining_perc'];






/*
$wtofbl = $vusrdataf['sumout'];
$sban = $vusrdataf['user_ban'];
///////////////
$vfallstngs = "SELECT * FROM `ghstng` WHERE stngid = 1";
$vfallstngsq =mysqli_query($db,$vfallstngs);
$vfallstngf = mysqli_fetch_array($vfallstngsq);
$rdmbns = $vfallstngf['rdmbns'];
$stngsban = $vfallstngf['withdrawoff'];

*/



if(isset($_POST['basictrxjs']))
{  echo $vusrdataf['sumout']; }

if(isset($_POST['promotiontrxjs']))
{  echo $vusrdataf['refbonus']; }




if(isset($_POST['regphonejs']))
{
  $regphonejs = mysqli_real_escape_string($db,$_POST['regphonejs']);
  $regpassj = mysqli_real_escape_string($db,$_POST['regpassj']);
  $regsecpassjs = mysqli_real_escape_string($db,$_POST['regsecpassjs']);
  $regreffjs = mysqli_real_escape_string($db,$_POST['regreffjs']);
  
  $chklog = mysqli_query($db,"SELECT usrphone FROM `userslog` WHERE usrphone='$regphonejs'");
 $chklogv=mysqli_fetch_array($chklog);
 $chkbylog = $chklogv['usrphone'];

if($chkbylog == $regphonejs){
  echo 0;
}else{
  if($regreffjs==" ")
  {$refbyval = 0; 
   $vreflvl2v = 0;
   $vreflvl3v = 0;
  }else{
   $refbyval = $regreffjs; 
  $vreflvl2 = mysqli_query($db,"SELECT * FROM `userslog` WHERE uid='$regreffjs'");
 $vreflvl2f=mysqli_fetch_array($vreflvl2);

      $vreflvl2v = $vreflvl2f['refby'];
      $vreflvl3 = mysqli_query($db,"SELECT * FROM `userslog` WHERE uid='$vreflvl2v'");
  $vreflvl3f=mysqli_fetch_array($vreflvl3);
     
   if($vreflvl2f['refby'] == 0)
    { $vreflvl2v = 0; }else{
      $vreflvl2v = $vreflvl2f['refby'];
    }
   if($vreflvl3f['refby'] == 0)
    { $vreflvl3v = 0; }else{
      $vreflvl3v = $vreflvl3f['refby'];
    }
    //// end value ref 
  }
   /////// end refers sytems
   $regtimreg = time();
   $endtimnth = 60 * 84600;
   $endtimreg = time() + $endtimnth;
   
   $upasssha1 = sha1($regpassj);
   $upassmd = md5($upasssha1);
  $setlog = "INSERT INTO `userslog`(`usrphone`, `upass`, `securitypass`, `sumout`,`refby`,`reflevel_1`,`reflevel_2`,`regtime`,`endpkgtime`,`active_bns`) VALUES ('$regphonejs','$upassmd','$regsecpassjs','$vregbonus','$refbyval','$vreflvl2v','$vreflvl3v','$regtimreg','$endtimreg','$fminper')";
  
  $setlogq = mysqli_query($db,$setlog); 
  if($setlogq){ echo 1;}
  }
}
////////////////////////////
if(isset($_POST['signphonejs']))
{
  $signphonejs = mysqli_real_escape_string($db,$_POST['signphonejs']);
  $signpassjs = mysqli_real_escape_string($db,$_POST['signpassjs']);
  
$upasssha1 = sha1($signpassjs);
$upassmd = md5($upasssha1);
  
 $chklog = mysqli_query($db,"SELECT usrphone, upass FROM `userslog` WHERE usrphone='$signphonejs' AND upass='$upassmd'");
if(mysqli_num_rows($chklog) == 1)
  { setcookie('coklog',$signphonejs,time() + 30600,'/');
 $ipset = $_SERVER['REMOTE_ADDR'];
 $ipchangeset = "UPDATE `userslog` SET `ip`='$ipset' WHERE usrphone='$signphonejs'";
  mysqli_query($db,$ipchangeset);
   echo 1;
  }else{
    echo 2;
  }
}

///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
//////////////
if(isset($_POST['oldpassjs']))
{
  $oldpassjs = mysqli_real_escape_string($db,$_POST['oldpassjs']);
  $setokpassjs = mysqli_real_escape_string($db,$_POST['setokpassjs']);

   $oldpass2 = sha1($oldpassjs);
   $oldpass3 = md5($oldpass2);

 $chkoldpass = mysqli_query($db,"SELECT upass FROM `userslog` WHERE usrphone='$vusrlog'");
$oldpasv=mysqli_fetch_array($chkoldpass);
 $oldpasvf = $oldpasv['upass'];
if($oldpass3 == $oldpasvf)
{
  $upasssha12 = sha1($setokpassjs);
   $upassmd2 = md5($upasssha12);
 $setulog="UPDATE `userslog` SET upass='$upassmd2' WHERE usrphone='$vusrlog'";
 $setulogq = mysqli_query($db,$setulog) or die('not sql'.mysqli_errno($db)) ;
 if($setulogq)
       { echo 1; } else { echo 2; }
}else{ echo 0; }
}
///////////////////////////////////////////
//////////////
if(isset($_POST['oldpassjsec']))
{
  $oldpassjs2 = mysqli_real_escape_string($db,$_POST['oldpassjsec']);
  $setokpassjs2 = mysqli_real_escape_string($db,$_POST['setokpassjsec']);

 $chkoldpass = mysqli_query($db,"SELECT securitypass FROM `userslog` WHERE usrphone='$vusrlog'");
$oldpasv=mysqli_fetch_array($chkoldpass);
 $oldpasvf = $oldpasv['securitypass'];
if($oldpassjs2 == $oldpasvf){
   $setulog="UPDATE `userslog` SET securitypass='$setokpassjs2' WHERE usrphone='$vusrlog'";
  
 $setulogq = mysqli_query($db,$setulog) or die('not sql'.mysqli_errno($db)) ;
 if($setulogq)
       { echo 1; } else { echo 2; }
}else{ echo 0; }
}
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
//////////////
if(isset($_POST['extrxjs']))
{
  $extrxjs = mysqli_real_escape_string($db,$_POST['extrxjs']);
  $secpassjs = mysqli_real_escape_string($db,$_POST['secpassjs']);

 $chkoldpass = mysqli_query($db,"SELECT securitypass FROM `userslog` WHERE usrphone='$vusrlog'");
$oldpasv=mysqli_fetch_array($chkoldpass);
 $oldpasvf = $oldpasv['securitypass'];
if($secpassjs == $oldpasvf){
   $setulog="UPDATE `userslog` SET refbonus=refbonus - '$extrxjs', sumout=sumout + '$extrxjs' WHERE usrphone='$vusrlog'";
  
 $setulogq = mysqli_query($db,$setulog) or die('not sql'.mysqli_errno($db)) ;
 if($setulogq)
       { echo 1; } else { echo 2; }
}else{ echo 0; }
}
///////////////////////////////////////////
///////////////////////////////////////////
////1.
if(isset($_COOKIE['coklog']))
{
 // $activ_bns = $vusrdataf['active_bns'];
$actvbnsp = $vusrdataf['active_bns'];
$basicoutperc = $vusrdataf['sumout'] / 100 * $actvbnsp;
$clctime = $vusrdataf['clctime'];
$fromdat = $vusrdataf['regtime'];
$todaydat = time();
$difdat = $todaydat - $fromdat;
$timeloop = floor($difdat / 84600); 
$difclctim = $timeloop - $clctime;
if(!$vusrlog =="")
{
for($i = 0; $i < $difclctim; $i++)
{
$setloptrdng = "INSERT INTO `trading`(`byusr`, `bns`) VALUES ('$vusrlog','$basicoutperc')";
  
  $setloptrdngq = mysqli_query($db,$setloptrdng); 
 /* if($setloptrdngq){ echo 1;} */
}
 $setclctdtim="UPDATE `userslog` SET clctime=clctime + '$difclctim' WHERE usrphone='$vusrlog'";
  
 $setclctdtimq = mysqli_query($db,$setclctdtim) or die('not sql'.mysqli_errno($db)) ;
 } 
}
////////2.

if(isset($_POST['trdngjs']))
{
$vtrdinglst = "SELECT * FROM `trading` WHERE byusr='$vusrlog' ORDER BY id DESC";
  $vtrdinglstq = mysqli_query($db,$vtrdinglst);
 while($vtrdinglstf = mysqli_fetch_assoc($vtrdinglstq)){
   if($vtrdinglstf['status'] == 0)
  { $vtrdinglstw.='<uni-view data-v-65724246="" class="lidiv flex alcenter flex-between"><uni-view data-v-65724246="" class="icon flex alcenter"><uni-image data-v-65724246="">
  <div style="background-image: url(&quot;data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QN+aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzMiA3OS4xNTkyODQsIDIwMTYvMDQvMTktMTM6MTM6NDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NmUzZDJlMjQtODM3OS00MGFjLWFmYjEtZTRhZWYyNDdjNTA3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjNEQjc3Qzk5MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNEQjc3Qzk4MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjYwYWEzMmItODNkOS00M2NmLTg2MzgtNjdhODNiYTAyNzkwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjZlM2QyZTI0LTgzNzktNDBhYy1hZmIxLWU0YWVmMjQ3YzUwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QN+aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzMiA3OS4xNTkyODQsIDIwMTYvMDQvMTktMTM6MTM6NDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NmUzZDJlMjQtODM3OS00MGFjLWFmYjEtZTRhZWYyNDdjNTA3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjNEQjc3Qzk5MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNEQjc3Qzk4MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjYwYWEzMmItODNkOS00M2NmLTg2MzgtNjdhODNiYTAyNzkwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjZlM2QyZTI0LTgzNzktNDBhYy1hZmIxLWU0YWVmMjQ3YzUwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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" draggable="true"><!----></uni-image>
  <uni-view data-v-65724246="" class="grow"><uni-view data-v-65724246="" class="price">'.$vtrdinglstf['bns'].'<uni-text data-v-65724246=""><span>TRX</span></uni-text></uni-view><uni-view data-v-65724246="" class="des">Quantifying transaction revenue</uni-view></uni-view></uni-view><uni-view data-v-65724246="" class="btn flex-center font-bold getbnsbtntrx" data-getbnsid="'.$vtrdinglstf['id'].'" data-getbnstrx="'.$vtrdinglstf['bns'].'">Receive</uni-view></uni-view>'; }else{
   $vtrdinglstw.='<uni-view data-v-65724246="" class="lidiv flex alcenter flex-between"><uni-view data-v-65724246="" class="icon flex alcenter"><uni-image data-v-65724246="">
  <div style="background-image: url(&quot;data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QN+aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzMiA3OS4xNTkyODQsIDIwMTYvMDQvMTktMTM6MTM6NDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NmUzZDJlMjQtODM3OS00MGFjLWFmYjEtZTRhZWYyNDdjNTA3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjNEQjc3Qzk5MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNEQjc3Qzk4MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjYwYWEzMmItODNkOS00M2NmLTg2MzgtNjdhODNiYTAyNzkwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjZlM2QyZTI0LTgzNzktNDBhYy1hZmIxLWU0YWVmMjQ3YzUwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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&quot;); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div><img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QN+aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzMiA3OS4xNTkyODQsIDIwMTYvMDQvMTktMTM6MTM6NDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NmUzZDJlMjQtODM3OS00MGFjLWFmYjEtZTRhZWYyNDdjNTA3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjNEQjc3Qzk5MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNEQjc3Qzk4MjE1NjExRUM5MkU3RjI2NzU5MTZGODlFIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4wIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjYwYWEzMmItODNkOS00M2NmLTg2MzgtNjdhODNiYTAyNzkwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjZlM2QyZTI0LTgzNzktNDBhYy1hZmIxLWU0YWVmMjQ3YzUwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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" draggable="true"><!----></uni-image>
  <uni-view data-v-65724246="" class="grow"><uni-view data-v-65724246="" class="price">'.$vtrdinglstf['bns'].'<uni-text data-v-65724246=""><span>TRX</span></uni-text></uni-view><uni-view data-v-65724246="" class="des">Quantifying transaction revenue</uni-view></uni-view></uni-view><uni-view data-v-65724246="" class="btn flex-center font-bold disabled">Receive</uni-view></uni-view>'; }
 }
 echo $vtrdinglstw;
}
//////////3.
if(isset($_POST['bnsidjsbtn']))
{
  $bnsidjsbtn = mysqli_real_escape_string($db, $_POST['bnsidjsbtn']);
  $bnstrxjs = mysqli_real_escape_string($db, $_POST['bnstrxjs']);
  
 $setbnsgeted="UPDATE `trading` SET status=1 WHERE byusr='$vusrlog' AND id='$bnsidjsbtn'";
 $setbnsgetedq = mysqli_query($db,$setbnsgeted) or die('not sql'.mysqli_error($db)) ;
 
 $settrxout="UPDATE `userslog` SET sumout=sumout + '$bnstrxjs' WHERE usrphone='$vusrlog'";
 $settrxoutq = mysqli_query($db,$settrxout) or die('not sql'.mysqli_error($db)) ;
}

///////////////////////////////////////////
///////////////////////////////////////////

/*
 $seted="DELETE FROM `trading` WHERE status=0";
 $setedq = mysqli_query($db,$seted) or die('not sql'.mysqli_error($db)) ;
*/










?>