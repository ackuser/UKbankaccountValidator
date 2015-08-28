<?php
if(isset($_POST['sortcode']) && isset($_POST['bankaccount'])
&& strlen($_POST['sortcode']) == 6 && strlen($_POST['bankaccount']) == 8
&& is_numeric($_POST['sortcode']) && is_numeric($_POST['bankaccount'])) {


  $servername = "localhost";
  $username = "root";
  $password = 'Pa$$w0rd';
  $dbname = "BankAccount";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sortcode = $_POST['sortcode'];
  $bankaccount = $_POST['bankaccount'];
  $ipaddress = $_SERVER['REMOTE_ADDR'];
  $datetime = date('Y-m-d H:i:s');;

  $sql = "INSERT INTO `ukbank`(`sortcode`, `bankaccount`, `ipaddress`, `datetime`)
  VALUES ('".$sortcode."', '".$bankaccount."', '".$ipaddress."', '".$datetime."')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "\n" . $conn->error;
  }

$sql = "SELECT * FROM ukbank";
$result = $conn->query($sql);

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


$conn->close();
}
?>
