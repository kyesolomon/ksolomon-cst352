<script language = "javascript">
    
</script>
<!DOCTYPE html>
<html>
    <head>
        <title>Homework 4: JavaScript/jQuery Quiz</title>
        <style>
            body{
                background-color: gold;
                color: blue;
                padding: 50px 50px 50px 400px;
            }
        </style>
    </head>
    <body>
        <form>
            1) CSUMB stands for
            <input type = "text" name = "fillInTheBlank">, Monterey Bay.<br><br>
            
            2) What is the current enrollment at CSUMB? (Rounded off to the thousandths)<br>
            <input type="number" name="enrollment" min="7000" max="8000"><br><br>
            
            3) Which of the following are colleges within CSUMB?<br>
            <input type = "checkbox" name = "multipleChoice" value= "CAHSS">College of Arts, Humanities and Social Sciences<br>
            <input type = "checkbox" name = "multipleChoice" value= "COB">College of Business<br>
            <input type = "checkbox" name = "multipleChoice" value= "COE">College of Education<br>
            <input type = "checkbox" name = "multipleChoice" value= "SCD">School of Computing and Design<br>        
            <input type = "checkbox" name = "multipleChoice" value= "COEEIP">College of Extended Education & International Programs<br>
            <input type = "checkbox" name = "multipleChoice" value= "CHSHS">College of Health Sciences and Human Services<br>
            <input type = "checkbox" name = "multipleChoice" value= "COS">College of Science<br><br>
            
            4) In which building are CST classes held in?<br>
            <input type = "radio" name = "oneChoice" value = "BIT">Business and Information Technology Building<br>
            <input type = "radio" name = "oneChoice" value = "Theatre">World Theatre<br>
            <input type = "radio" name = "oneChoice" value = "UC">University Center<br><br>
            
            5) Which department is offering CST352?<br>
            <select>
                <option value = "science">School of Natural Sciences</option>
                <option value = "computing">School of Computing and Design</option>
                <option value = "humanities">School of Humanities</option>
                <option value = "math">School of Mathematics</option>
                <option value = "department">School of Languages</option>
            </select><br><br>
            
            6) What is today's date?<br>
            <input type = "date" name = "today"><br><br>
            
            <input type = "submit" value = "Submit">
        </form>

    </body>
</html>