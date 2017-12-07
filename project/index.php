
<html>
    <head>
        <title>Sexual Misconduct DB</title>
        <h1>Sexual Misconduct DB</h1>
        <style>
            @import url("style.css");
        </style>
    </head>
    <body>
             <div id="nav">
    <div id="nav_wrapper">
        <ul>
            <li><a href="/index.php">Home</a>
            </li>
            <li> <a href="#">List by Industry</a>

                <ul>
                    <li><a href="politics.php">Politics</a>
                    </li>
                    <li><a href="entertainment.php">Entertainment</a>
                    </li>
                    <li><a href="journalism.php">Journalism</a>
                    </li>
                    <li><a href="techBiz.php">Tech/Business</a>
                    </li>
                </ul>
            </li>
             
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
        <form>
            <br>
            <fieldset id="search_options">
                Search for:<br>
                <input type="Radio" name="search_options" value="politics">Politics<br>
                <input type="Radio" name="search_options" value="entertainment">Entertainment<br>
                <input type="Radio" name="search_options" value="journalism">Journalism<br>
                <input type="Radio" name="search_options" value="techBiz">Tech/Business<br>
        </fieldset>
        <fieldset id="submitButton">
            <input type="submit" id="submit" name="submitButton" value="Submit" />
        </fieldset>
        </form>
    </body>
</html>
