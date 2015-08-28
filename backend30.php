<?php
if(isset($_POST['sortcode']) && isset($_POST['bankaccount'])
&& strlen($_POST['sortcode']) == 6 && strlen($_POST['bankaccount']) == 8
&& is_numeric($_POST['sortcode']) && is_numeric($_POST['bankaccount'])) {


$mysqli = new mysqli("localhost","root",'Pa$$w0rd',"BankAccount");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
echo "HOLA";

$stmt = $mysqli->prepare("INSERT INTO ukbank (sortcode,bankaccount,ipaddress,datetime) VALUES (?, ?, ?, ?)");
$stmt->bind_param($sortcode, $bankaccount, $ipaddress, $datetime);

$sortcode = $_POST['sortcode'];
$bankaccount = $_POST['bankaccount'];
$ipaddress = $_SERVER['REMOTE_ADDR'];
$datetime = date('Y-m-d H:i:s');;

$stmt->execute();

printf("%d Row inserted.\n", $stmt->affected_rows);

$stmt->close();

if (!$mysqli->commit()) {
    print("Transaction commit failed\n");
    exit();
}

$sql = "SELECT * FROM ukbank";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      print "<pre>";
      print_r($row);
      print "</pre>";
    }
} else {
    echo "0 results";
}


$mysqli->close();
}
?>
