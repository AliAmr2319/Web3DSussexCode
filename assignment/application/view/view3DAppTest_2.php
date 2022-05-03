<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<meta charset="UTF-8">
	<title>Test View</title>
    <style>
        h1 {
            color:red;
            margin-left: 5px;
        }
        h2 {
            color:blue;
            margin: 5px;
        }
        p {
            color:green;
            margin-left: 5px;
        }
        .imgBox {
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }

        .box{
            border: 1px solid rgba(0, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            height: 280px;
        }
    </style>

</head>
<body>
	<br>
    <p>If you are seeing this, then this is confirmation that the MVC framework is working for the entire website. </p>
    <div class="box">
        <h2><?php echo $model_1 ?></h2>
        <a href="galleryimages/cokecan.png" data-lightbox="mygallery" data-title="Modelled Coke Can Blender"><img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_1?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_2 ?></h2>
          <a href="galleryimages/fantacan.png" data-lightbox="mygallery" data-title="Modelled Fanta Can Blender"><img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_2 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_3 ?></h2>
          <a href="galleryimages/sprite.png" data-lightbox="mygallery" data-title="Modelled Sprite Can Blender"><img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_3 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_4 ?></h2>
          <a href="galleryimages/spriteglass.png" data-lightbox="mygallery" data-title="Modelled Sprite Bottle Blender"><img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_4 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_5 ?></h2>
          <a href="galleryimages/water.png" data-lightbox="mygallery" data-title="Modelled SmartWater Cup Blender"><img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_5 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_6 ?></h2>
          <a href="galleryimages/zero.png" data-lightbox="mygallery" data-title="Modelled Coke Zero Can Blender"><img class="imgBox" src='./assets/images/gallery_images/<?php echo $image3D_6 ?>.png'>
    </div>

</body>
</html>
