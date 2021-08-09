<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $age1 = $_POST['age1'];
    $age2 = $_POST['age2'];
    $edit = mysqli_query($db,"update tblemp set fullname='$fullname', age='$age1' where id='$id'");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:index.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Details</title>
  <link rel="icon" href="db.png" type="image/icon type">
</head>
<style media="screen">
  @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");

   html, body{
   font-family: "Roboto", sans-serif !important;
   }

  html, body{
    background-color: #1D1E21;
    color: #FFFFFF;
    overflow: hidden;
    height: 100%;
  }

  body{
    font-size: 24px;
    position: relative;
    left: 30%;
    top: 200px;
  }


  footer{
    font-size: 18px !important;
    position: relative;
    left: 10%;
    top: 50%;
  }

  h2{
    position: relative;
    left: 11%;
  }

  h3{
    position: relative;
    left: 14%;
  }

  form{
     position: relative;
     top: %;
     left: 4%;
     font-size: 30px;
  }

  a{
    text-decoration: none;
    color: violet;
  }

  input{
    height: 35px;
    border-radius: 4px;
    font-size: 15px;

  }
  .bodysoda{
    border: 3px solid violet;
    height: 200px;
    position: absolute;
    width: 595px;
    border-radius: 10px;
  }
</style>
<body>
<div class="bodysoda"></div>
<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="age" value="<?php echo $data['age'] ?>" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update" style="text-decoration: none; background-color: purple; color: #FFFFFF;">
</form>

<footer id="foot" style="color: #FFFFFF; font-family: 'Courier';">
    <p>
      <script>document.write(new Date().getFullYear());</script> &copy; Made with &#10084;&#65039; & CSS<br> &nbsp; &nbsp;<img src="mastermind.png" height="30px" width="30px" style="position: relative; left: 1%; top: 6px;">&nbsp; by <a href="https://github.com/Mastermindx33/" target="_blank" rel="nofollow noopener" style="text-decoration: none !important;"><span style="color: #FF0000;">Mastermind</span></a>
    </p>
</footer>

<!-- <h3>Plus One</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="age" value="<?php echo $data['age'] + 1 ?>" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update">
</form>
 -->

<!-- <h3>Plus and Minus Simultaneously</h3>

<form method="POST">
  <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="age1" value="<?php echo $data['age2'] + 1 ?>" placeholder="Enter Age" Required>
  <input type="text" name="age2" value="<?php echo $data['age2'] - 1 ?>" placeholder="Enter Age" Required>
  <input type="submit" name="update" value="Update">
</form> -->

</body>
</html>
