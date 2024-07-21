<?php
include('header.php');
echo $hh;
$con= mysqli_connect("localhost","root","","e_gram");

if(isset($_POST["submit"]))
{
    $nm1=$_POST["nm"];
    $em=$_POST["email"];
    $pn=$_POST["phone"];
    $msg=$_POST["msg"];

    if($nm1!="" && $em!="" && $pn!="" && $msg!="")
    {
        $query="insert into contact values(null,'$nm1','$em','$pn','$msg')";
    
        $res=mysqli_query($con,$query);

        if($res)
        {
            echo "Data insert succesfully";
        }
        else
        {
            echo "All field are required";
        }
    }
}
?>

<div class="section">
        <div class="content-wrap">
             <div class="container">
                
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        <h2 class="section-heading">
                            Contact
                        </h2>
                        <!-- <p class="subheading mb-4">"Assisting you in sustaining rural development through technology"</p> -->
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="nm"class="form-control" id="p_name" placeholder="Enter Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="p_email" placeholder="Enter Phone number" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <textarea id="p_message" name="msg" class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <div id="success"></div>
                                <input type="submit" name="submit" value="send message" class="btn btn-secondary">
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