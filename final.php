<!DOCTYPE html>
<html>
  <head>
    <title>Form Input 2</title>
	 <link rel="stylesheet" type="text/css" href="final.css" />
  </head>


  <body>

    <h1>Form Input - Demo 2</h1>
    <p>Demo of how to take form input and pass it to a program - all in a single page</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $arg3 = $arg4 = $output = $retc = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg4 = test_input($_POST["arg4"]);
         exec("/usr/lib/cgi-bin/sp1a/final " . $arg1 . " " . $arg2 . " " . $arg3 . " ". $arg4 ,$output, $retc); 
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      1 = rectangle and 2 = triagle: <input type="text" name="arg1"><br>
      lowest base or lowest legnth: <input type="text" name="arg2"><br>
      highest base or highest length: <input type="text" name="arg3"><br>
      height or width: <input type="text" name="arg4"><br>
      <br>
      <input type="submit" value="Go!">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Your Input:</h2>";
         echo $arg1;
         echo "<br>";
         echo $arg2;
         echo "<br>";
         echo $arg3;
         echo "<br>";
         echo $arg4;
         echo "<br>";
         echo "<h2>Program Output (an array):</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
       
         echo "<h2>Program Return Code:</h2>";
         echo $retc;
       }
    ?>
    
  </body>
</html>
