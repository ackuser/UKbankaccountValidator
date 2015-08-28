<?php

//echo strlen($_POST['sortcode'])."\n";
//echo strlen($_POST['bankaccount'])."\n";
//echo is_numeric($_POST['sortcode'])."\n";
//echo is_numeric($_POST['bankaccount'])."\n";

if(isset($_POST['sortcode']) && isset($_POST['bankaccount'])
&& strlen($_POST['sortcode']) == 6 && strlen($_POST['bankaccount']) == 8
&& is_numeric($_POST['sortcode']) && is_numeric($_POST['bankaccount'])) {

echo $_SERVER['REMOTE_ADDR']."\n";
$date = date('Y-m-d H:i:s');
echo $date . "\n";
echo $date . "\n";
//conection:
$con = mysqli_connect("localhost","root",'Pa$$w0rd',"BankAccount") or die("Error " . mysqli_error($con));

$query = "SELECT * FROM ukbank" or die("Error in the consult.." . mysqli_error($con));

$result = $con->query($query);

while($row = mysqli_fetch_assoc($result)) {
  print "<pre>";
  print_r($row);
  print "</pre>";
}

}

?>
