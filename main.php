<!DOCTYPE html>
echo"Type your HTML, CSS, JavaScript, Jquery or anything to compile it here in real time \n";
?>

<hr>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
</head>
<body>

<?php ob_start(); ?>
<div id='nameBox'></div>

<textarea rows="14" cols="50" type='text' name='fname' onkeyUp="document.getElementById('nameBox').innerHTML = this.value" />
<?echo $a?>

