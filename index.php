<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
Amount: <input type="text" placeholder="0" name="fee"><br>
<input type="submit">
</form>

<?php
$cost = $_POST["fee"];
$fee = ($cost + .3) / .971; //
$final = round($fee , 2);
?>
<p>If you pay via PayPal your final cost will be:</p>
<p>	<?php if($final=='0.31'){echo "$0";}else{echo "$" . $final;}?></p>

</body>
</html>
