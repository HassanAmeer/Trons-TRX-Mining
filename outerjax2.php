
<?php
include 'config.php';
session_start();

/*
if(!isset($_COOKIE['coklog']))
{ exit(); }
*/

$vusrlog = $_COOKIE['coklog'];

$vusrdata = "SELECT * FROM `userslog` WHERE usrphone = '$vusrlog'";
$vusrdataq =mysqli_query($db,$vusrdata);
$vusrdataf = mysqli_fetch_array($vusrdataq);
$vhvsumout = $vusrdataf['sumout'];
$vhvtsumout = $vusrdataf['totalsumout'];
$vhvrefbns = $vusrdataf['refbonus'];
$vtotalref = $vusrdataf['totalref'];
///////////////
$vfallstngs = "SELECT * FROM `ghstng` WHERE stngid = 1";
$vfallstngsq = mysqli_query($db,$vfallstngs);
$vfallstngf = mysqli_fetch_array($vfallstngsq);
$sumout_fee = $vfallstngf['sumout_fee'];
$freesout = $vfallstngf['free_withdrawal'];
// setcookie('usrprofilep','usrsecured',time() - 84600,'/');
////////
if(isset($_POST['vbamountjs']))
{ echo $vusrdataf['sumout']; }
////////
////////
if(isset($_POST['vpamountjs']))
{ echo $vusrdataf['refbonus'].'001ref'; }
////////
if(isset($_POST['vbcutlimitjs']))
{
 if($vusrdataf['mining_status'] == 1)
 { echo $vusrdataf['sumout'] / 100 * 5; }else{ echo 0; } 
}
///////////
if(isset($_POST['vpcutlimitjs']))
{
 if($vusrdataf['team_status'] == 1)
 {echo $vusrdataf['refbonus'] / 100 * 5; }else{ echo 0; }
 }


///////////////////////////////////////////

  require_once('paykassa_api.class.php');
  // the plug-in class to access the API, you can download it at the link

    $paykassa_api_id = $forapiid;
    $paykassa_api_password = $forapipass;
    $paykassa_merchant_id = $formarchid;
    $test = false;
    // False test mode - off, True - Enabled





if(isset($_POST['btrxinptjs']))
{
  $btrxinpt = mysqli_real_escape_string($db,$_POST['btrxinptjs']);
  $btrxadrsinpt = mysqli_real_escape_string($db,$_POST['btrxadrsinptjs']);
  $bsecpassinpt = mysqli_real_escape_string($db,$_POST['bsecpassinptjs']);
  
   $withfeetrx = $btrxinpt - $sumout_fee;
  
   $iflgbal = $vusrdataf['sumout'] / 100 * 5;
  if(!isset($_COOKIE['usrprofileb'])) 
 {  
if($btrxinpt > $iflgbal)
{
  echo 5;
}else{
if($vusrdataf['securitypass'] == $bsecpassinpt)
{
  if($vusrdataf['mining_status'] == 1 || $freesout == 0)
 {  
  if($vusrdataf['user_ban'] == 0)
 { 
  if($vfallstngf['withdrawoff'] == 0)
 {   $amount = $withfeetrx;
    $system = "tron";
    $currency = 'TRX';
    $wallet = $btrxadrsinpt;
    $comment = ' withdrawal TRX Promotion Account';
    $paid_commission = '';
    $tag = '';
    $real_fee = true; // supported - BTC, LTC, DOGE, DASH, BSV, BCH, ZEC, ETH
    $priority = "high"; // low - slowly, medium - medium, high - quickly

    $paykassa = new PayKassaAPI(
        $paykassa_api_id,       // ID api
        $paykassa_api_password, // password api
        $test
    );


    $system_id = [
        "tron" => 27, // supported currencies TRX    
    ];

    $res = $paykassa->api_payment(
        $paykassa_merchant_id,  // required parameter merchant id from which you want to make a withdrawal
        $system_id[$system],    // mandatory parameter, the id of the payment method
        $wallet,                // mandatory parameter, the number of wallet which sent the money
        (float)$amount,         // required parameter the payment amount, how much to send
        $currency,              // mandatory parameter, the currency of payment
        $comment,               // mandatory parameter, review the payment, you can pass a null
        $paid_commission,       // an optional parameter that who pays the fee for transfer, shop or client
        $tag,                   // optional, the tag for payment, you can pass empty
        $real_fee,              // deprecated parameter, always set to true
        $priority               // optional parameter(default is medium), is used to set
                                // priority inclusion in the unit along with a $real_fee === true
    );

    if ($res['error']) {        // $res['error'] - true if the error
        echo $res['message'];   // $res['message'] - the text of the error message
        //actions in case of an error
    } else {
   $setsumoutb = "UPDATE `userslog` SET sumout=sumout - '$btrxinpt',totalsumout=totalsumout + '$btrxinpt'  WHERE usrphone='$vusrlog'";
  
 $setsumoutbq = mysqli_query($db,$setsumoutb) or die('not sql'.mysqli_errno($db)) ;
 if($setsumoutbq)
       { echo 1; } else { echo 10; }
  setcookie('usrprofileb','usrsecured',time() + 84600,'/');
    }///// if success
   
 }else{
   /////// this is a request part
 $setsumoutb = "UPDATE `userslog` SET sumout=sumout - '$btrxinpt',totalsumout=totalsumout + '$btrxinpt'  WHERE usrphone='$vusrlog'";
 $setsumoutbq = mysqli_query($db,$setsumoutb) or die('not sql'.mysqli_errno($db)) ;

   ///// to insert into table    
 $setreqtbl = "INSERT INTO `req_withdrawl`(`from_user`, `req_withdraw`, `wallet`, `From_Account`,`basic_bal`,`promo_bal`,`total_out`,`total_ref`) VALUES ('$vusrlog','$withfeetrx','$btrxadrsinpt','basic','$vhvsumout','$vhvrefbns','$vhvtsumout','$vtotalref')";
  
 $setreqtblq = mysqli_query($db,$setreqtbl) or die('not sql'.mysqli_errno($db)) ;
  if($setreqtblq)
       { echo 2; } else { echo 10; }
   setcookie('usrprofileb','usrsecured',time() + 84600,'/');
   ///// here insert to request end
 } //// withdrawal on of end
    
    
    
    
 }else{
   echo 4;
 }
}else{
  echo 3;
} // end of promotion Account avtive
   }else{
     echo 0;
   } // end check secpass 
} //// end of if bal is larger then 5%
     }else{
       echo 6;
     } //// cooki
  } ///// btn js
?>


<?
if(isset($_POST['ptrxinptjs']))
{
  $ptrxinpt = mysqli_real_escape_string($db,$_POST['ptrxinptjs']);
  $ptrxadrsinpt = mysqli_real_escape_string($db,$_POST['ptrxadrsinptjs']);
  $psecpassinpt = mysqli_real_escape_string($db,$_POST['psecpassinptjs']);
  
   $withfeetrx = $ptrxinpt - $sumout_fee;
  
   $iflgbal = $vusrdataf['refbonus'] / 100 * 5;
  if(!isset($_COOKIE['usrprofilep'])) 
 {  
if($ptrxinpt > $iflgbal)
{
  echo 5;
}else{
if($vusrdataf['securitypass'] == $psecpassinpt)
{
  if($vusrdataf['team_status'] == 1 || $freesout == 0)
 {  
  if($vusrdataf['user_ban'] == 0)
 { 
  if($vfallstngf['withdrawoff'] == 0)
 {   $amount = $withfeetrx;
    $system = "tron";
    $currency = 'TRX';
    $wallet = $ptrxadrsinpt;
    $comment = ' withdrawal TRX Promotion Account';
    $paid_commission = '';
    $tag = '';
    $real_fee = true; // supported - BTC, LTC, DOGE, DASH, BSV, BCH, ZEC, ETH
    $priority = "high"; // low - slowly, medium - medium, high - quickly

    $paykassa = new PayKassaAPI(
        $paykassa_api_id,       // ID api
        $paykassa_api_password, // password api
        $test
    );


    $system_id = [
        "tron" => 27, // supported currencies TRX    
    ];

    $res = $paykassa->api_payment(
        $paykassa_merchant_id,  // required parameter merchant id from which you want to make a withdrawal
        $system_id[$system],    // mandatory parameter, the id of the payment method
        $wallet,                // mandatory parameter, the number of wallet which sent the money
        (float)$amount,         // required parameter the payment amount, how much to send
        $currency,              // mandatory parameter, the currency of payment
        $comment,               // mandatory parameter, review the payment, you can pass a null
        $paid_commission,       // an optional parameter that who pays the fee for transfer, shop or client
        $tag,                   // optional, the tag for payment, you can pass empty
        $real_fee,              // deprecated parameter, always set to true
        $priority               // optional parameter(default is medium), is used to set
                                // priority inclusion in the unit along with a $real_fee === true
    );

    if ($res['error']) {        // $res['error'] - true if the error
        echo $res['message'];   // $res['message'] - the text of the error message
        //actions in case of an error
    } else {
   $setsumoutp = "UPDATE `userslog` SET refbonus=refbonus - '$ptrxinpt',totalsumout=totalsumout + '$ptrxinpt'  WHERE usrphone='$vusrlog'";
  
 $setsumoutpq = mysqli_query($db,$setsumoutp) or die('not sql'.mysqli_errno($db)) ;
 if($setsumoutpq)
       { echo 1; } else { echo 10; }
  setcookie('usrprofilep','usrsecured',time() + 84600,'/');
    }///// if success
   
 }else{
   /////// this is a request part
 $setsumoutp = "UPDATE `userslog` SET refbonus=refbonus - '$ptrxinpt',totalsumout=totalsumout + '$ptrxinpt'  WHERE usrphone='$vusrlog'";
 $setsumoutpq = mysqli_query($db,$setsumoutp) or die('not sql'.mysqli_errno($db)) ;

   ///// to insert into table    
 $setreqtbl = "INSERT INTO `req_withdrawl`(`from_user`, `req_withdraw`, `wallet`, `From_Account`,`basic_bal`,`promo_bal`,`total_out`,`total_ref`) VALUES ('$vusrlog','$withfeetrx','$btrxadrsinpt','Promotion','$vhvsumout','$vhvrefbns','$vhvtsumout','$vtotalref')";
  
 $setreqtblq = mysqli_query($db,$setreqtbl) or die('not sql'.mysqli_errno($db)) ;
  if($setreqtblq)
       { echo 2; } else { echo 10; }
   setcookie('usrprofilep','usrsecured',time() + 84600,'/');
   ///// here insert to request end
 } //// withdrawal on of end
    
    
    
    
 }else{
   echo 4;
 }
}else{
  echo 3;
} // end of promotion Account avtive
   }else{
     echo 0;
   } // end check secpass 
} //// end of if bal is larger then 5%
     }else{
       echo 6;
     } //// cooki
  } ///// btn js
?>

