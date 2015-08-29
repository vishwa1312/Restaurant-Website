<?php
echo 'hii';
include_once “class.curl.php”;
include_once “class.sms.php”;

$smsapp=new sms();
$smsapp->setGateway('way2sms'); // you can set gateway to be 160by2 to use your 160by2 account;
// way2sms code has been tested on different accounts to be stable.

echo “Logging in … “;
$smsapp->login('9738849255','K7283G');

echo “Sending SMS … “;
$result=$smsapp->send('9738849255','Your text message');

if($result)
{
echo “Message sent”;
}
else
{
echo “Error encountered : “.$smsapp->getLastError();
}
?>