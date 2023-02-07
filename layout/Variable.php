<?php include "header.php" ?>

<h3> 3 In-class Task Variable & Operators 07.02.2023 (Variable.php)</h3>

<h2>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement
     to print using <h3> tag: Hello …., You are welcome to my site.</h2>
<h2>2. Apply bootstrap style to the form.</h2>

    <form action="action.php" method="post">

    <div class="row">
        <div class="col">
        <input type="text" name="fname" required placeholder="First Name" class="form-control"> </div>

        <div class="col">
        <input type="text" name="lname" required placeholder="Last Name" class="form-control"> </div>
    </div>
<br>
    <div class="row">
        <div class="col">
        Birth Date: <input type="date" name="bdate" class="form-control"> </div>

        <div class="col">
        Select fav color: <input type="color" name="color" class="form-control"> </div>
    </div>
<br>
        <input type="submit" value="submit">

    </form>

<h2>3. Prepare a simple html table and apply bootstrap style to the table.
    You may use the same table that you did in 3.5.</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kushani</td>
      <td>Gnanathilaka</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Sonali</td>
      <td>Abeyrathna</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Shammi</td>
      <td>Premarathna</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
<h2> 4. Write a PHP script with two string variables. Assign any text to these variables. Join them together. 
    Print the length of the string. (Hint: string function) </h2>

<?php
    $subject = "My name is";
    $name1 = "Kushani";
    $detail = $subject.$name1;
    echo $subject . " " . $name1;
    echo ". Length is " .strlen($detail);
?>
<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2> 

<?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "Total " .($sum)
?>

<h2> 6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h2>

<?php
    echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];
?>

<h2> 7. Write a PHP script in the footer section of your universal footer just below the Copyright information 
  to display the last modification time of a file. </h2>

  <?php include "footer.php" ?>
