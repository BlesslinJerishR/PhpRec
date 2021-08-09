<!DOCTYPE html>
<html>
<head>
  <title>Database Records</title>
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
    top:330px;
    left: 10%;
  }

  h2{
    position: relative;
    left: 11%;
  }

  table{
     position: relative;
     top: %;
     left: 2%;
     font-size: 30px;
  }

  a{
    text-decoration: none;
    color: violet;
  }

  .bodysoda{
    border: 3px solid violet;
    height: 300px;
    position: absolute;
    width: 595px;
    border-radius: 10px;
  }

</style>
<body>
<div class="bodysoda"></div>
<h2>Employee Details</h2>

<table border="3px solid white" style="border-radius: 10px;">
  <tr>
    <td>&nbsp; No &nbsp;</td>
    <td>&nbsp; Full Name &nbsp;</td>
    <td>&nbsp; Age &nbsp;</td>
    <td>&nbsp; Edit &nbsp;</td>
    <td>&nbsp; Delete &nbsp;</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from tblemp"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td>&nbsp; <?php echo $data['id']; ?> &nbsp;</td>
    <td>&nbsp; <?php echo $data['fullname']; ?> &nbsp;</td>
    <td>&nbsp; <?php echo $data['age']; ?> &nbsp;</td>
    <td>&nbsp; <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> &nbsp;</td>
    <td>&nbsp; <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a> &nbsp;</td>
  </tr>

<?php
}
?>
</table>
</body>
<footer id="foot" style="color: #FFFFFF; font-family: 'Courier';">
    <p>
      <script>document.write(new Date().getFullYear());</script> &copy; Made with &#10084;&#65039; & CSS<br>&nbsp; &nbsp; <img src="mastermind.png" height="30px" width="30px" style="position: relative; left: 1%; top: 6px;">&nbsp; by <a href="https://github.com/Mastermindx33/" target="_blank" rel="nofollow noopener" style="text-decoration: none !important;"><span style="color: #FF0000;">Mastermind</span></a>
    </p>
</footer>
</html>
