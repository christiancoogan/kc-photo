<?php 

    $dirname = "images/thumb/";
    $images = glob($dirname."*.jpg");
    $imgs = array();

    //For each image in the main image folder copy the image data to array 
    foreach($images as $image) {
        if(!is_dir($image))
            //echo '<img id="test" src="'.$image.'" /><br />';
            $imgs[] = $image;
    }
        
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>KC Photo</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Asap:700|Dancing+Script|Encode+Sans" rel="stylesheet">
    
</head>
<body>
    
    <!-- Hero image -->
    <div class="header-image">

        <!-- Hero image text -->
        <div class="header-text">
            <h1>KC Photo</h1>
            <img src="images/hero.jpg">
        </div>

    </div>
    
    <!-- Divide sections of the page -->
    <div class="seperator"></div>
    
    <!-- Fixed background image -->
    <div class="background-image background1"></div>
    
    <!-- Main info  -->
    <main>
        <!-- Add more content here about the photographer -->
        <div class="sub-content">
            <div class="flex-container">
                <div class="about">
                    <h1>About The Photographer</h1>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum condimentum, orci sed viverra porta, libero massa blandit eros, a blandit justo felis ac velit. Donec et ex risus. Aliquam erat volutpat. Integer at erat lorem. Quisque tempus, risus eget varius varius, lectus lacus viverra ligula, et tempor magna enim vitae lacus. Suspendisse ac pellentesque dui. Sed ullamcorper ligula sit amet turpis sodales, a accumsan quam feugiat.
                </div>
            </div>
        </div>
        <p>Contact the photographer at email@kcphoto.com</p><br>
    </main>
    
    <!-- Fixed background image -->
    <div class="background-image background2">
    </div>
    
    <!-- Divide sections of the page -->
    <div class="seperator">
    </div>
    
    <!-- Container for the gallery -->
    <div class="gallery_container">
        
        <!-- Hidden class for the image overlay when a thumbnail is clicked -->
        <div class="image-overlay">
            
            <!-- Source generated from clicked image in overlay.js -->
            <img src="" />    
        </div>
        
        <!-- Gallery is generated in here -->
        <ul id="result"><h1>Click a photo to enlarge it!</h1></ul>
    </div>
    
    <!-- Social Content -->
    <footer>
        <div class="social-media">
            <a href="#"><img class="social-button" src="images/social/facebook-icon-preview-200x200.png"></a>
            <a href="#"><img class="social-button" src="images/social/twitter-icon-65.png"></a>
        </div>
    </footer>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Temporary solution to pass images generated with php to gallery.js -->
    <script>
        var a = <?php echo json_encode($imgs); ?>;
    </script>
    <script src="js/gallery.js">
    </script>
    <script src="js/overlay.js"></script>
    


</body>
</html>