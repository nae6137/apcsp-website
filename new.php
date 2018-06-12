<!DOCTYPE html>
<html>
  <head>
    <title>Our App</title>
  </head>


  <body>

    <h1>Budget Calculator</h1>
    <p>Add expenses together by inputting two values to be added together or subtract expense from budget</p>

    <?php
       $arg1budget = $arg2expense = $arg3 = $retc = "";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1budget = test_input($_POST["budget"]);
         $arg2expense = test_input($_POST["expense"]);
         exec("/usr/lib/cgi-bin/student3/sathyaadd " . $arg1budget . " " . $arg2expense, $output, $retc); 
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Budget: <input type="text" name="budget"><br>
      Expense: <input type="text" name="expense"><br>
      <input type="submit">
    </form>

    <?php
       echo "<h2>Data Entered:</h2>";
       echo $arg1budget;
       echo "<br>";
       echo $arg2expense;
       echo "<br>";
       
       echo "<h2>C Program Output (an array):</h2>";
       foreach ($output as $line) {
         echo $line;
         echo "<br>";
       }
       
       echo "<h2>C Program Return Code:</h2>";
       echo $retc;
      
     ?>
    
  </body>
</html>
