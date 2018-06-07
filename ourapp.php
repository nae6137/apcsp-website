<!DOCTYPE html>
<html>
  <head>
    <title>Our App</title>
  </head>


  <body>

    <h1>Our App</h1>
    <p>Choose the option to add expenses or to subtract an expense from a budget</p>

    <?php
       // define variables and set to empty values
       $budget = $expense = $result = "";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $budget = test_input($_POST["budget"]);
         $expense = test_input($_POST["expense"]);
         $result = system( "/usr/lib/student3/wesbite/add.c " . $budget . " " . $expense); 
       }

       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Budget: <input type="text" name="arg1"><br>
      Expense: <input type="text" name="arg2"><br>
      <input type="submit">
    </form>

    <?php
       echo "<h2>Your Input:</h2>";
       echo $budget;
       echo "<br>";
       echo $expense;
       echo "<br>";

       echo "<h2>Calling C program</h2>";
       echo $result;

     ?>
    
  </body>
</html>

