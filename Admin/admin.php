<?php
session_start();
if(isset($_SESSION['email']))
{
	include 'includes/header.php';

	include 'includes/sidebar.php';
	include 'includes/topbar.php';
?>
<style>
nav{
   float:right;

}
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
							<td class='name'><center>User Name</center></td>
							<td class='ope'><center>Operation</center></td>
							<td class='ope'><center>Operation</center></td>
							<td></td>
						</tr>
					</thead>
				<tbody>	
				<?php
			$res=mysqli_query($con,"Select * from admin");
			while($row=mysqli_fetch_row($res))
			{
				echo "<tr><td><center>$row[0]</center></td><td><center>$row[1]</center></td><td><center><b><a href='up_admin.php?id=$row[0]'>Update</a></b></center></td><td><center><b><a href='del_admin.php?id=$row[0]'>Delete</a></b></center></td></tr>";
			}
			?>
				</tbody>
            </table>
			

</div>
<a href="add_admin.php">Add new Admin</a>
				</div>
			</div>
	</section><!--/form-->
<?php
include 'includes/footer.php';
}
else
  header("Location:index.php");

?>