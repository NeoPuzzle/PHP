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

<?php
$mynewfilee = fopen("newfilee.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($mynewfilee, $txt);
$txt = "Jane Doe\n";
fwrite($mynewfilee, $txt);
fclose($mynewfilee);
?>

<?php
$myfileneww = fopen("newwwfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfileneww, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfileneww, $txt);
fclose($myfileneww);
?>
<?php
$myffile = fopen("newffile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myffile, $txt);
$txt = "Goofy Goof\n";
fwrite($myffile, $txt);
fclose($myffile);
?>
<?php include 'footer.php';?>
<!-- <?php include 'noFileExists.php';?> -->
<!-- <?php require 'noFileExists.php';?> -->

    <!-- &copy; 2010-<?php echo date("Y");?> -->

</body>
</html>