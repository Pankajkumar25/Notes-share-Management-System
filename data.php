<?php
session_start();
require("mysqli_connection.php");
require("linkfile.php");
echo "data page<br/>";

$_SESSION['user_id']=101;


if(isset($_REQUEST['dlike']) ||isset($_REQUEST['plike']))
{

	$id=$_REQUEST['id'];
	$pageno=$_REQUEST['pageno'];
	$col_name="";
	if(isset($_REQUEST['dlike']))
	{
		$col_name="dlike";
	$subject=$_REQUEST['dlike'];
	
	}
	else
	{
		$col_name="plike";	
	$subject=$_REQUEST['plike'];
	
	}	
$user_id=$_SESSION['user_id'];
$status=$col_name;

$sql="select * from dynamic_like  where user_id='$user_id' and Notes_id='$id'";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);

if($num==0)
{

	$sql="insert into dynamic_like(user_id,Notes_id,status) values($user_id,$id,'$status')";
	if(!mysqli_query($con,$sql))
		echo "error<br/>$sql";	

echo $col_name;
echo "<br/>";
echo$subject;

echo "<br/>";
echo $pageno;
$query="SELECT $col_name FROM `postnotes` WHERE id=$id";
//echo $query;

$query_result=mysqli_query($con,$query);
$num=mysqli_num_rows($query_result);
	echo "<br/>num=$num<br/>";
	
if($num>0)
{		
	$row_data=mysqli_fetch_row($query_result);
	
	$t=$row_data[0]+1;

	
	
	$query="UPDATE postnotes SET $col_name='$t' where id=$id";
	//echo $query;
	if(mysqli_query($con,$query))
	{
	header("Location:home_grid.php?subject=$subject&pageno=$pageno");
	}
	else{
	echo "error";	
	}

}
else
{
		echo "not found";
}


}
else
{

	
$query="SELECT $col_name FROM `postnotes` WHERE id=$id";
$query_result=mysqli_query($con,$query);
$row_data=mysqli_fetch_row($query_result);
if($row_data[0]>0)
$new_value=$row_data[0]-1;
else
$new_vlue=0;
echo "row_data=$new_value";

$query="UPDATE postnotes SET $col_name='$new_value' where id=$id";
//echo $query;
if(mysqli_query($con,$query))
{
	$sql="delete from dynamic_like  where user_id='$user_id' and Notes_id='$id'";
echo $sql;

	$query=mysqli_query($con,$sql);
	header("Location:home_grid.php?subject=$subject&pageno=$pageno");
}
else{
echo "error";	
}


}

}

else if(isset($_POST['webcomment']))
{
$comment_value=$_POST['comment'];
$query="insert into comment_tab(comment) values('$comment_value')";
if(mysqli_query($con,$query))   
{
	echo "saved";
	header("Location:home_grid.php");
}
else{
	echo"not saved error";
}
}

else if(isset($_POST['save']))
{
	echo "save";
$rf_id_value=$_SESSION['ref_id'];
//echo "$rf_id_value";
//exit;
$stream_value=$_POST['stream'];
$subject_value=$_POST['subject'];
$price_value=$_POST['price'];
$description_value=$_POST['description'];
$Notes_value=$_POST['Notes'];
$email_value=$_POST['email'];
	
$query="insert into postnotes(ref_id,stream,subject,Notes,price,description,email) 
values('$rf_id_value','$stream_value','$subject_value','$Notes_value','$price_value',
'$description_value','$email_value')";

//echo "$query";

if(mysqli_query($con,$query))   //if(mysqli_query($con,$query))
{
//echo "saved";
$id=mysqli_insert_id($con);


/*//$file_name=$_FILES['new_file']['name'];
$file_name=$file['name'];
$file_path=$file['tmp_name'];

$temp=explode(".",$file_name);
$len=count($temp);
$new_path="notes_files/$id".".".$temp[$len-1];
*/
$file1=$_FILES['cov_image'];
$file2=$_FILES['preview'];

$new_path=upload($file1,1,$id);
$new_path1=upload($file2,2,$id);

if($new_path!="" || $new_path1!="")
{
	
$update_query="update postnotes set cov_image='$new_path',Preview='$new_path1' where ref_id=$rf_id_value";	
echo "$update_query";
if(mysqli_query($con,$update_query))
header("Location:new_post.php?act=1");
else	
echo "update query error";
}
else
{
echo "uploading error";
}
}

}
else if(isset($_POST['Register']))
{
	
$namevalue=$_POST['name'];
$emailvalue=$_POST['email'];
$contact_novalue=$_POST['contact_no'];
$gendervalue=$_POST['gender'];
$coursevalue=$_POST['course'];
$passwordvalue=$_POST['password'];
//$collist=array(name,email,contact_no,gender,course);
//$colvalues=array('$namevalue','$email_value','$contact_novalue','$gendervalue','coursevalue');
echo '<br>';
$sql="insert into reg(name,email,contact_no,gender,course,password) 
values('$namevalue','$emailvalue','$contact_novalue',
'$gendervalue','$coursevalue','$passwordvalue')";
if(mysqli_query($con,$sql))
{
	header("Location:index.php");
}
else
{
	echo $sql;
}

echo '<br>';
//print_r($sql);

}

else if(isset($_POST['student']) ||isset($_POST['teacher']) ||isset($_POST['professional']))
{
	//echo "new user";
$user_type=$_POST['user_type'];
$table_name=$user_type;
//echo"user type=$user_type";

$email_id=$_POST['email'];
$contact_no=$_POST['contact'];
$user_name=$_POST['username'];
$sql="select * from reg where email='$email_id' or contact_no='$contact_no'";
//echo"$sql";
$query= mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
if($num==0)
{


if(isset($_POST['student']))
{
$course_v=$_POST['course'];
$college_v=$_POST['college'];
$university_v=$_POST['university'];
$gender_v=$_POST['gender'];
$password_value=$_POST['password'];
$ref_id=0;			  
$sql="INSERT INTO $table_name(name,course,college,university,gender,password)
values('$user_name','$course_v','$college_v','$university_v','$gender_v','$password_value')";

}
else if(isset($_POST['teacher'])) 
{
	//$name_value=$_POST['username'];
	$institute_name_v=$_POST['institute_name'];
	//$email_v=$_POST['email'];
	//$contact_no_value=$_POST['contact_no'];
	$city_value=$_POST['city'];
	$gender_value=$_POST['gender'];
	$speciality_value=$_POST['speciality'];
	$practics_value=$_POST['practics'];
	$password_value=$_POST['password'];
	
		$sql="INSERT INTO $table_name(username,gender,city,institute_name,speciality,practics,password)  
		values('$user_name','$institute_name_v','$city_value','$gender_value','$speciality_value','$practics_value','$password_value')";
}
else if(isset($_POST['professional']))
{
echo "professional";

$gender_v=$_POST['gender'];
$city_v=$_POST['city'];
$speciality_v=$_POST['speciality'];
$certifications_v=$_POST['certifications'];
$experience_v=$_POST['experience'];
$password_value=$_POST['password'];
	
$sql="INSERT INTO $table_name(username,gender,city,speciality,certifications,experience,password)
values('$user_name','$gender_v','$city_v','$speciality_v','$certifications_v','$experience_v','$password_value')";
		  
//$sql="INSERT INTO student(username,email,course,college,university,gender,contact)
//values('$name_v','$email_v','$course_v','$college_v','$university_v','$gender_v','$contact_v')";

}
echo $sql;
//exit;
if(mysqli_query($con,$sql))
{
	$ref_id=mysqli_insert_id($con);
	
	echo "ref_id=$ref_id";
	
	$sql="insert into  reg(email,contact_no,password,ref_id,usertype) value('$email_id','$contact_no','$password_value',$ref_id,'$table_name')";
	if(mysqli_query($con,$sql))
		header("Location:index.php?id=$ref_id");
	else
		echo "Error :$sql";
	
	
}
else
echo "error=".$sql;



	
}
else
echo $num;

/*




echo "$sql";
exit;
if(mysqli_query($con,$sql))
{
$row_data=s1($con);


		$sql3="INSERT INTO reg (name,email,contact_no,password,ref_id,usertype)
		values('$row_data[1]','$row_data[2]','$row_data[7]','$row_data[8]',$row_data[0],'student')";
		echo "$sql3";
		$query_result=mysqli_query($con,$sql3);			
		header("Location:index.php");
}
else{
	echo 'Error';
}




*/

}


else if(isset($_POST['login']))
{
	
//echo "Login<br/>";
$userid=$_POST['userid'];
echo "user password=".$user_password=$_POST['password'];
//echo "<br/>";
echo "user type=".$usertype=$_POST['usertype'];
//echo "<br/>";
$sql="select id,password,status from reg where id='$userid' or email='$userid' and usertype='$usertype'";
//echo $sql;
//exit;
//echo "<br/>";
$query_result=mysqli_query($con,$sql);
$num=mysqli_num_rows($query_result);

echo "num=$num";

if($num>0)
{
	$row_data=mysqli_fetch_row($query_result);
	echo "database password=".$database_password=$row_data[1];
	if($user_password==$database_password )
	{
		echo "Login";
		$_SESSION['usertype']=$usertype;
		$_SESSION['id']=$row_data[0];
		if($usertype=="admin")
		header("Location:add_option.php");
		else	
		header("Location:my_post.php");
	
	}
	else
			header("Location:index.php?userid=$userid&case=1");
/*		
	echo "database password=$database_password<br/>";
	echo "user_password=$user_password<br/>";
	echo "Password :<br/>";
	echo "User Password=$user_password<br/>";
	$dc_password=base64_decode($database_password);
	echo "database Password=$database_password<br/>";
	echo "decode password=$dc_password<br/>";
	
	if($user_password==$database_password && $usertype=='admin')
	{
		$_SESSION['id']=$row_data[0];
		header("Location:add_option.php");
	}
	else if($user_password==$database_password && $usertype=='student')
		{
		$_SESSION['id']=$row_data[0];
		header("Location:my_post.php");
	}
	else if($user_password==$database_password && $usertype=='user')
		{
		$_SESSION['id']=$row_data[0];
		header("Location:my_post.php");
	}
	else if($user_password==$database_password && $usertype=='teacher')
		{
		$_SESSION['id']=$row_data[0];
		header("Location:my_post.php");
	}
	else if($user_password==$database_password && $usertype=='professional')
		{
		$_SESSION['id']=$row_data[0];
		header("Location:my_post.php");
	}
	else
	header("Location:index.php?userid=$userid&case=3");
*/
}
else
	{
	header("Location:index.php?userid=$userid&case=2");
	}
}

function upload($file,$caseno,$id)
{
//	echo "Function body";

$file_name=$file['name'];
$file_path=$file['tmp_name'];

$temp=explode(".",$file_name);
$len=count($temp);
if($caseno==1)
$new_path="notes_files/$id".".".$temp[$len-1];
else
$new_path="images/$id".".".$temp[$len-1];
	

if(move_uploaded_file($file_path,$new_path))
return $new_path;
else
return "";	
}	
	/*
$usertype=$request['usertype'];
$name=$request['name'];
$email=$request['email'];
$password=$request['password'];
*/
?>