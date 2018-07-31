<?php
if(isset($_POST['submit'])) {
   $name =$_POST['name'];
   $subject =$_POST['subject'];
   $mailfrom =$_POST['mail'];
   $message =$_POST['message'];
   


$mailTo ="doriskwon@c-tms.com";
$headers = "from: ".$mailfrom;
$txt = "you have receuved an e-mail from ".$name.".＼n＼n".$message;

mail($mailTo, $subject,$txt,$headers );
header("Location: contact2.php?mailsend");
}


