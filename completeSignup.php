<?php
require 'inc/header.php';
require 'classes/getDropdowns.php';
/*
 * The purpose of this file is to complete the signup process as started in addTutor.php
 */
//if(isset($_REQUEST['userID'])){
?>
<body>
<div class="container-fluid">
    <section class="container">
		<div class="container-page">
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>

				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Password</label>
           <input list="states">
           <select id="states">
             <?php echo $runDropdowns->getStates($conn) ?>
           </select>
					<!--input type="password" name="" class="form-control" id="" value=""-->
				</div>

				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Repeat Email Address</label>
					<input type="" name="" class="form-control" id="" value="">
				</div>

				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Sigh up for our newsletter
				</div>

				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Send notifications to this email
				</div>

			</div>

			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to The Company\'\s\'\ Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations -
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
				</p>
				<p>
					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
				</p>
				<p>
					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
				</p>

				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</div>
	</section>
</div>
<?php
  require 'inc/footer.php';
?>
