<!DOCTYPE html>
<html>
<head>
	<title>
		Nyasar?		
	</title>
	<?php $this->load->view('partials/load_css');?>
</head>
<body background="<?php echo base_url().'assets/img/as.png'; ?>" >
	<div class="row">
		<div class="col-md-12" style="align: center; text-align: center; margin-top: 10%">
			<img src="<?php echo base_url().'assets/img/404_logo.png'; ?>" width="300px"><br />
			<font style="font-weight: bold; color: #b30000; font-size: 500%; font-family: Brush Script Std;">
				Page not found
			</font><br/>
			 <a href="<?php echo base_url(); ?>">
			 	<button type="button" class="btn btn-success">
			 		<font style="font-weight: bold; font-size: 120%; font-family: Bahnschrift Condensed;">
			 			Back to Home
			 		</font>
			 	</button>
			 </a>
		</div>
	</div>
</body>
</html>