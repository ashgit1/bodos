<!--A Design by W3layouts
Customer: Bodos Developer
-->
<?php
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userPhone'];
$userMsg = $_POST['userMsg'];
$formcontent=" From: $userName \n userPhone: $userPhone \n userMsg: $userMsg";
$recipient = "shailesh14sep1977@gmail.com";
$subject = "Bodos Developer Contact Form";
$mailheader = "MIME-Version: 1.0" . "\r\n";
$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mailheader = "From: $userEmail \r\n";
$mailheader .= "Cc: $userEmail \r\n";
$mailheader .= "BCC: adoreashish@gmail.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<center>";
echo "<font color='darkblue' size='4'> Thank You! Your enquiry is sent @ Bodos Developer . We will get back to you very soon.</font>" . "-" . "<a href='index.html' 
	  style='text-decoration:none;color:#ff0099;'> Return Home</a>";
echo "</center>";
?>
