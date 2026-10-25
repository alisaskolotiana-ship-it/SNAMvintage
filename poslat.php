<?php
$to = "das@dreamartstudio.sk";
$extra = "From: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Odkaz od ".$_POST['jmeno']."";
$mess = "Partner: ".$_POST['partner']."\nMeno: ".$_POST['meno']."\nEmail: ".$_POST['email']."\nTel: ".$_POST['tel']."\nFirma: ".$_POST['firma']."\nText:\n".$_POST['text']."";
mail ($to, $subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=index.html">
<title>Pøesmìrování...</title>
</head><body></body></html>