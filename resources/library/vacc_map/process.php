<?php
/*****************************************
  The javascript for vaccine map
  - initMap
  - create Sidebar to display vaccine, advice & description
  - generate a layer to wrap the map
******************************************/

$to = "phanvinh0526@gmail.com";
$subject = "This is subject";

$message = "<b>This is HTML message.</b>";
$message .= "<h1>This is headline.</h1>";

$header = "From:quocvinh0526@gmail.com \r\n";
$header .= "Cc: \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
   echo "Message sent successfully...";
}else {
   echo "Message could not be sent...";
}