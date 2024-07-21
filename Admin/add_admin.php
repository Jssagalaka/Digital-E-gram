<?php
session_start();
$con= mysqli_connect("localhost","root","","e_gram");
if(isset($_SESSION['email']))
{
if(isset($_POST['register']))
{	

	$fn=$_POST['name'];
	$ps=$_POST['password'];
	$cps=$_POST['confirm_password'];
	$que="select *from admin where username='$fn'";
	$res=mysqli_query($con,$que);
	if(mysqli_num_rows($res))
		echo "User already Exist";
	else
	{
		if($cps==$ps)
			{
			$sql="insert into admin values(null,'$fn','$ps')";
			//echo $sql;
			$res=mysqli_query($con,$sql);
			header("Location:admin.php");
			}
		else	
			echo "Plz Confirm password";
	}
}
include 'includes/header.php';
?>

<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4"  style = "margin:0 0 0 400px;">
				<div class="signup-form"><!--sign up form-->
					<h2>add new admin</h2>
					<form name="add" action="#" method="post">
							<label for="name">User Name:</label>
							<input type="text" name="name"id="name" class="form-control"onBlur="vali(17,this.id);" required="required" placeholder="">
							<label for="password">Password:</label>
							<input type="password" name="password"id="password" class="form-control"onBlur="vali(17,this.id);" required="required" placeholder="">
							<label for="confirm_password">Confirm Password:</label>
							<input type="password" name="confirm_password"id="confirm_password" class="form-control"onBlur="vali(17,this.id);" required="required" placeholder=""></br>
							
							<button type="submit" name="register" class="btn btn-default">Add</button>
						</form>
					</div><!--/sign up form-->
				</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
include 'includes/footer.php';
}
else
	header("Location:index.php");

?>