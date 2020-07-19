<?php
try {
  
  $db=new mysqli("localhost","root","","kaustubh1" );
} catch (Exception $e) {
  echo $exc->getTraceAsString();
}
if (isset($_POST['message']) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject'])) {
  
  $message=$_POST['message'];
  $name=$_POST['name'];

  $mail=$_POST['mail'];
  $subject=$_POST['subject'];

$is_insert =  $db->query("INSERT INTO `contact`( `message`, `name`, `email`, `subject`) VALUES (' $message','$name',' $mail',' $subject')");

if($is_insert == TRUE){
echo "Inserted";
header("refresh:2; url=contact.php");
}


}
?>