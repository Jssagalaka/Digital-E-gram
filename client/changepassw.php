<?php
session_start();
if(isset($_SESSION['email']))
{
include('header.php');
echo $hh;
$con=mysqli_connect("localhost","root","","e_gram");

if(isset($_POST["submit"]))
{
    $em= $_SESSION['email'];
    $olpwd=$_POST["cpsw"];
    $npwd=$_POST["npsw"];
    $cpwd=$_POST["cfpsw"];

    $res=mysqli_query($con,"select * from register where Email='".$em."' and Password='".$olpwd."'");

    if(mysqli_num_rows($res))
{
  if($npwd==$cpwd)
  mysqli_query($con,"update register set Password='".$npwd."' where Email='".$em."'");

}
else
{
  echo "Username or Password Invalid";
}
}
?>
 <div class="section">
        <div class="content-wrap">
            <div class="container">
                
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        <h2 class="section-heading">
                          Change Password
                        </h2>
                        <!-- <p class="subheading mb-4">"Assisting you in sustaining rural development through technology"</p> -->
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                            <div class="row">
                            <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password"  name="cpsw" class="form-control" id="p_name" placeholder="Enter Current password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="npsw" class="form-control" id="p_name" placeholder="Enter New password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="cfpsw" class="form-control" id="p_name" placeholder="Enter Conform password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                            <div class="form-group">
                                <div id="success"></div>
                                <input type="submit" name="submit" value="submit" class="btn btn-secondary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
echo $hf;
}
else
	header("Location:../login.php");
?>