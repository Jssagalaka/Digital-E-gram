<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "e_gram");

if (!isset($_SESSION["admin"])) {
    header("Location: index.php"); // Redirect to the login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTables.min.css">

    <!-- DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
</head>

<?php
include 'includes/header.php';

include 'includes/sidebar.php';
include 'includes/topbar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
  <br><br><br><br>

        <section id="cart_items"><!--form-->
	<div class="container">
		<div class="col-sm-10"  style = "margin:0 0 0 100px;">
			  <div class="table-responsive cart_info">
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
							<td class='id'><center>Id</center></td>
							<td class='fnm'><center>FirstName</center></td>
							<td class='lnm'><center>LastName</center></td>
							<td class='gen'></center>Gender</center></td>
							<td class='mail'><center>Email</center></td>
							<td class='pono'><center>Phone</center></td>
							<td class='add'><center>Address</center></td>
							
							<td class='detail'><center>More details</center></td>
						
							<td class='ope'><center>&nbsp&nbsp&nbsp&nbsp&nbsp operation</center></td>
							<td></td>
						</tr>
					</thead>
				<tbody>	
				<?php
				$res=mysqli_query($con,"select * from register");
				while($row=mysqli_fetch_row($res))
				{
					echo "<tr>";
					echo "<td>$row[0]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[5]</td>
					<td>$row[9]</td>
					<td>$row[6]</td>
					<td>$row[8]</td>
					<td><b><a href='view_rdetail.php?id=$row[0]'><center>view</center></b></a>
					<td><b><a href='up_registration.php?id=$row[0]'><center>Update</center></b></a>
					<td><b><a href='del_registration.php?id=$row[0]'><center>Delete</center></b></a>";
					echo "</tr>";
				}
				?>
				</tbody>
				</table>
				</div>
				</div>
			</div>
	</section><!--/form-->

				</tbody>
				</table>
				</div>
				</div>
			</div>
	</section><!--/form-->


        

    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>



    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>