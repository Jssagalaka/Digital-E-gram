<?php
session_start();
if(isset($_SESSION['email']))
{
    include 'includes/header.php';

	include 'includes/sidebar.php';
	include 'includes/topbar.php';
?>
<style>
    .cart_menu{
	background-color:#33FFFC;
}
</style>
<section id="cart_items"><!--form-->
	<div class="container">
		<div class="col-sm-7"  style = "margin:0 0 0 260px;">
			  <div class="table-responsive cart_info">
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
							<td class='id'><center>Id</center></td>
							<td class='name'><center>Service Name</center></td>
							<td class='email'><center>category</center></td>
							<td class='ope'><center>Eligibility</center></td>
							<td class='ope'><center>required document</center></td>
							<td class='ope'><center>time limit</center></td>
							<td class='ope'><center>Operation</center></td>
							<td></td>
						</tr>
					</thead>
				<tbody>	
			<?php
			$res=mysqli_query($con,"Select * from services");
			while($row=mysqli_fetch_row($res))
			{
				echo "<tr><td><center>$row[0]</center></td><td><center>$row[1]</center></td><td><center>$row[2]</center></td><td><center>$row[3]</center></td><td><center>$row[4]</center></td><td><center>$row[5]</center></td><td><a href='up_service.php?id=$row[0]'>Update</a></td><td><a href='del_service.php?id=$row[0]'>Delete</a></td></tr>";
			}
			?>
				</tbody>
            </table>
			
	
		
				</div>
				<a href="add_service.php">Add new Services</a>

				</div>
			</div>
	</section><!--/form-->
<?php
include 'includes/footer.php';
}
else
  header("Location:index.php");

?>