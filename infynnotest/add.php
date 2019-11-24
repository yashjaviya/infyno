<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title> Virtual Tournament Admin</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/fonts/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<link href="<?php echo base_url();?>vendors/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/fonts/iconic/css/material-design-iconic-font.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/animate/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/css-hamburgers/hamburgers.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/animsition/css/animsition.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/select2/select2.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>vendors/daterangepicker/daterangepicker.css" rel="stylesheet">
		

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
	
	<!-- Apply Addition style -->
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/util.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/datepicker.css" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/screen.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-tagsinput.css">
	
  </head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  <div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add New User</h2>
				<div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url('admin/add_new_user'); ?>" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="full_name" name="full_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nick Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nick_name" name="nick_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" name="email" class="form-control col-md-7 col-xs-12" type="email" required="required">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile no.<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="mobile_no" id="mobile_no" class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="radio" name="gender" id="gender" value="male">Male
							<input type="radio" name="gender" id="gender" value="female">Female
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="date_o_birth" name="date_o_birth" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="address"  id="address"  class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                      </div>
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Country<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="country" id="country" required="required">
							<option disabled ></option>
							<?php foreach($countries as $row)
							{ ?>
								<option><?php echo $row['name']; ?></option>
							<?php } ?>
						</select>	
                        </div>
                      </div>
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">State<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" id="state" name="state"  required="required">
							<option disabled>---select---</option>
						</select>	
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">City<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="city" class="form-control col-md-7 col-xs-12" name="city"  required="required">
							<option disabled>---select---</option>
						</select>							
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">PSN ID name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="psn_id_name" id="psn_id_name" >							
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Xbox live ID name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="xbox_live_id_name" id="xbox_live_id_name" >						
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">PC ID name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control col-md-7 col-xs-12" name="pc_id_name" id="pc_id_name">						
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Profile<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" name="logo" class="form-controller" required>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
		</div>
	</div>
</div>
<!-- end new user genrate -->
<script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>build/js/custom.min.js"></script>
   
   <!--Ckeditor-->
   <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
	
	 <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	 <script src="<?php echo base_url();?>assets/js/bootstrap-tagsinput.js"></script>
	
  </body>
</html>

<script>
$(document).ready(function()
{
	$('#date_o_birth').datepicker();
	$('#country').on('change',function()
		{
			$('#state').empty();
			$('#city').empty();
			var contry = $('#country').find(":selected").val();
			
			$.ajax({
				type:'post',
				url:'<?php echo base_url('admin/states'); ?>',
				data:{contry:contry},
				success:function(response)
				{	
					if(response!="")
					{
						
						var obj = JSON.parse(response);
						
						$('#state').append("<option value='' selected readonly>--Select Option--</option>");
						for(var i=0;i<= obj.length-1;i++)
						{
							$('#state').append("<option value='"+obj[i]['name']+"'>"+obj[i]['name']+"</option>");
						}
					}
				}
		});
	});
	$('#state').on('change',function()
		{
			var state = $('#state').find(":selected").val();
			$('#city').empty();
			$.ajax({
				type:'post',
				url:'<?php echo base_url('admin/cities'); ?>',
				data:{state:state},
				success:function(response)
				{	
					if(response!="")
					{
						var obj = JSON.parse(response);
						$('#city').append("<option value='' selected readonly>--Select Option--</option>");
						for(var i=0;i<= obj.length-1;i++)
						{
							$('#city').append("<option value='"+obj[i]['name']+"'>"+obj[i]['name']+"</option>");
						}
					}
				}
		});
	});
});
</script>