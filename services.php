<?php
session_start();

$con= mysqli_connect("localhost","root","","e_gram");
include('header.php');
echo $hh;

$res=mysqli_query($con,"select * from services");

?>
  <!-- BANNER -->
    <div class="section banner-page" data-background="images/banner-common.png">
        <div class="content-wrap pos-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="title-page">Services</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
   h1{
    text-align:center;
    color:orangered;
    
   }
   .service{
    margin: 30px;
    font-size:20px
   }
   button{
    border:solid black 2px;
    border-radius:10px
   }
   #abc{
    border:solid black 2px;
    border-radius:50px;
    width:350px;
    padding:5px;
   }
   .ver:hover{
    background-color:green;
   }
   .ver{
    border-radius:30px;
   }
   
   table {
    align:center;
      width: 35%;
      border-collapse: collapse;
    }
    td {
      padding: 10px;
      
    }
    .service{
        background-color: #d4e8d1;
        margin:0px 0px;
    }

</style>
<div class="service"> 

<h1>Services list</h1>
<!-- <input type="text" id="abc" placeholder="Search.....">  -->
<?php
while($row = mysqli_fetch_row($res)) 
{
    ?>
   <table>     
        <tr>
        <th>ID:-</th>
        <td><?php echo $row[0]; ?></td>
        </tr>
        <tr>
        <th>services:-</th>
        <td><?php echo $row[1]; ?></td>
        </tr>
        <tr>
        <th>Category:-</th>
        <td><?php echo $row[2]; ?></td>
        </tr>
        <tr>
        <th>Eligibility:-</th>
        <td><?php echo $row[3]; ?></td>
        </tr>
        <tr>
        <th>Reuired doument</th>
        <td><?php echo $row[4]; ?></td>
        </tr>
        <th>Time-limit</th>
        <td><?php echo $row[5]; ?></td>
        </tr>
        </table>
        <br>

   &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="login.php"><input type='button' class='ver' name='Apply' value='Apply'></a>
<br> <br>

        
        <?php
}
?>
 </div>
    <footer id="footer"></footer>

<!-- JS VENDOR -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/owl.carousel.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>

<!-- SENDMAIL -->
<script src="js/vendor/validator.min.js"></script>
<script src="js/vendor/form-scripts.js"></script>

<script src="js/script.js"></script>

   
<?php
echo $hf;

?>