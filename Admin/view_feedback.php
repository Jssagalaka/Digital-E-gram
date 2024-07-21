<?php
session_start();

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
							<td class='name'><center>Name</center></td>
							<td class='email'><center>EmailID</center></td>
							<td class='operation'><center>Message</center></td>
							<td></td>
						</tr>
					</thead>
				<tbody>	
				<?php
				$res=mysqli_query($con,"select * from feedback");
				while($row=mysqli_fetch_row($res))
				{
					echo "<tr>";
					echo "<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
				
	

					<td><a href='del_feedback.php?id=$row[0]'><strong>Delete</strong></a>";
					echo "</tr>";
				}
				?>
				</tbody>
				</table>
				</div>
				</div>
			</div>
	</section><!--/form-->
<?php
 include 'includes/footer.php';

?>