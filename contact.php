<?php
/*
Template Name: Contact Us Page
*/
?>
<?php include 'header.php'; ?>
<div class="content">
	<div class="container">
		<div class="left-hand">
			<h1>Contact Us</h1>
			<form>
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Email Address">
				<input type="text" placeholder="Subject">
				<textarea placeholder="Message"></textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
		<?php include 'sidebar.php'; ?>
	</div>
	<?php include 'footer.php'; ?>