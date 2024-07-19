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
<?php include 'footer.php';?>
<!-- <?php include 'noFileExists.php';?> -->
<!-- <?php require 'noFileExists.php';?> -->

    <!-- &copy; 2010-<?php echo date("Y");?> -->

</body>
</html>