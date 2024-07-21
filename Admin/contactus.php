<?php
session_start();
if(isset($_SESSION['email']))
{
	include 'includes/header.php';

	include 'includes/sidebar.php';
	include 'includes/topbar.php';
?>
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4"  style = "margin:0 0 0 400px;">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info!</h2>
	    				<address>
	    					<p><b>Digital E-gram panchayat</b></p>
							<p>Waterfield Road,Bandra West,</p>
							<p>Mumbai</p>
							<p>Mobile: 9979583428</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: egram@gmail.com</p>
	    				</address>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
	include 'includes/footer.php';
}
else
  header("Location:index.php");

?>