<?php include "header.php" ?>

<?php
$month = date('F');
if ($month == 'August'){
    echo "It's August, so it's still holiday.";
    }
else{
    echo "Not August, so at least not in the peak of the heat.";
    }
?>
<h3>2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>
<?php
$color = 'Red';
if ($color == 'Red'){
    echo "The color is red. ";
    }
else{
    echo "The color is not red.";
    }
?>

<h3>3.Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
</h3>

<?php
$score = 100;
if ($score > 80)
    {
    echo "Excellent ";
    }
elseif ($score > 70) 
    {
    echo "Great ";
    }
elseif ($score > 60) 
    {
    echo "Good ";
    }  
elseif ($score > 50) 
    {
    echo "Pass ";
    }  
elseif ($score < 50) 
    {
    echo "Fail ";
    }
?>
<?php
function check_vote() {
    $name = "Name";
    $age = 00;
    if ($age >= 18) {
        echo $name . ", You Are Eligible For Vote";
    } else {
        echo $name . ", You are not eligible for vote. ";
    }
}
check_vote(); 

?>

<?php include "footer.php" ?>