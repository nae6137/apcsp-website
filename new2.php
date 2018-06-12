<!DOCTYPE html>
<html>
  <head>
    <title>Our App</title>
  </head>


  <body>

    <h1>Form Input 2</h1>
    <p>Demo of how to take form input and pass it to a C program - all in a single page</p>

    <?php
       $budget = $expense = $output = $retc = "";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $budget = test_input($_POST["budget"]);
         $expense = test_input($_POST["expense"]);
         exec("/usr/lib/cgi-bin/student3/sat " . $budget . " " . $expense, $output, $retc); 
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
       echo $arg1;
       echo "<br>";
       echo $arg2;
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
