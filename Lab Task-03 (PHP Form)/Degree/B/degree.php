<?php 

    if(isset($_REQUEST['Degree'])){
        $deg = $_REQUEST['Degree'];
        echo $deg;
       
    }
?>

<html>
    <head>
    </head>


    <body>
        
        <form action="" method="post">

        <fieldset style="width: 400px;" >
        <legend>Degree</legend>

            
<input type ="checkbox" name="Degree" value="SSC" /> SSC
<input type ="checkbox" name="Degree" value="HSC" /> HSC
<input type ="checkbox" name="Degree" value="BSc" /> BSc
<input type ="checkbox" name="Degree" value="MSc" /> MSc 
<br>
<hr> 
<input type="submit" name="Submit" value="Submit">
</fieldset>
<br>
</form>
</body>
</html>
