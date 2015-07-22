<?php
$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML E-Mail";

$message = "
	<html>
		<head>
		<title>HTML E-Mail</title>
			<style type='test/css'>
			hr {color:sienna;}			
			p {margin-left:20px;}
			h3
			{
			color:red;
			text-align:left
			font-size:8pt}
			</style>
		</head>
	<body>
	<h3>The fancy CSS heading!</h3>
				<p>.$email.</p>
	<hr>
	<table>
		<tr>
		<th>Firstname</th>			
		<th>Lastname</th>
		</tr>
		";
for($i = 0; $i < count ( $someArrayFromYourForm ); $i ++) {
	$email .= "
			<tr>
			<td>" . $someArrayFromYourForm ['formField1'] . "</td>
			<td>" . $someArrayFromYourForm ['formField2'] . "</td>
			</tr>
			";
}
$mail .= "</table>
			</body>
	</html>";

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'CC: myboss@example.com' . "\r\n";

#mail ( $to, $subject, $message, $headers )?>
