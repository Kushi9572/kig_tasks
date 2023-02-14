<?php
$title="Update your info";
include '../layout/header.php';
$a=$_GET['ID'];
include 'db.php';
$result=mysqli_query($conn,"Select * from StudentInfo where ID='$a' ");
$row=mysqli_fetch_array($result);


?>
<h2>Update your information below </h2>
<form name="update" method="post" action="">
    <input type ="text"name="fname" placeholder="First Name" required values="<?php echo $row['fname']; ?>"><br><br>
    <input type ="text"name="lname" placeholder="Last Name" required values="<?php echo $row['lname']; ?>"><br><br>
    <input type ="text"name="city" placeholder="City" required values="<?php echo $row['city']; ?>"><br><br>
    <select name="groupid" value="<?php echo $row['grID']; ?>">
        <option value="BBCAP22" >BBCAP22 </option>
        <option value="BBCAP21" >BBCAP21 </option>
        <option value="Other" >Others </option>
</select><br><br>

<input type="submit" value="Update your info" name="submit"> <br><br>
<input type="submit" value="Delete your info" name="delete">


</form>
<?php
    if (isset($_post['update'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $query=mysqli_query($conn,"UPDATE StudentInfo set fname='$fname',lname='$lname'where ID='$a'");

    if($query){
        echo "<h2>Your infomation updated successfully</h2>";
    }
    else {echo "Record not modified";}
    }


?>
<?php
include '../layout/footer.php';
?>

