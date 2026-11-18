<?php
$username = $_POST['username'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$message = $_POST['message'];

$subject = "Query from Mbtech.in By $username";
if(!empty($_POST['website'])){
    exit;
}
else
{
if(!$email == "" && (!strstr($email,"@") || !strstr($email,".")))
{
echo "<center><h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}
if(empty($email)) {
echo "<center><h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}
if($heading!='')
{
$body .= "";
$body .= $heading;
$body .= "\n\n";
}
if($username!='')
{
$body .= "First Name :";
$body .= $username;
$body .= "\n\n";
}
if($online_event!='')
{
$body .= "online_event :";
$body .= $online_event;
$body .= "\n\n";
}
if($most_like!='')
{
$body .= "Mother Name :";
$body .= $most_like;
$body .= "\n\n";
}
if($father_first_name!='')
{
$body .= "Father Name :";
$body .= $father_first_name;
$body .= "\n\n";
}
if($dateofbirth!='')
{
$body .= "Date of Birth :";
$body .= $dateofbirth;
$body .= "\n\n";
}

if($email!='')
{
$body .= "Email :";
$body .= $email;
$body .= "\n\n";
}
if($mobileno!='')
{
$body .= "Mobile No :";
$body .= $mobileno;
$body .= "\n\n";
}
if($gender!='')
{
$body .= "Gender :";
$body .= $gender;
$body .= "\n\n";
}
if($address!='')
{
$body .= "Address :";
$body .= $address;
$body .= "\n\n";
}
if($city!='')
{
$body .= "City :";
$body .= $city;
$body .= "\n\n";
}
if($state!='')
{
$body .= "State :";
$body .= $state;
$body .= "\n\n";
}
if($pin!='')
{
$body .= "Pin :";
$body .= $pin;
$body .= "\n\n";
}

if($message!='')
{
$body .= "Message :";
$body .= $message;
$body .= "\n\n";
}

$from = "From: $email\r\n";



mail("reetdesign@gmail.com", $subject, $body, $from);
mail("websitemohit@gmail.com", $subject, $body, $from);
}
header('location: index.php');
?>
