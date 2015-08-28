<?php

$con = mysqli_connect("localhost","root",'Pa$$w0rd',"BankAccount");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
  echo "We've connected to MySQL";
  $sql='SELECT * FROM ukbank';

$rs=$con->query($sql);
if($rs === false) {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $con->error, E_USER_ERROR);
} else {
  $rows_returned = $rs->num_rows;
  echo "Displaying" . $rows_returned;
  while($row = mysqli_fetch_assoc($rs)) {
    print "<pre>";
    print_r($row);
    print "</pre>";
}
}
}
?>
