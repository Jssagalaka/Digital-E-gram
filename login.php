<?php
session_start();
$con= mysqli_connect("localhost","root","","e_gram");

if(isset($_POST['submit']))
{
    $em=$_POST['email'];
    $pwd=$_POST['psw'];
    $query="SELECT * FROM register WHERE Email='$em' && Password='$pwd'";

    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);

    if($total==1)
    {
        $_SESSION['email']=$em;
        header("location:client/index.php");
    }
    else
    {
        echo '<script>alert("Login Faield   ")</script>';;
    
}
}
include('header.php');
echo $hh;
?>

 <div class="section">
        <div class="content-wrap">
            <div class="container">
                
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        <h2 class="section-heading">
                           Login
                        </h2>
                        <!-- <p class="subheading mb-4">"Assisting you in sustaining rural development through technology"</p> -->
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="p_name" placeholder="Enter E-mail" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="psw" class="form-control" id="p_name" placeholder="Enter password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                            <div class="form-group">
                                <div id="success"></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             
                                <input type="submit" name="submit" value="login" class="btn btn-secondary">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
echo $hf;
?>