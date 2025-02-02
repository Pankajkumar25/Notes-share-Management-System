
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
	  
	
	 <label>
	 <a class="navbar-brand active" href="my_post.php">
	 <?php
	 $email=$_SESSION['email_id'];
	 echo "$email";
	 ?></a>
	 </label>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="new_post.php">Publish New Post</a></li>
        <li class=""><a href="my_post.php">My Post</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><span><h4 class='pull-right'>
        <a href='logout.php' class='btn btn-primary'>Logout</a></span>
</h4>
      </li>
            </ul>


      
      
   

<!--*6************ **************************************************************************************************** 

      <ul class="nav navbar-nav navbar-right">
      <li><span>
<h4 class='pull-right'>
<a href='logout.php' class='btn btn-primary pull-right'>Logout</a>
</h4></span>   
    </div>
  </div>
</div>
    
    </a></li>
    </ul>-->
      <!-- <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

