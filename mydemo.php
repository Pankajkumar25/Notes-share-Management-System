<?php require_once("mysqli_connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  require("linkfile.php");
  ?>
</head>
<body>

<div class="container-fluid">


<?php
include("header.php");
include("mainmenu.php");
echo "<br/>";
echo "<div class='row'>";

echo "<div class='col-md-3'>";
include("leftmenu.php");
echo "</div>";
echo "<div class='col-md-9'>";
echo"
<div class='panel panel-info'>
<div class='panel-heading'>
main title
</div>
<div class='panel-body min_h'>





</div>
</div>
";
echo "</div>";

echo "</div>";


include("footer.php");


?>


</div>

</body>

</html>