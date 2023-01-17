
<?
include '../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }



/*
if(isset($_POST['loginbtnbymail']))
{
  $loginmail = $_POST['loginmailnam'];
   setcookie('coklog',$loginmail,time() + 84600 ,'/');
  header('location:../home.php');
}
*/





if(isset($_POST['logoutbtn']))
{
  unset($_SESSION['adminses']);
  header('location:../index.php');
}
/////////////////////////////////
/**********************************/
$thistime = date('d/m/Y H:i:s a', time());
$cusrs = " SELECT COUNT(uid) AS totalusrs FROM `userslog`";
$cusrsq = mysqli_query($db,$cusrs);
$cusrsv = mysqli_fetch_assoc($cusrsq);
///// end of count total users

$tsums = " SELECT SUM(sum) AS tusrsumbal FROM userslog";
$tsumsq = mysqli_query($db,$tsums);
$tsumsv = mysqli_fetch_assoc($tsumsq);
///// start count total sums
$tusrsumout = "SELECT SUM(totalsumout) AS tusrsmout FROM userslog";
$tusrsumoutq=mysqli_query($db,$tusrsumout);
$tumoutsv=mysqli_fetch_assoc($tusrsumoutq);
///// start count total Withdraw

$tusringame =$cusrsv['totalusrs'];
$tsumingame = $tsumsv['tusrsumbal'];
 $tusoutgame = $tumoutsv['tusrsmout'];
$totalprof = $tsumingame - $tusoutgame;








/*
$chkstng = "SELECT * FROM `allstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
///////////////
*/

///////////////
$chkstng = "SELECT * FROM `ghstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
///////////////


?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title> Admin Panel </title>
  </head>
  <body>


<style>
.navadscolor{
  color:navy;background: rgb(227,190,254); letter-spacing: :1px; font-style: bold;
}
.navbitcoin{
  animation: navbitcoin 4s infinite;
}
@keyframes navbitcoin
{
  10%{
   opacity: 0.2; margin-left: 1em;
  }
  80%{
   opacity: 1; margin-left: 0em;
  }
}

  /* for table golden star and silver */
      
      
 table.edTable { width: 100%; font: 17px calibri; } table, table.edTable th, table.edTable td { border: solid px #9b58b5; border-collapse: collapse; padding: 3px; text-align: center; } table.edTable td { background-color: #5c0e80; color: #ffffff; font-size: 14px; } table.edTable th { background-color : #b02875; color: #ffffff; } tr:hover td { background-color:navy; color: #dddddd; }
 
      
/*  own */
.silTable{
  width: 100%;

  
}
.sthead{
  background: silver;
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.sthead th{
  color:green;
  font-size: 1em;
}
.gthead{
  background:rgb(203,149,6);
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.gthead th{
  color:indigo;
  font-size: 1em;
}
.strowdata td{
  font-size: 0.8em;
  
}
.strowdata:hover { letter-spacing:1px; }
.strowdata:hover td i{ color:#05cecd; }
.strowdata td i{
  width: 1em;
  color:indigo;
}
/* end of golden star table */
#listtable{
    width: 100%;
    height: 80%;
    overflow-x: auto; 
    overflow-y: auto; 
    height: 82em;
 }      

</style>



<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
     <i class="fas fa-user-tie text-info"> </i> 
      <? echo $_SESSION['adminses']; ?>
    </a>
<button class="float-end bg-dark navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>







<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   <i class="fas fa-user-tie text-info"> </i> 
    <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel"><? echo $_SESSION['adminses']; ?></h5>
    <button type="button" class=" btn-close btn-close-white text-light" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
  </div>
  <div class="offcanvas-body">
    <div class="text-light">
      TRX / Media systems
    </div>
    <hr class="bg-light">
    <div class="dropdown mt-3">
      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        <i class="fa fa-recycle text-white"> </i> Reset Projects
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" id="fulresetbtn"> Full game with Withdraw details + others Balances </a></li>
        <li><a class="dropdown-item" id="allpkgresetbtn"> Reset previous Bonus if Users not login to collect Bonus</a></li>
       <u class="text-muted"> action on All users accounts <i class="fa fa-warning text-danger"> </i> <b class="text-danger"> Carefully </b></u>
      </ul>
    </div>
   <br>
   <br>
   <br>
   <br>
   <br>
    
<div class="d-grid gap-2">
  <button class="btn btn-success navbtns navdboardbtn" type="button"><i class="fa fa-dashboard text-white"> </i> Dashboard</button>
  <button class="btn btn-success navbtns advacstngbtn" type="button"><i class="fa fa-gear text-white navbitcoin"> </i> Advance </button>
  <button class="btn btn-success navbtns navusrslistbtn" type="button"><i class="fa fa-users text-white"> </i> Users Accounts</button>
  <button class="btn btn-success navbtns navreqwithdrawbtn" type="button"><i class="fad fa-wallet text-warning"> </i> Withdrawals Req </button>
  <button class="btn btn-success navbtns navblogbtn" type="button"><i class="fa fa-bell text-white"> </i> Alert Page  </button>
</div>


<style>
 #google_translate_element select{
 background:#f6edfd;
 color:#383ffa;
 border: none;
 font-size :1rem;
 border-radius:3px;
 }
 .goog-logo-link{
   display:none!important;
  }
 .goog-te-gadget{
 color:transparent!important;
 } 
 .goog-te-banner-frame{
 display:none !important;
 }
 
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}

/**********************/
#google_translate_element select{
   background-color:#f6edfd;
   color:#383ffa;
   border: none;
   border-radius:3px;

 }
/**********************/
 .goog-logo-link{
    display:none !important;
   }
 .goog-te-gadget{
  color:transparent!important;
  }
 .goog-te-gadget-icon{
  background:none !important;
  }
  

/**********************/
/**********************/
/**********************
#google_translate_element { height:10px !important; width: 15px !important; overflow: hidden !important; }
/**********************/
/**********************/
/**********************/
  .goog-te-banner-frame{
 display:none !important;
 }
  /**********************/
/**********************/
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}
</style>






<script type="text/javascript">// <![CDATA[
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: "ru,en,ur,ar,tr,hi"}, 'google_translate_element');
}
// ]]></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>



 <div><i class="fa fa-globe"></i></div>  <div id="google_translate_element"></div>

  <form method="post">
 <div class="d-grid gap-2" style="position:absolute; bottom:0;width:90%;text-align:center;">
  <button type="submit" name="logoutbtn" class="btn btn-danger"> Logout  <i class="fa fa-arrow-right text-white"></i> </button>
   </div>
</form>


  </div>
</div>
   <br>
   <br>
  <!----------------------------------------------------------------------------------------------------- start js divs ----------------------------------------------------------------------------------------------------->
  
  
<div id="errors" class="alert notifycross" style="display:none;background:#fdb0b0f0; color:red; border-radius:20px; border:1px solid red; box-shadow:2px 2px 14px 2px black;font-size:2em; position:fixed;z-index:100;top:500px;" role="alert">
   </div>
 
 <!---------------------------------->
 <!---------------------------------->

 <div id="successrs" class="alert alert-success notifycross" style="display:none;color:green;border-radius:20px; border:1px solid green;font-size:2em; box-shadow:2px 2px 14px 2px black;position:fixed;z-index:100;top:350px;" role="alert">
</div>
 <!---------------------------------->
  
  
  
  <center>
   <div id="dashboarddiv">
     
    <div style="display:flex;flex-direction:row; width:90%">
     
      <div class="bg-primary p-2" style="width:50%;box-shadow:2px 2px 20px black;">
        <u class="text-white"> <i class="fa fa-history text-warning"> </i> Login Time</u>
        <hr class="p-1">
         <h3 class="text-white"> <? echo $thistime; ?></h3>
    <p class="text-warning"> <? echo $_SERVER['REMOTE_ADDR']; ?></p>
       </div>
       
      <div class="bg-warning p-2" style="width:50%;">
        <u class="text-white"> <i class="fas fa-sack-dollar text-primary">  </i> Balance Status </u>
        <hr class="p-1">
         <h3 class="text-white"> <? echo $totalprof; ?> : TRX<i class="fa fa-money text-primary"> </i></h3>
       <p class="text-muted"> remaining from total Invest and withdrawals </p>
       </div>
     </div>
     
    <br>
    <br>
    <br>
   <div class="container">
      <!-- single canvas node to render the chart -->
      <canvas
        id="myChart"
        width="700"
        height="700"
        aria-label="chart"
        role="img"
      ></canvas>
    </div>    
    
    
    
    
    
    
    
    
    
    
    
    
<div style="width:16rem;border-radius:0 30px 30x 0; box-shadow:1px 1px 10px navy;border-left:15px solid navy;background;silver;" class="float-start">
  <button class="advacstngbtn" style="color:orange;font-size:1.7rem; text-shadow:1px 1px 2px black;"> Advanced <i class="fa fa-gear"> </i> </button>
</div>
    
<center>
 <h1 class=" text-success" style="border:1px solid green;box-shadow:1px 1px 15px black; border-radius:10px; background:#c0fcadb2; text-align:center;"> Site Settings </h1> 
</center>

 <div class="" style="background:#e1f2e0;"><center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">1. Contact Links</h1>
    <div id="vlinks"> </div><hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
     
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">2. Update Contact Links <i class="float-end fa fa-gear text-primary"> </i></h1>
    
  <input type="text" placeholder=" Telegram Link" id="tglink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">

  <input type="text" placeholder=" Gmail " id="gmaillink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder="App link " id="phone1" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<br>
<button class="btn btn-primary setlinksbtn" style="letter-spacing:4px;">Update Links</button>
  <hr>
     </center>
   </div>
   
   
   
   

<div class="" style="background:#e1f2e0;">
     <center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">3. This Time All Auto Withdrawals <i class="float-end fa fa-gear text-primary"> </i></h1>
  <p class="text-muted"> When Off <i class="fad fa-wallet"> </i> then request for Withdrawals manually by admin </p>
    <div style="font-size:2em;">
    
   <select id="wbalidonofv" style="background:navy;color:lime;" onchange="allsmoutonoff(this.options[this.selectedIndex].value)">
      <option value="0"> ON </option>
      <option value="1"> OFF </option>
    </select>
    </div>
<hr>
     </center>
   </div>
   
   </div>
</center>





<!-----1.2.------------------------------------------------------------------------------------------------>

<!------ start of advance settings divs -------->

<div class="advancstnddiv" style="width:100%;display:none;">
  <center>
<h2 style="color:purple;font-size:2rem">
  Advance Settings </h2>
  </center>
  <br>
  
  
<div class="" style="background:#e1f2e0;">
<center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">4. Admin Control <i class="float-end fa fa-gear text-primary"> </i></h1>
 
  <input type="text" placeholder=" Admin Name" id="admnname" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder=" Admin Password" id="admnpass" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary admnpassbtn" style="letter-spacing:4px;">Update Control</button>
     </center>
     <hr>
   </div>
  
  
  

<div class="" style="background:#e1f2e0;">
     <center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">5.Free Withdrawals <i class="float-end fa fa-gear text-primary"> </i></h1>
  <p class="text-muted"> For Starting case <i class="fad fa-wallet"> </i> When On or OFF its shown below when status is ON then every one can free Withdrawals as a limit of 5% from mining every day </p>
    <div style="font-size:2em;">
    
   <select id="freewbalidonofv" style="background:navy;color:lime;" onchange="freewbalonoff(this.options[this.selectedIndex].value)">
      <option value="0"> ON </option>
      <option value="1"> OFF </option>
    </select>
    </div>
<hr>
     </center>
   </div>
  
  
  
  
  
  
  
  
  
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">6. Fake(Bot) Profite and members Updates<i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> Optional Statics <i class="fa fa-users"> </i> Its Optional if added values in Profite or members then its added with real values to show fake statics (! important) for example if real Profite is 1000 trx and you added value +500 trx its 1500trx shown to every users   </p>
  
  <center>
    <div><b style="color:green;"> Real </b> / <b style="color:orange;"> added </b>/ <b style="color:#ff3100;"> Total </b></div>
  </center>
 <div id="vstaticdiv">

</div>

  
  <br>

  <input type="text" placeholder="Fake Profite Value" id="profitinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder="Membership Value" id="membrshipinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary staticbtn" style="letter-spacing:4px;">Update <i class="fa fa-statics text-warning"> </i> </button>
<hr>
     </center>
   </div>
  
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">7. Update For Withdrawal Fees <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> In TRX <i class="fad fa-wallet"> </i> Fees cut before withdrawals in Trx (such as Network Fees ) </p>
  <p class="text-primary">Already Set Fees in TRX : <b class="text-danger" id="soutfeesdiv"> 1 </b> <i class="fa fa-database text-success"> </i> </p>
  <input type="text" placeholder="withdrawal Fees in TRX" id="soutfeesinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary soutfeesbtn" style="letter-spacing:4px;">Update TRX Fees <i class="fa fa-database text-warning"> </i> </button>
<hr>
     </center>
   </div>
   
   
   
   
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">8. Update For Min Invest <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> For Invest <i class="fad fa-wallet"> </i> if users invest min from this already set price then he can't active Accounts </p>
  <p class="text-primary">Already Set Min-invest TRX : <b class="text-danger" id="mininvesttrxdiv"> 5 </b> <i class="fa fa-database text-success"> </i> </p>
  <input type="text" placeholder="Min Invest TRX" id="mininvesttrxinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary mininvesttrxbtn" style="letter-spacing:4px;">Update TRX <i class="fa fa-database text-warning"> </i> </button>
<hr>
     </center>
   </div>
   
   
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">9. Update For Registration Bonus <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted">  For New Users <i class="fa fa-users"> </i>  How Much Want to Give A bonus For Free mining</p>
  <p class="text-primary">Already Set TRX : <b class="text-danger" id="regbonustrxdiv"> 25000 </b> <i class="fa fa-database text-success"> </i> </p>
  <input type="text" placeholder="Registration Bonus" id="regbonustrxinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary regbonustrxbtn" style="letter-spacing:4px;">Update TRX <i class="fa fa-database text-warning"> </i> </button>
<hr>
     </center>
   </div>
  
  
  
  
  
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">10. Update For Free Mining Speed <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> For New Users <i class="fa fa-users"> </i>Who not invest Can Free mining with speed </p>
  <p class="text-primary">Already Set Free Mining speeds : <b class="text-danger" id="minespeeddiv"> 5 </b> % Daily <i class="fa fa-history text-success"> </i> </p>
  <input type="text" placeholder=" Mining Speeds" id="minespeedinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary minespeedbtn" style="letter-spacing:4px;">Update Mining speeds <i class="fa fa-history text-warning"> </i> </button>
<hr>
     </center>
   </div>
  
  
  
  
  
  

   

   
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">11. Updates For show any notification <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> On home page <i class="fa fa-bell"> </i> about any things </p>
  <p class="text-primary">Already Set : <b class="text-danger" id="vbelltxtdiv">  maarkhoor5@gmail.com  </b> <i class="fa fa-bell text-primary"> </i> </p>
  <textarea type="text" placeholder="Something For Notification" id="vbelltxtinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:2rem;">
  </textarea><br>
<button class="btn btn-primary belltxtbtn" style="letter-spacing:4px;">Update <i class="fa fa-bell text-warning"> </i> </button>
<hr>
     </center>
   </div>
   











</div>


<!-----2.------------------------------------------------------------------------------------------------>
   
<!-----3.------------------------------------------------------------------------------------------------>

<!-----4.------------------------------------------------------------------------------------------------>
<!----end of setting div--->
<div id="usrslistdiv" style="display:none;">
  

  <center><h3 class="" style="color:indigo;"> lists Of  Users Accounts <u class="text-success"> Amounts In <i class="fad fa-wallet"> </i> <b style="color:pink; text-shadow:1px 1px 2px black;"> TRX </b> </u></h3>
 
</center>
  <div style="width:35%; margin-right:5px;">
   <input type="search" style="border:none;border-bottom:4px solid orange; width:80%;outline:none; font-size:1.2rem;letter-spacing:2px;" class="serchusrinpt"> <button style="color:orange; font-size:1.2rem;text-shadow:1px 1px 2px black;" class="btn fa fa-search serchusrbtn"> </button>
  </div>

 <center>
<div id="listtable">
   <!-- start here for Silver stars users -->
 <table class="silTable" id="sTab" style="width:180%;">
<tbody class="vbandusrs">
  <tr class="sthead">
	<th>id</th>
	<th> Phone No</th>
	<th> Accounts </th>
	<th> Notification </th>
	<th> Basic Account </th>
	<th> Promotion Account </th>
	<th>Total Invest</th>
	<th> have withdrawal </th>
	<th> total withdrawal</th>
	<th>reff Earning</th>
	<th>reffer by ID</th>
	<th>Total reff</th>
	<th>Ip Address</th>
  </tr>
  </tbody>
  
  <tbody class="tablesvserch"> </tbody>
  <tbody class="tablesvall"> </tbody>
  
  
</table> 
</div>
  
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px brown; background:silver;">

<p class="text-primary"> Ban only Withdrawals off of specific person </p>
<b class="text-danger"> Can view fully details of any users By Login </b>
<b class="text-success"> And need then send Notification </b>

  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px lime; background:white;">


  </center>
</div>
<!------ end of list div1 ------->

<!-----5.------------------------------------------------------------------------------------------------>















<!-----5.------------------------------------------------------------------------------------------------>
<!------ start of request withdraw tables -------->
<div id="reqwithdrawdiv" style="display:none;">

<h4 class="text-danger"> TRON  Money Withdrawals Request Table</h4>
<div id="listtable">
 <table class="silTable" id="sTab" style="width:180%;">
<tbody class="vbandusrs">
  <tr class="sthead">
	<th>id_No</th>
	<th>From_User</th>
	<th>request_withdrawal</th>
	<th>TO_Wallet</th>
	<th>From_Account</th>
	<th>Send_?</th>
	<th>Status_?</th>
	<th>Notification</th>
	<th> Delete_?</th>
	<th>req_Time</th>
	<th><u style="font-size:0.4rem; color:red;">before_req</u> Basic_Balance </th>
	<th style="display:inline;"><u style="font-size:0.4rem;color:red;"> before_req</u> Prom_Balance </th>
	<th>Total_Withdrawals</th>
	<th>Total_Reffers</th>
  </tr>
  </tbody>
  
  <tbody class="vreqwithdrawal"> </tbody>
</table>
</div>
<center>
<hr class="bg-danger p-1">
    <h2 class="fa fa-info-circle text-denger" style="color:red"> When Payment send To users Then Status Paid changed by button </h2>
    <p class="text-success">1. when auto Withdrawals off then users can request a Withdrawals Only</p>
    <p class="text-danger">2. Without status paid can't be deleted  </p>
</center>
</div>
<!------ end of request of withdraw table div -------->
<!-----7.------------------------------------------------------------------------------------------------>
<div id="blogdivhide" style="display:none;">
<B class="float-end" style="font-size:2rem;"> <i class="fa fa-users"> </i> Of All users </b>
<h2 class="text-danger"> Notification Management </h2>
<p style="color:silver;"> Thats you sends To users </p>
<hr>
    
<div id="vblogdiv">
</div>




  
</div>
</div>
   
   
   
   
   
   
   
   
  <div class="vbelltodiv" style="display:none;width:60%;margin-left:20%;border-radius:20px;border:none;border-bottom:4px solid orange;box-shadow: 1px 1px 100px black;background:rgba(245,245,245,0.7);position:fixed;top:200px;z-index:1100;">
   <center><h1 style="color:#ff6600;text-shadow:1px 1px 1px black;" class="fa fa-bell"> Send Notification To Users </h1></center>
  <button class="btn btn-danger fa fa-close float-end mb-2 vbelltoclsbtn">
  </button>
 <div style="margin-left:2rem;"> To : <b style="color:lime; font-size:1.6rem; text-shadow:1px 1px 2px black; margin-left:1rem; letter-spacing:3px;" class="fa fa-user vusrbynodata"> 1234 </b> </div>
 <input type="hidden" class="vusrbynodinpt" value="">
 <textarea class="sendbeloftblsinpt" style="text-align:center; width:90%; margin-left:5%; color:orange;height:10rem;outline:none; border:none;border-left:10px solid orange;border-right:10px solid orange;" placeholder="Write Here"></textarea>
  <center>
  <button class="btn btn-warning sendbeloftblsbtn" style="letter-spacing:4px;text-shadow:1px 1px 2px silver;margin-top:1rem;">
    Send 
  </button>
  </center>
  <br>
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="js/chart.js"></script>

  <script>
  
  $(document).on('click','.vbelltobtn', function(){
    $('.vbelltodiv').slideToggle();
  });
  $(document).on('click','.vbelltoclsbtn', function(){
    $('.vbelltodiv').hide(10);
  });
 /////////
 $(document).on('click','.vbelltobtn', function(){
 var vbelliddatajs = $(this).data('usrbyno');
 $('.vusrbynodata').html(vbelliddatajs);
 $('.vusrbynodinpt').val(vbelliddatajs);
 })
  
  
 ///////// get data 
function sociallinks(){
    $.post(
      "byajax.php",
      {sociallinkjs:'jxdjjdk'},
      function(socialvf){
      $("#vlinks").html(socialvf);
      }
    ); // end post
}    
//////////////////
function vusrstblf(){
    $.post(
      "byajax.php",
      {vusrstbljs:'icidu'},
      function(vusrstblfj){
      $(".tablesvall").html(vusrstblfj);
      }
    ); // end post
}    
//////////////////
//////////////////
function voferdatef(){
    $.post(
      "byajax.php",
      {voferdatjs:'jfjrdj'},
      function(voferdatf){
      $("#voferdate").html(voferdatf);
      }
    ); // end post
}    
//////////////////
//////////////////
function contactdivff(){
    $.post(
      "byajax.php",
      {contactdivjs:'dijdjd'},
      function(contactdivf){
      $("#contactdiv").html(contactdivf);
      }
    ); // end post
}    
//////////////////
//////////////////
//////////////////
function mininvesttrxdivff(){
    $.post(
      "byajax.php",
      {mininvesttrxdivjs:'dijjsdjd'},
      function(mininvesttrxdivf){
      $("#mininvesttrxdiv").html(mininvesttrxdivf);
      }
    ); // end post
}    
//////////////////
//////////////////
function vusrsreqoutbl(){
    $.post(
      "byajax.php",
      {vusrsreqj:'bdhdh'},
      function(vusrsreqf){
     $(".vreqwithdrawal").html(vusrsreqf);
      }
    ); // end post
}    

 ///////// get data 
function minespeeddivff(){
    $.post(
      "byajax.php",
      {minespeeddivjs:'hdjdjfufu'},
      function(minespeeddivjs){
  $("#minespeeddiv").html(minespeeddivjs);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function staticsvff(){
    $.post(
      "byajax.php",
      {staticsvjs:'djjdjdjsj'},
      function(staticsvjs){
  $("#vstaticdiv").html(staticsvjs);
      }
    ); // end post
}    
//////////////////
//////////////////
 ///////// get data 
function vbelltxtdivff(){
    $.post(
      "byajax.php",
      {vbelltxtdivfjs:'peoenek'},
      function(vbelltxtdivf){
  $("#vbelltxtdiv").html(vbelltxtdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function regbonustrxdivff(){
    $.post(
      "byajax.php",
      {regbonustrxdivjs:'aiksjeiie'},
      function(regbonustrxdivf){
  $("#regbonustrxdiv").html(regbonustrxdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vminsumoutdivff(){
    $.post(
      "byajax.php",
      {vminsumoutdivffjs:'owowkekkw'},
      function(vminsumoutdivf){
  $("#vminsumoutdiv").html(vminsumoutdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vsitenamedivff(){
    $.post(
      "byajax.php",
      {vsitenamedivffj:'oqoeoie'},
      function(vsitenamedivf){
  $("#vsitenamediv").html(vsitenamedivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vytlinkdivff(){
    $.post(
      "byajax.php",
      {vytlinkdivffj:'pqmswj'},
      function(vytlinkdivf){
  $("#vytlinkdiv").html(vytlinkdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vblogdivff(){
    $.post(
      "byajax.php",
      {vblogdivfjs:'qoow'},
      function(vblogdivf){
  $("#vblogdiv").html(vblogdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function soutfeesdivf(){
    $.post(
      "byajax.php",
      {soutfeesdivjs:'qllwlka'},
      function(soutfeesdivf){
  $("#soutfeesdiv").html(soutfeesdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vfreewbalff(){
    $.post(
      "byajax.php",
      {vfreewbalonofjs:'djjdje'},
      function(vfwbalonof){
      var onofwbal = vfwbalonof;
  if(vfwbalonof==0){
$("#freewbalidonofv option[value='0']").prop('selected',true);}else{
$("#freewbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
 function freewbalonoff(value)
  {   var freewvalonoff = value;
      $.post(
      "byajax.php",
      {freewvaluejs:freewvalonoff},
      function(freesoutonof){
       if(freesoutonof == 1){
        $("#successrs").fadeIn();
          $("#successrs").html('√  successfully updated'); 
            vfreewbalonoff();
        }else if(freesoutonof == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  }
/////////////////////////////////////
 ///////// get data 
function vwbalonoff(){
    $.post(
      "byajax.php",
      {vwbalonofjs:'djjdje'},
      function(vwbalonof){
      var onofwbal = vwbalonof;

  if(vwbalonof==0){
$("#wbalidonofv option[value='0']").prop('selected',true);}else{
$("#wbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
 function allsmoutonoff(value)
  {   var valonoff = value;
      $.post(
      "byajax.php",
      {valuejs:valonoff},
      function(smoutonof){
       if(smoutonof == 1){
        $("#successrs").fadeIn();
          $("#successrs").html('√  successfully updated'); 
            vwbalonoff();
        }else if(smoutonof == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  }
/////////////////////////////////////
/////////////start for links update
//////////////////////////////
 $(document).on('click','.setlinksbtn',function(){
  var tglink = $('#tglink').val();
   var gmalink = $('#gmaillink').val();
   var phone1 = $('#phone1').val();
      $.post(
      "byajax.php",
      {tglinkjs:tglink,gmalinkjs:gmalink,phone1js:phone1},
       function(updatlnks){
       if(updatlnks == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Update ');
      
      $('#gmaillink').val("");
      $('#tglink').val("");
      $('#phone1').val("");
       
        sociallinks();
        }else if(updatlnks == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.mininvesttrxbtn',function(){
  var mininvesttrxinpt = $('#mininvesttrxinpt').val();
      $.post(
      "byajax.php",
    {mininvesttrxinptjs:mininvesttrxinpt},
       function(mininvesttrxinptf){
       if(mininvesttrxinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#mininvesttrxinpt').val("");
        mininvesttrxdivff();
       }else if(mininvesttrxinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
//////////////////////////////
 $(document).on('click','.minespeedbtn',function(){
  var minespeedinpt = $('#minespeedinpt').val();
      $.post(
      "byajax.php",
    {minespeedinptjs:minespeedinpt},
       function(minespeedinptf){
       if(minespeedinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#minespeedinpt').val("");
        minespeeddivff();
       }else if(minespeedinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.soutfeesbtn',function(){
  var soutfeesinpt = $('#soutfeesinpt').val();
      $.post(
      "byajax.php",
    {soutfeesinptjs:soutfeesinpt},
       function(soutfeesinptf){
       if(soutfeesinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#minespeedinpt').val("");
        soutfeesdivf();
       }else if(soutfeesinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.sendbeloftblsbtn',function(){
  var sendbeloftblsinpt = $('.sendbeloftblsinpt').val();
  var vusrbynodinpt = $('.vusrbynodinpt').val();
      $.post(
      "byajax.php",
  {sendbeloftblsinptjs:sendbeloftblsinpt,vusrbynodinptjs:vusrbynodinpt},
       function(sendbeloftblsinptf){
       if(sendbeloftblsinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Send Your Message in Notification ');
       $('.sendbeloftblsinpt').val("");
        vbysurtobelltblsdivff();
       }else if(sendbeloftblsinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.staticbtn',function(){
  var profitinpt = $('#profitinpt').val();
  var membrshipinpt = $('#membrshipinpt').val();
      $.post(
      "byajax.php",
    {profitinptjs:profitinpt,membrshipinptjs:membrshipinpt},
       function(profitinptf){
       if(profitinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#winrateinpt').val("");
        staticsvff();
       }else if(profitinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.nextdrawbtn',function(){
  var nextdrawinpt = $('#nextdrawinpt').val();
      $.post(
      "byajax.php",
    {nextdrawinptjs:nextdrawinpt},
       function(nextdrawinptf){
       if(nextdrawinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#winrateinpt').val("");
        nextdrawff();
       }else if(nextdrawinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.serchusrbtn',function(){
  var serchusrinpt = $('.serchusrinpt').val();
      $.post(
      "byajax.php",
    {serchusrinptjs:serchusrinpt},
       function(serchusrinptf){
       $('.tablesvserch').html(serchusrinptf);    
       }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.regbonustrxbtn',function(){
  var regbonustrxinpt = $('#regbonustrxinpt').val();
      $.post(
      "byajax.php",
    {regbonustrxinptjs:regbonustrxinpt},
       function(regbonustrxinptf){
       if(regbonustrxinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#setoferdays').val("");
        regbonustrxdivff();
       }else if(regbonustrxinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.admnpassbtn',function(){
  var admnname = $('#admnname').val();
  var admnpass = $('#admnpass').val();
      $.post(
      "byajax.php",
    {adminamjs:admnname, adminpassjs:admnpass},
       function(admnsetsf){
       if(admnsetsf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       }else if(admnsetsf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// end page1
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmail1btn',function(){
   var mailto = $('#mailto').val();
   var sbjctmail = $('#sbjctmail').val();
   var msgmail = $('#msgmail').val();
      $.post(
      "byajax.php",
      {mailtoj:mailto,sbjctmailj:sbjctmail,msgmailj:msgmail},
       function(sndmail1btnf){
       if(sndmail1btnf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ mail send successfully to this ' + mailto);
     }else if(sndmail1btnf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Mail not send try again');
      }  }); // end post
  })
///////////////////////////////
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmailallbtn',function(){
   var sbjctmail = $('#sbjctmail1').val();
   var msgmail = $('#msgmail1').val();
      $.post(
      "byajax.php",
      {sbjctmailall:sbjctmail,msgmailall:msgmail},
       function(sndmailallf){
       if(sndmailallf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ mail send successfully');
     }else if(sndmailallf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Mail not send try again');
      }  }); // end post
  })
///////////////////////////////
/////////////single person mail ///////////////
 $(document).on('click','#allpkgresetbtn',function(){

      $.post(
      "byajax.php",
      {allpkgresetj:'ueuejfj'},
       function(allpkgrstf){
       if(allpkgrstf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Removed All packeges Of Users');
     }else if(allpkgrstf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× try again');
      }  }); // end post
  })
///////////////////////////////
/////////////single person mail ///////////////
 $(document).on('click','#fulresetbtn',function(){
      $.post(
      "byajax.php",
      {fulresetjs:'dhueuw8'},
       function(fulrstgamf){
       if(fulrstgamf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Reset All user details but hidden details you can see');
     }else if(fulrstgamf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× try again');
      }  }); // end post
  })

 
$(document).on('click','.slctbanjs',function()
{
  var usrbanval = $(this).data("usrbanval");
  var usrtblid = $(this).data("usrtblid");

 $.post(
      "byajax.php",
      {usrbanvaljs:usrbanval,usrtblidjs:usrtblid},
       function(usrbanf){
       if(usrbanf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vusrstblf();
     }else if(usrbanf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.belltxtbtn',function()
{
  var vbelltxtinpt = $('#vbelltxtinpt').val();

 $.post(
      "byajax.php",
      {vbelltxtinptjs:vbelltxtinpt},
       function(vbelltxtinptf){
       if(vbelltxtinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#vbelltxtinpt').val("");
         vbelltxtdivff();
     }else if(vbelltxtinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
///////////////////////////////
 
$(document).on('click','.reqchangbtn',function()
{
  var reqid = $(this).data("reqid");
  var reqstatus = $(this).data("reqstatus");

 $.post(
      "byajax.php",
      {reqidjs:reqid,reqstatusjs:reqstatus},
       function(reqchangf){
       if(reqchangf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vusrsreqoutbl();
     }else if(reqchangf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
///////////////////////////////
 
$(document).on('click','.delmsgsbydtacls',function()
{
  var delmsgsid = $(this).data("delmsgsid");

 $.post(
      "byajax.php",
      {delmsgsidjs:delmsgsid},
       function(delmsgsidf){
       if(delmsgsidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         contactdivff();
     }else if(delmsgsidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.delpostidbtn',function()
{
var delpostid = $(this).data("delpostid");
 $.post(
      "byajax.php",
      {delpostidjs:delpostid},
       function(delpostidf){
       if(delpostidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         vblogdivff();
     }else if(delpostidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 
})
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.delreqsoutbtn',function()
{
var delreqsoutbyid = $(this).data("delreqsoutbyid");
var delreqstatus = $(this).data("delreqstatus");
 $.post(
      "byajax.php",
      {delreqsoutbyidjs:delreqsoutbyid,delreqstatusjs:delreqstatus},
       function(delreqsoutbyidf){
       if(delreqsoutbyidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         vusrsreqoutbl();
     }else if(delreqsoutbyidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
     }else if(delreqsoutbyidf == 2){
       $('#errors').fadeIn();
       $("#errors").html("× status Not Paid Can't be deleted");
      }  }); // 
})
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
/////////////////////////////////
/////////////////////////////////
$(document).on('click','.navbtns',function(){
$(this).siblings().removeClass('navadscolor');
$(this).addClass('navadscolor');

});
//////////////////////////////////
   /////////////////////////////////////
  $(document).on('click','.notifycross',function(){
      $('#errors').hide(100);
      $('#successrs').hide(100);
    })
//////////////////////////////////
/////////////////////////////////////////
 
/////////////////////////////////////////
  $(document).on('click','.advacstngbtn', function(){
  $('.advancstnddiv').show();
  $('#dashboarddiv').hide();
  $('#presalediv').hide();
  $('#usrslistdiv').hide();
  $('#reqwithdrawdiv').hide();
  $('#blogdivhide').hide();
  vfreewbalff();
  soutfeesdivf();
});
/////////
  $(document).on('click','.navdboardbtn', function(){
    $('#dashboarddiv').show();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navmailbtn', function(){
    $('#dashboarddiv').hide();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navpresbtn', function(){
    $('#presalediv').show();
    $('#dashboarddiv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navusrslistbtn', function(){
    $('#presalediv').hide();
    $('#usrslistdiv').show();
    $('#dashboarddiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navreqwithdrawbtn', function(){
    $('#presalediv').hide();
    $('#reqwithdrawdiv').show();
    $('#usrslistdiv').hide();
    $('#dashboarddiv').hide();
    $('.advancstnddiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navblogbtn', function(){
    $('#presalediv').hide();
    $('#blogdivhide').show();
    $('#reqwithdrawdiv').hide();
    $('#usrslistdiv').hide();
    $('#dashboarddiv').hide();
    $('.advancstnddiv').hide();
  }) 
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//// chart 
var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {

  type: "bar",
  data: {
    // Data Labels
    labels: ["Total Users", "Total Sum", "Total Sumout"],

    datasets: [
      // Data Set 1
      {
        //  Chart Label
        label: "performance",

        // Actual Data
        data: [<? echo $tusringame ?> , <? echo $tsumingame ?>, <? echo $tusoutgame ?>],

        // Background Color
        backgroundColor: [
        "rgba(54, 162, 235, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        ],

        // Border Color
        borderColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(255, 99, 132, 1)",
           ],

        // Border Width
        borderWidth: 1,
      },

    ],
  },

  options: {
 
    responsive: false,

    layout: {
      padding: {
        left: 50,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },

    tooltips: {
      enabled: true,
      backgroundColor: "black", // 
      titleFontFamily: "Comic Sans MS",
      titleFontSize: 30, // Set Tooltip Font Size
      titleFontStyle: "bold italic",
      titleFontColor: "yellow",
      titleAlign: "center",
      titleSpacing: 3,
      titleMarginBottom: 50,
      bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 20,
      bodyFontStyle: "italic",
      bodyFontColor: "silver",
      bodyAlign: "center",
      bodySpacing: 3,
    },

    // Custom Chart Title
    title: {
      display: true,
      text: "Project Statics With TRX",
      position: "bottom",
      fontSize: 25,
      fontFamily: "Comic Sans MS",
      fontColor: "green",
      fontStyle: "bold italic",
      padding: 20,
      lineHeight: 5,
    },

    // Legends Configuration
    legend: {
      display: true,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "navy",
        fontSize: 16,
        boxWidth: 20,
      },
    },

    animation: {
      duration: 7000,
      easing: "easeInOutBounce",
    },
  },
});
//////////////////////////////////
window.onload = sociallinks();
window.onload = vwbalonoff();
window.onload = vusrstblf();
window.onload = vusrsreqoutbl();
window.onload = contactdivff();
window.onload = vblogdivff();
window.onload = minespeeddivff();
window.onload = staticsvff();
window.onload = vbelltxtdivff();
window.onload = regbonustrxdivff();
window.onload = vbysurtobelltblsdivff();
window.onload = mininvesttrxdivff();
window.onload = vfreewbalff();
//window.onload = vminsumoutdivff();




  </script>
    
    
    
    
  </body>
</html>

