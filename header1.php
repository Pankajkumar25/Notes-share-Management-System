<div class="panel panel-info">
      <div class="panel-heading">
	  <h1>
  <span><img src='logo.jpg'/>Header Text</span>
<button data-toggle='modal' data-target='#registrationModel' class='btn btn-primary pull-right'>Registrstion</button>

  </div>
  <div class='panel-body'>

<form action='data.php' method='post'>
						
<div class='modal fade'  id='registrationModel' role='dialog'>

<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
			<h2><center>Registration</center></h2></div>
		  	<div class='modal-body'>
			

<div class='row'>
<label class='col-md-3'>Name </label>
<div class='col-md-5'>
<input type='text' name='name' class='form-control'/>
</div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>Email</label>
<div class='col-md-5'>
<input type='email' id='remail' name='email' class='form-control'/>
</div>
</div>
</br>

<div class='row'>
<label class='col-md-3'>Contact no</label>
<div class='col-md-5'>
<input type='tel' id='rpnumber' name='contact_no' class='form-control'/>
</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Gender </label>
<div class='col-md-5'>
Male<input type='radio' id='rmale' value='male' name='gender' />
Female<input type='radio' id='rfemale' value='female' name='gender'/>
Others<input type='radio' id='rother' value='others' name='gender' checked/>

</div>
</div>
</br>


<div class='row'>
<label class='col-md-3'>Course</label>
<div class='col-md-5'>
<select name='course' class='form-control'>
            
            <option value='c'>C language</option>
            <option value='c++'>C++ language</option>
            <option value='java'>Java language</option>
            <option value='html'>Html language</option>
            <option value='css'>Css language</option>
            <option value='js'>javascript language</option>
        </select>
</div>
</div>
</br>
</br>
 
<div class='row'>
<div class='col-md-offset-3 col-md-5'>
<input type='submit' name='save' value='Register' class='btn btn-info'/>
<input type='reset' class='btn btn-info'/>
</div>
</div>
</form>

<div class='row'>
<div class='col-md-offset-7 col-md-5'>
<a data-toggle='modal' data-target='#loginModel' href='#loginModel' >Already have a account?</a>

</div>
</div>				
			</div>
			<div class='modal-footer'> <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
			</div>			
			</div>
</h1>
	</div>	 
	</div>
	
		<div class='modal fade'  id='loginModel' role='dialog'>

<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
			<center><h2>Login</h2></center></div>
		  	<div class='modal-body'>
			
			<form action='data.php' method='post'>
<div class='row'>
<label class='col-md-3'>Email/Empid</label>
<div class='col-md-6'><input type='text' name='userid' class='form-control'/>
</div>
</div>
<br/>
<div class='row'>
<label class='col-md-3'>Password</label>
<div class='col-md-6'><input type='password' name='password' class='form-control'/>
</div>
</div>
<br/>

<div class='row'>
<label class='col-md-3'>User type</label>
<div class='col-md-6'>
<select name='usertype' class='form-control' > 
<option value='admin'>admin</option>
<option value='user'>user</option>
</select>

</div>
</div>
<br/>
<div class='row'>

<div class='col-md-offset-3 col-md-6'>
<input type='submit' name='login'  value='Login' class='btn btn-info'/>
<input type='reset' class='btn btn-info'/>
</div>
</div>
</br>

</form>


<div class='row'>
<div class='col-md-offset-7 col-md-5'>
<a data-toggle='modal' data-target='#registrationModel' href='#registrationModel'>Don't have a existing account?</a>
</div>
</div>



			
			</div>
			<div class='modal-footer'> <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
			</div>
			
			</div>

</div>
</div>
