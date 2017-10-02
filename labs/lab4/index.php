<?php
    $backgroundImage="slider/img/sea.jpg";
    
    // API call goes here
    if(isset($_GET['keyword'])){
        include 'slider/api/pixabayAPI.php';
        $imageURLs = getImageURLs($_GET['keyword']);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
?>
<html>
    <head>
        <title>Image Carousel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/css" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            @import url("slider/css/styles.css");
            body{
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
    </head>
    <body>
        <br /><br />
        <?php
            if(!isset($imageURLs)){
                echo "<h2>Type a keyword to display a slideshow <br /> with random images from Pixabay.com </h2>";
            } else {
                // Display carousel here
        ?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators here -->
            <ol class="carousel-indicators">
                <?php
                    for($i=0; $i<5; $i++){
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)?" class='active'": "";
                        echo "></li>";
                    }
                ?>
            </ol>
            <!-- Wrapper for images -->
            <div class="carousel-inner" role="listbox">
                <?php
                    for($i=0; $i<5; $i++){
                        do{
                            $randomIndex = rand(0, count($imageURLs));
                        } while (!isset($imageURLs[$randomIndex]));
                    
                        echo "<img src='" . $imageURLs[$randomIndex] . "' width='200' >";
                        unset($imageURLs[$randomIndex]);
                    }
                    echo '<div class= "item ';
                    echo ($i==0)?"active": "";
                    echo '">';
                    echo '<img src"' . $imageURLs[$randomIndex] . '">';
                    echo '</div>';
                    unset($imageURLs[$randomIndex]);
            }
                ?>
            </div>
            <!-- Controls here -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
             </a>
             <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
             </a>
        </div>
        <!-- html form goes here -->
        <form>
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="submit" value="Submit" / >
        </form>
        <br /><br />
    </body>
</html>
