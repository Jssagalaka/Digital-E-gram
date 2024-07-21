<?php
$con= mysqli_connect("localhost","root","","e_gram");
session_start();
if(isset($_SESSION['email']))
{
	include 'includes/header.php';
$id=$_REQUEST["id"];
if(isset($_POST['register']))
{	
	$ps=$_POST['password'];
	$cps=$_POST['confirm_password'];
	if($cps==$ps)
		{
		$sql="update admin set password='$ps' where id=$id";
//		echo $sql;
		$res=mysqli_query($con,$sql);
		header("Location:admin.php");
		ob_end_flush();
		}
	else	
			echo "Plz Confirm password";
	}
?>
<br><br><br>
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4"  style = "margin:0 0 0 400px;">
				<div class="signup-form"><!--sign up form-->
					<h2>Update admin</h2>
						<form name="add" action="#" method="post">
							<label for="password">Password:</label>
							<input type="password" name="password"id="password" class="form-control"onBlur="vali(17,this.id);" required="required" placeholder="">
							<label for="confirm_password">Confirm Password:</label>
							<input type="password" name="confirm_password"id="confirm_password" class="form-control"onBlur="vali(17,this.id);" required="required" placeholder=""></br>
							
							<button type="submit" name="register" class="btn btn-default">Update</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php
include 'includes/footer.php';
}
else
	header("Location:../index.php");
?>