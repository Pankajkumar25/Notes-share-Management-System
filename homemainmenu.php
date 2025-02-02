<?php include('mysqli_connection.php');?>
<?php include('linkfile.php');?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    

	 <a class="navbar-brand active" href="index.php">
	<label><img src='assets/icons/file-person.svg'>&nbsp; <b>My Account</b></label>
	 </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
		  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src='assets/icons/menu-button-wide.svg'>&nbsp; Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
				  <?php 
$sql="SELECT distinct(Notes) FROM `postnotes` group by notes";
//echo $sql;
$query_result= mysqli_query($con,$sql);
while($row_data= mysqli_fetch_array($query_result))
{
	echo strtoupper("<li><a href='home_grid.php?subject=$row_data[0]'> $row_data[0]</a></li>");
}
?>

			<li><a href="#">Post's</a></li>
	        <!--<li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
      </ul>
	  <i class="arrow-90deg-left"></i>
	  
      <form action='search.php' class="navbar-form navbar-left" role="search" method='post'>
        <div class="form-group">
          <input type="text" class="form-control" name='search' placeholder="Search Notes">
        </div>
        <button name='find' class="btn btn-default"/> <img src='assets/icons/search.svg'> </button>
      </form>
	  <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			<button> Login/Sign Up <span class="caret"></span></button>
          <ul class="dropdown-menu">
<li><a data-toggle='modal' data-target='#myModalp'>Professional Sign up</a></li>
<li><a data-toggle='modal' data-target='#myModals'>Student Sign Up</a></li>
<li><a data-toggle='modal' data-target='#myModalt'>Teacher Sign Up</a></li>
<li><a data-toggle='modal' data-target='#myModal'>Login</a></li>

        </li>
      </ul>
</nav>

<script>
function confirm_msg()
{
  return confirm("You Need to login First");
}

</script>