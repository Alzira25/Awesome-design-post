<?php
include __DIR__ . '/libs/functions.php';
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CODE INVENTOR | Design Post</title>
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
</head>

<body>
<div class="container display-table">
    <div class="row display-table-row">

        <!--CONTENT-->
        <div id="home-content">
            <div class="display-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-container">

                            <form action="design-post.php" id="myForm" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="text">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="Title of the Design">
                                </div>

                                <div class="form-group">
                                    <label for="creator">Creator</label>
                                    <input type="text" class="form-control" name="creator" id="creator"
                                           placeholder="Creator of the Design">
                                </div>

                                <div class="form-group">
                                    <label for="date">Expiry Date</label>
                                    <input type="date" class="form-control" name="date" id="datepicker">
                                </div>

                                <div class="form-group">
                                    <label for="text">Choose your Graphic Design</label>
                                    <select class="form-control" name="graphic">
                                        <option>Logo</option>
                                        <option>Banner</option>
                                        <option>Poster</option>
                                        <option>Not Specify</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="text">Choose your Website Design</label>
                                    <select class="form-control" name="website">
                                        <option>Mockup</option>
                                        <option>Templates</option>
                                        <option>Themes</option>
                                        <option>Not Specify</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           placeholder="Price of the Design">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description"
                                              placeholder="Write a full brief about your Designs" rows="10"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="keywords">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" id="keywords"
                                           placeholder="Keywords for the Design">
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
                                    <p class="help-block">The file will not display in details page. Only after buyer's
                                        payment is done successfully, they will receive your file by email.</p>
                                </div>

                                <input type="submit" class="btn btn-primary center-block" id="post" name="post"
                                       value="POST DESIGNS"/>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--SCRIPT-->

<script>
//    window.setTimeout(function () {
//        $(".alert").fadeTo(500, 0).slideUp(500, function () {
//            $(this).remove();
//        });
//    }, 4000);
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
