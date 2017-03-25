<?php

if (isset($_POST['post'])) {

    //getting the text data from the fields
    $title = sanitize($_POST['title']);
    $creator = sanitize($_POST['creator']);
    $date = sanitize($_POST['date']);
    $graphic = sanitize($_POST['graphic']);
    $website = sanitize($_POST['website']);
    $price = sanitize($_POST['price']);
    $description = sanitize($_POST['description']);
    $keywords = sanitize($_POST['keywords']);


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
    $accepted_types = ['zip'];
//    if (!in_array(pathinfo($_FILES['zip_file']['name'], PATHINFO_EXTENSION), $accepted_types)) {
//        echo "<div class='alert alert-danger' id='success-alert'>";
//        echo "<strong>You can't upload this file. Only file with extension .zip is allowed!</strong>";
//        echo "</div>";
//        echo "<script>window.open('index.php','_self')</script>";
//    }

    $target_path = "zip_files/" . $filename;  // change this to the correct site path
    move_uploaded_file($source, $target_path);

    $data_to_insert = [
        'product_cat' => $graphic,
        'product_web' => $website,
        'product_title' => $title,
        'product_author' => $creator,
        'product_expired' => $date,
        'product_price' => $price,
        'product_desc' => $description,
        'product_main_image' => $main,
        'product_image_1' => $images_1,
        'product_image_2' => $images_2,
        'product_image_3' => $images_3,
        'zip_file' => $filename,
        'product_keywords' => $keywords,
        'product_date' => (new DateTime('now'))->format('Y-m-d G:i:s'),
    ];

//    $insert_design = "INSERT INTO products (
//product_cat, product_web, product_title, product_author, product_expired, product_price, product_desc, product_main_image, product_image_1, product_image_2, product_image_3,
//zip_file, product_keywords, product_date)
//VALUES ('$graphic','$website','$title','$creator','$date','$price','$description','$main','$images_1','$images_2','$images_3','$filename','$keywords',NOW())";
//
//    $run_design = mysqli_query($mysqli, $insert_design);

    $db->insert('products', $data_to_insert);

//    if ($run_design) {
//        echo "<div class='alert alert-success' id='success-alert'>";
//        echo "<strong>Your Awesome design has been posted!</strong>";
//        echo "</div>";
//        echo "<script>window.open('design-post.php','_self')</script>";
//    }
}
