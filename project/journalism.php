
<html>
    <head>
        <meta charset="utf-8">
        <title>Anime</title>
        <link rel ="stylesheet" href="/style.css">
        <link href="https://fonts.googleapis.com/css?family=Ewert" rel="stylesheet">
        <h1 id="aFont">Anime</h1>
    </head>
   <body>
        <div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="/index.php">Home</a>
            </li>
            <li> <a href="#">Store Department</a>

                <ul>
                    <li><a href="/movie.php">Movies</a>
                    </li>
                    <li><a href="/video_game.php">Video Games</a>
                    </li>
                    <li><a href="/shopping_cart.php">Cart</a>
                    </li>
                </ul>
            </li>
             <li> 
                <a href="#">Animes Titles</a>
                 <ul>
                       <li><a href = "https://myanimelist.net/anime/30276/One_Punch_Man/">One Punch Man.</a>
                       <li><a href = "https://myanimelist.net/manga/1517/JoJo_no_Kimyou_na_Bouken_Part_1__Phantom_Blood/">JJBA Part 1.</a>
                       <li><a href = "https://myanimelist.net/manga/1630/JoJo_no_Kimyou_na_Bouken_Part_2__Sentou_Chuuryuu/">JJBA Part 2.</a>
                       <li><a href = "https://myanimelist.net/manga/872/JoJo_no_Kimyou_na_Bouken_Part_3__Stardust_Crusaders/">JJBA Part 3.</a>
                       <li><a href = "https://myanimelist.net/manga/3006/JoJo_no_Kimyou_na_Bouken_Part_4__Diamond_wa_Kudakenai/">JJBA Part 4.</a>
                       <li><a href = "https://myanimelist.net/manga/75989/Boku_no_Hero_Academia/">My Hero Academia Sea.</a>
                       <li><a href = "https://myanimelist.net/anime/35262/Boku_no_Hero_Academia_2nd_Season__Hero_Note/">My Hero Academia Sea 2.</a>
                       <li><a href = "https://myanimelist.net/manga/53/Yuu%E2%98%86Yuu%E2%98%86Hakusho/">Yu Yu Hakusho.</a>
                       <li><a href = "https://myanimelist.net/anime/1604/Katekyo_Hitman_Reborn?q=hitman%20re/">Hitman Reborn.</a>
                       <li><a href = "https://myanimelist.net/anime/20/Naruto/">Naruto.</a>
                 </ul>
         </li>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
        <form id="aFont">
            <fieldset id="filter_by_name">
                Filter by Name:
                <input type="Radio" name="filter_by_name_radio" value="name">
                Name:
                <input type="text" name="anime_name">
            </fieldset>
            <fieldset id="filter_by_price">
                Filter by Price:
                <input type="Radio" name="filter_by_price_radio" value="price">
                Price (please include $ before price):
                <input type="text" name="anime_price">
            </fieldset>
            <fieldset id="filter_by_release_year">
                Filter by Release Year:
                <input type="Radio" name="filter_by_release_year_radio" value="release_year">
                Release Year:
                <input type="text" name="anime_release_year">
            </fieldset>
            
            <fieldset id="sort_field">
                Order results by:
                <select name="sort_by_option">
                    <option value="">Select...</option>
                    <option value="anime_name">Name</option>
                    <option value="anime_price">Price</option>
                    <option value="release_year">Release Year</option>
                </select>
                <input type="Radio" name="order_radio" value="ascending">Ascending
                <input type="Radio" name="order_radio" value="descending">Descending
            </fieldset>
            <fieldset id="submitButton">
                <input type="submit" id="submit" name="submitButton" value="Submit" />
            </fieldset>
        </form>
        <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Year</th>
        </tr><tr><td>One Punch Man</td><td>$10.00</td><td> 2015</td><td>[<a href='add_to_cart.php?name=One Punch Man&location=anime'> Add to cart </a>]</td></tr><tr><td>JJBA Part 4</td><td>$20.00</td><td> 2016</td><td>[<a href='add_to_cart.php?name=JJBA Part 4&location=anime'> Add to cart </a>]</td></tr><tr><td>JJBA Part 3</td><td>$20.00</td><td> 2012</td><td>[<a href='add_to_cart.php?name=JJBA Part 3&location=anime'> Add to cart </a>]</td></tr><tr><td>JJBA Part 2</td><td>$15.00</td><td> 2012</td><td>[<a href='add_to_cart.php?name=JJBA Part 2&location=anime'> Add to cart </a>]</td></tr><tr><td>JJBA Part 1</td><td>$10.00</td><td> 2012</td><td>[<a href='add_to_cart.php?name=JJBA Part 1&location=anime'> Add to cart </a>]</td></tr><tr><td>My Hero Academia Sea</td><td>$10.00</td><td> 2016</td><td>[<a href='add_to_cart.php?name=My Hero Academia Sea&location=anime'> Add to cart </a>]</td></tr><tr><td>My Hero Academia Sea</td><td>$20.00</td><td> 2017</td><td>[<a href='add_to_cart.php?name=My Hero Academia Sea&location=anime'> Add to cart </a>]</td></tr><tr><td>Yu Yu Hakusho</td><td>$15.00</td><td> 1992</td><td>[<a href='add_to_cart.php?name=Yu Yu Hakusho&location=anime'> Add to cart </a>]</td></tr><tr><td>Hitman Reborn</td><td>$15.00</td><td> 2006</td><td>[<a href='add_to_cart.php?name=Hitman Reborn&location=anime'> Add to cart </a>]</td></tr><tr><td>Naruto</td><td>$5.00</td><td> 2002</td><td>[<a href='add_to_cart.php?name=Naruto&location=anime'> Add to cart </a>]</td></tr></table>    </body>
</html>
