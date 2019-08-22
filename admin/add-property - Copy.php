<?php 
session_start();
include_once('classess/config.php');
include_once('classess/function.php');

$admin_obj= new ADMIN(); 
$error = false;
$err_msg = '';



if(!$admin_obj->isadminLoggedIn())
    {
    header("Location:login.php");
    exit(0);
    }
    

//print_r($subadmin);
//exit(0);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <?php require_once 'head.php'; ?>
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
		<link href="datepicker/css/datepicker.css" rel="stylesheet">
		
		
		
    </head>
    <body hoe-navigation-type="vertical" hoe-nav-placement="left" theme-layout="wide-layout">

        <!--side navigation start-->
        <div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop">
           <?php require_once 'header.php'; ?>
            <div id="hoeapp-container" hoe-color-type="lpanel-bg7" hoe-lpanel-effect="shrink">
                <?php require_once 'side-menu.php'; ?>
                <!--start main content-->
                <section id="main-content">
                   <div class="container">
                     <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row mail-header">
                                            <div class="col-md-6">
                                                <h3>ADD PROPERTY DETAILS</h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <center><div id="error_msg"></div></center>
                                        <form role="form" class="form-horizontal" method="post" id="add-property-form">
                                            
                                        <div class="form-group"><label class="col-lg-3 control-label">Select Category</label>
                                             <div class="col-lg-5">
                                                <select  name="category" id="category" class="form-control" required>
                                                    <option value="">Select Category</option>
                                                    <option value="1">Features</option>
                                                    <option value="2">Apartments</option>
                                                    <option value="3">Houses</option>
                                                    <option value="4">Family Houses</option>
                                                    <option value="5">Offices</option>
                                                    <option value="6">Villas</option>
                                                    <option value="7">Other</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">Location</label>
                                            <div class="col-lg-5">
											   <input type="text" placeholder="Location" name="location" id="location" class="form-control" required>
											</div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">Name</label>
                                            <div class="col-lg-5"><input type="text" placeholder="Property Name" name="name" id="name" class="form-control" required></div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">Bed Room</label>
                                            <div class="col-lg-5"><input type="number" placeholder="Bed Room" name="bedroom" id="bedroom" class="form-control" required></div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">Bath Room</label>
                                            <div class="col-lg-5"><input type="number" placeholder="Bath Room" name="bathroom" id="bathroom" class="form-control" required></div>
                                        </div>
										<div class="form-group"><label class="col-lg-3 control-label">Area</label>
                                            <div class="col-lg-5"><input type="number" placeholder="Area" name="area" id="area" class="form-control" required></div>
                                        </div>
										<div class="form-group"><label class="col-lg-3 control-label">Garage</label>
                                            <div class="col-lg-5"><input type="number" placeholder="Garage" name="garage" id="garage" class="form-control" required></div>
                                        </div>
										<div class="form-group"><label class="col-lg-3 control-label">Price</label>
                                            <div class="col-lg-5"><input type="number" placeholder="Price" name="price" id="price" class="form-control" required></div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">Property Description</label>
                                            <div class="col-lg-5"><textarea placeholder="Property Description" name="propert_des" id="propert_des" class="form-control" required></textarea></div>
                                        </div>
                                        
                                        <div class="form-group"><label class="col-lg-3 control-label">Property Image</label>
                                            <div class="col-lg-5"><input type="file" placeholder="Property Image" name="image" id="image" class="form-control" required></div>
                                        </div>
                                        
										<!-- <div class="form-group"><label class="col-lg-3 control-label">Date</label>
                                            <div class="col-lg-5"><input type="text" placeholder="Property Image" name="datepickerDate" id="datepickerDate" class="form-control" required></div>
                                        </div>-->
										
                                        <div class="form-group"><label class="col-lg-3 control-label">Select Status</label>
                                             <div class="col-lg-5">
                                                <select  type="text"  name="status" id="status" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                           
                                       <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-10">
                                                <div class="pull-left">
                                                    <button class="btn btn-primary rounded" type="submit" name="sub" id="sub">Submit</button>
                                                    <a href="manage-property.php"><button type="button" class="btn btn-danger rounded" >Cancel</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div><!--col end-->
                        </div>
                   </div> <!--end container-->

                    <?php require_once 'footer.php'; ?>
                </section><!--end main content-->
            </div>
        </div><!--end wrapper-->
        <!--Common plugins-->
        <?php require_once 'script.php'; ?>
        <script src="assets/plugins/summernote/summernote.min.js"></script>

        <!--page scripts-->
        
        <!-- Flot chart js -->
         <script src="assets/js/bootstrap-dialog.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script src="datepicker/js/bootstrap-datepicker.js"></script>
        <script src="validation/add-property.js" type="text/javascript"></script>
		
		<script>
		$('#datepickerDate').datepicker({
                    startDate: new Date(), 
                    		
		  format: 'dd-mm-yyyy'
		 
		});
		</script>

    </body>
</html>