<!DOCTYPE html>
<html>
<body>

<div class="menu">
    <?php include "menu.php"; ?>
</div>

<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "I have a $color $car" . "\n";
 ?>
<p>Some text.</p>
<p>Some more text.</p>
<?php echo readfile("webdictionary.txt") . "\n"; ?>
<?php 
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt")) . "<br>";
fclose($myfile);
?>

<?php
$myfiles = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfiles) . "<br>";
fclose($myfiles);
?>

<?php
$myfiler = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfiler)) {
  echo "fgets: " . fgets($myfiler) . "<br>";
}
fclose($myfiler);
?>

<?php
$myfilese = fopen("webdictionary.txt", "r") or die("Unable to open file!");
while(!feof($myfilese)) {
  echo "-" . fgetc($myfilese);
}
fclose($myfilese);
?>
<?php include 'footer.php';?>
<!-- <?php include 'noFileExists.php';?> -->
<!-- <?php require 'noFileExists.php';?> -->

    <!-- &copy; 2010-<?php echo date("Y");?> -->

</body>
</html>