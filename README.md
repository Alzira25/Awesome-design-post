# Awesome-design-post

Hello there,

I have just started my new project last November and I have put into practice. In order to complete my first project, I need your help in posting the digital designs along with zip files to upload. I have tried Many to one relationship in php but I'm a bit confused so how to put the code in accordingly. I have one form which contains all the name along with upload file (main image, image1, image2, image2 and zip files).


<?php
error_reporting(E_ALL);
include("functions/func.php");
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Code Inventor">
  	<meta name="keywords" content="Graphics & Web designer, HTML, CSS, JavaScript, Bootstrap">
  	<meta name="author" content="Code Inventor">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CODE INVENTOR | Design Post</title>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vendor/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


 
  <style type="text/css">
    #upload{
      max-width: 19%;
      margin-top: 1em;
    }

    #upload_file{
      margin-top: 1em;
    }
    
  </style>


 </head>

 
<body>
<div class="container-fluid display-table">
   <div class="row display-table-row">

        <!--CONTENT-->

        <div id="home-content">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="design-display">
        				<header class="clearfix">
        					<h5 class="pull-left"><strong>Post your Design</strong></h5>
        				</header>
        			</div><!--design display-->	        	
        		</div><!--col-md-8-->
        	</div><!--row-->

        		      	<div class="display-content">
        					   <div class="row">
                      <div class="col-md-12">
        							 <div class="post-container">

                      <form action="design-post.php" id="myForm" method="post" enctype="multipart/form-data">
        								  
                          <div class="form-group">
    										    <label for="text">Title</label>
    											   <input type="text" class="form-control" name="title" id="title" placeholder="Title of the Design">
  										    </div>

  										<div class="form-group">
    										<label for="creator">Creator</label>
    											<input type="text" class="form-control" name="creator" id="creator" placeholder="Creator of the Design">
  										</div>

                      <div class="form-group">
                        <label for="date">Expiry Date</label>
                          <input type="date" class="form-control" name="date" id="datepicker"></p>
                      </div>      
                
                      <div class="form-group">
    										<label for="text">Choose your Graphic Design</label>
    											<select class="form-control" name="graphic">
                            <?php 
          
                                $get_cats = "SELECT * FROM categories"; 
                                $run_cats = mysqli_query($con, $get_cats);
                                while ($row_cats = mysqli_fetch_array($run_cats)){
                          
                                $cat_id = $row_cats['cat_id'];
                                $cat_title = $row_cats['cat_title'];
                          
                                echo "<option value='$cat_id'><a href='#'>$cat_title</a></option>";
                                }
                                    
                            ?>
												    <option>Not Specify</option>
											    </select>
  										</div>

  										<div class="form-group">
    										<label for="text">Choose your Website Design</label>
    											<select class="form-control" name="website">
                            <?php 
          
                                $get_webs = "SELECT * FROM webs"; 
                                $run_webs = mysqli_query($con, $get_webs);
                                while ($row_webs = mysqli_fetch_array($run_webs)){
                          
                                $web_id = $row_webs['web_id'];
                                $web_title = $row_webs['web_title'];
                          
                                echo "<option value='$web_id'><a href='#'>$web_title</a></option>";
                                }
                              ?>
												    <option>Not Specify</option>
												  </select>
  										</div>

  										<div class="form-group">
    										<label for="price">Price</label>
    											<input type="text" class="form-control" name="price" id="price" placeholder="Price of the Design">
  										</div>

  										<div class="form-group">
    										<label for="description">Description</label>
    											<textarea class="form-control" name="description" placeholder="Write a full brief about your Designs" rows="10"></textarea>
  										</div>

  										<div class="form-group">
    										<label for="keywords">Keywords</label>
    											<input type="text" class="form-control" name="keywords" id="keywords" placeholder="Keywords for the Design">
  										</div>

  										<div class="form-group">
        									<label for="images">Upload Your Main Design</label>
        										<input type="file" name="main_image"/>
                            <p class="help-block">Select the design which is the main to display</p>
                      </div>
                      <div class="form-group">
                          <label for="images">Upload Your Designs</label>
                            <input type="file" id="upload_file" name="images_1"/>
                            <input type="file" id="upload_file" name="images_2"/>
                            <input type="file" id="upload_file" name="images_3"/>
                            <p class="help-block">Select the design for more examples</p>
                      </div>
                      
                      <div class="form-group">
                          <label for="images">Upload Your Project Zip files</label>
                            <input type="file" name="zip_file" id="upload_file"/>
                            <p class="help-block">The file will not display in details page. Only after buyer's payment is done successfully, they will receive your file by email.</p>
                      </div>
										
                    	<input type="submit" class="btn btn-primary center-block" id="post" name="post" value="POST DESIGNS"/>
										  		
  										</form>

									   </div><!--post-container-->
        						</div><!--col-md-12-->
        					</div><!--row-->
				</div><!--display-content-->
        	</div><!--home content-->
		</div><!--col-md-10-->
	</div><!--row display-->
</div><!--container fluid-->

<!--SCRIPT-->

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="vendor/tether-1.3.3/dist/js/tether.min.js"></script>
<script src="vendor/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="js/default.js"></script>

</body>
</html>
<?php

if(isset($_POST['post'])){
                          
                          //getting the text data from the fields
                          $title = $_POST['title']; 
                          $creator = $_POST['creator'];
                          $date = $_POST['date'];
                          $graphic = $_POST['graphic'];
                          $website = $_POST['website'];
                          $price = $_POST['price'];
                          $description = $_POST['description'];
                          $keywords = $_POST['keywords'];
                          
                              
                          //getting the image name from the fields
                          $main = $_FILES['main_image']['name'];
                          $images_1 = $_FILES['images_1']['name'];
                          $images_2 = $_FILES['images_2']['name'];
                          $images_3 = $_FILES['images_3']['name'];

                          //image tmp name
                          $main_tmp = $_FILES['main_image']['tmp_name'];
                          $images_tmp_1 = $_FILES['images_1']['tmp_name'];
                          $images_tmp_2 = $_FILES['images_2']['tmp_name'];
                          $images_tmp_3 = $_FILES['images_3']['tmp_name'];


                          move_uploaded_file($main_tmp, "design_images/$main");
                          move_uploaded_file($images_tmp_1, "design_images/$images_1");
                          move_uploaded_file($images_tmp_2, "design_images/$images_2");
                          move_uploaded_file($images_tmp_3, "design_images/$images_3");

                          
                          $filename = $_FILES["zip_file"]["name"];
                          $source = $_FILES["zip_file"]["tmp_name"];
                          $type = $_FILES["zip_file"]["type"];
                          
                          $name = explode(".", $filename);
                          $accepted_types = array('zip');
                          if (!in_array(pathinfo($_FILES['zip_file']['name'], PATHINFO_EXTENSION), $accepted_types)){
                              echo "<div class='alert alert-danger' id='success-alert'>";
                              echo "<strong>You can't upload this file. Only file with extension .zip is allowed!</strong>";
                              echo "</div>";
                              echo "<script>window.open('design-post.php','_self')</script>";
                          }
                                  
                          $target_path = "zip_files/".$filename;  // change this to the correct site path
                          move_uploaded_file($source, $target_path);
                                                 
                         $insert_design = "INSERT INTO products (product_cat, product_web, product_title, product_author, product_expired, product_price, product_desc, product_main_image, product_image_1, product_image_2, product_image_3, zip_file, product_keywords, product_date) VALUES ('$graphic','$website','$title','$creator','$date','$price','$description','$main','$images_1','$images_2','$images_3','$filename','$keywords',NOW())";
                                                
                          $run_design = mysqli_query($con, $insert_design);
                        
                          if($run_design){
                              echo "<div class='alert alert-success' id='success-alert'>";
                              echo "<strong>Your Awesome design has been posted!</strong>";
                              echo "</div>";
                              echo "<script>window.open('design-post.php','_self')</script>";
                            }
                          }
                        ?>
