<?php
include('header.php');
echo $hh;
$con= mysqli_connect("localhost","root","","e_gram");

if(isset($_POST['submit']))
{
    $fnm=$_POST['fname'];
    $lnm=$_POST['lname'];
    $gn=$_POST['gender'];
    $pn=$_POST['phone'];
    $ad=$_POST['add1'];
    $em=$_POST['email'];
    $ps=$_POST['psw1'];


    if($fnm!=""&&$lnm!=""&&$gn!=""&&$em!=""&&$pn!=""&&$ad!=""&&$ps!="")
    {
       // $query="insert into register values(null,'$fnm','$lnm','$gn','$pn','$ad','$em','$ps')";
        $query="insert into register(ID,Firstname,Lastname,Gender,Phone,Address,Email,Password)  values (null,'$fnm','$lnm','$gn','$pn','$ad','$em','$ps')";
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
                <div class="row">
                    
                    <!-- End Sidebar -->
                    <div class="col-sm-12 col-md-12 col-lg-8">

                        <h2 class="section-heading">
                           Registraction
                        </h2>
                        <!-- <p class="subheading mb-4">"Assisting you in sustaining rural development through technology"</p> -->
                        <form action="#" method="post" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                               
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" class="form-control" id="p_name" placeholder="Enter FirstName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" class="form-control" id="p_name" placeholder="Enter LastName" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <div class="form-group">
                                    &nbsp;Gender:-&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="html" name="gender" value="male">
                                        <label for="male">Male</label>
                                         <input type="radio" id="css" name="gender" value="female">
                                        <label for="female">Female</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="p_phone" placeholder="Enter Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <textarea id="p_message" name="add1" class="form-control" rows="6" placeholder="Enter Your Address"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                        <input type="password" name="psw1" class="form-control" id="p_name" placeholder="Enter password" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                            <div class="form-group">
                                <div id="success"></div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
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
?>

