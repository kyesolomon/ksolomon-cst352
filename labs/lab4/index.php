<?php
include 'slider/api/pixabayAPI.php';
$backgroundImg = "slider/img/sea.jpg";
// function getImages() {
if ( isset($_GET['keyword']) ) {
    
    $keyword = $_GET['keyword']; 
    
    if (!empty($_GET['category']) ) {  
        $keyword = $_GET['category']; 
    }
    
    if (isset($_GET['layout'])) {
        $imageURLs = getImageURLs($keyword, $_GET['layout']);
    } 
    else {
         $imageURLs = getImageURLs($keyword);
    }
    
    $randomIndex = array_rand($imageURLs);
    $backgroundImg = $imageURLs[$randomIndex]; 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- CSS -->
        <style>
            @import url('css/styles.css');
            body {
                background-image: url('<?=$backgroundImg?>'); /* set background img to whatever value of $backgroundImg is */
                background-size: cover;
            }
        </style>
    </head>
    
    <body>
        
        <div class="container">
          
          <div class="row">
            <div class="col">
              <h1>Pixabay Image Search</h1>
            </div>
          </div>
          
          <div class="row">
              <!-- form goes here -->
              <div class="col">
                  <form>
                    <input type="text" name="keyword" placeholder="Search images" />
                    
                    <div id="layoutStyle">
                      <input id="lhorizontal" type="radio" name="layout" value="horizontal"/>
                      <label for="lhorizontal">Horizontal</label>
                      
                      <input id="lvertical" type="radio" name="layout" value="vertical" /> 
                      <label for="lvertical">Vertical</label>              
                    </div>
                    
                    <select name="category">
                        <option value="">Select One</option>
                        <option value="ocean">Sea</option>
                        <option>Forest</option>
                        <option>Snow</option>
                    </select>
                    
                    <br />
                    <input type="submit" name="Search"/>
                    
                </form>
        
                  <?php
                  
                  if (!isset($_GET["keyword"])) { 
                      echo "<h2>Type a keyword to display a slideshow with random images from Pixabay.com</h2>";
                  } else { 
                      
                       if ( empty($_GET['keyword']) && empty($_GET['category']) )  {
                      
                              echo "<div id='errorMsg'>";
                              echo "<h2 style='color:red'> ERROR: You must select a category or type a keyword</h2>";
                              return;
                              exit; 
                              echo "</div>";
                        }
          
                      shuffle($imageURLs);
                      
                  ?>                
              </div>
          </div>
          
          <div class="row">
            <!-- carousel goes here -->
            <div class="col">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators go here -->
              <ol class="carousel-indicators">
                <?php
                    for ($i = 0; $i < 7; $i++) {
                        echo "<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0)?" class='active'": "";
                        echo "></li>";
                    }
                ?>
              </ol>
            
              <!-- Wrapper goes here -->
              <div class="carousel-inner" role="listbox">
                 <?php
                    for ($i = 0; $i < 7; $i++) {
                        do {
                            $randomIndex = rand(0, count($imageURLs));
                        }
                        while (!isset($imageURLs[$randomIndex]));
                        
                        echo '<div class="item ';
                        echo ($i == 0)?"active": "";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    } 
                ?>
              </div>
            
              <!-- Controls go here -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <?php    
              } 
            ?>
            
            </div> 
            
          </div> 
          
        </div> 
            
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    </body>
</html>
