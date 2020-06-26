<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">//alert("sdfsd");</script>
<body>
<?php
require_once("dbconfig.php");
	$query ="SELECT * FROM doctor_availability WHERE cid = '" . $_POST["cid"] . "'";
	$results = $conn->query($query);
?>
	<option value="">Select Doctor</option>
<?php
	while($rs=$results->fetch_assoc()) {
?>
	<option value="<?php echo $rs["did"]; ?>"><?php  echo "Dr. ".$rs1["Name"]; ?></option>
<?php

}
?>
</body>
</html>