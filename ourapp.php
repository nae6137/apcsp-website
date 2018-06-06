<!DOCTYPE html>
<html>
  <head>
    <title>Form Input 2</title>
  </head>


  <body>

    <h1>Form Input 2</h1>
    <p>Demo of how to take form input and pass it to a C program - all in a single page</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $result = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $result = system( "/usr/lib/cgi-bin/pi/argtest2 " . $arg1 . " " . $arg2); 
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Arg1: <input type="text" name="arg1"><br>
      Arg2: <input type="text" name="arg2"><br>
      <input type="submit">
    </form>

    <?php
       echo "<h2>Your Input:</h2>";
       echo $arg1;
       echo "<br>";
       echo $arg2;
       echo "<br>";

       echo "<h2>Calling C program</h2>";
       echo $result;

     ?>
    
  </body>
</html>

