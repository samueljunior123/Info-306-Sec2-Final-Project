	<?php

if (isset($_POST['submit'])) {
  $name = ($_POST['name']);
  $subject = ($_POST['subject']);
  $mailfrom = ($_POST['email']);
  $message = ($_POST['message']);
	
  $mailto = "samjr873@gmail.com";
  $headers = "From: " .$mailfrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
  mail($mailto, $subject, $txt, $headers);
  header("Location: file:///C:/Users/ACER/Desktop/Shoes%20website/contact.html?mailsend");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>