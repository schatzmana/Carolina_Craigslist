<!DOCTYPE html>

<?php
    session_start();
    if(!(isset($_SESSION['username']) && !empty($_SESSION['username']))) {
        header("Location: firstpage.php"); /* Redirect browser */
        exit();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css" />
</head>
<body>
  <h1><img src="ram.gif" id="logo">Carolina Craigslist</h1>

  <div id="nav">
    <a class="navigation" href="home.html" id="home">Home</a>
    <a class="navigation" href="viewbyusername.php" id="view">My Posts</a>
    <a class="navigation" href="create.html" id="create">Create Posts</a>
    <a class="navigation" href="firstpage.php" id="logout">Logout</a> <!-- end session and send to login page -->
  </div>

  <div id="welcome">
    Welcome to Carolina Craigslist!<br>Click on one of the six categories below to explore our current listings.
  </div>

<!--
    <form align=center method="link" action="create.html">
      <input type="submit" value="Create a post">
    </form>

    <form align=center method="link" action="login.html">
      <input type="submit" value="Logout">
    </form>
-->
  <table>
    <tr>
      <td id="Furniture">
        <a href= "viewbycategory.php?category=Furniture">
          <img src="furniture.jpg">
        </a>
      </td>

      <td id="Clothes">
        <a href="viewbycategory.php?category=Clothing">
          <img src="clothes3.jpg">
        </a>
      </td>

      <td id="Sublease">
        <a href="viewbycategory.php?category=Sublease">
          <img src="home2a.jpg">
        </a>
      </td>
    </tr>
      <td id="Tutors">
        <a href="viewbycategory.php?category=Tutoring">
          <img src="tutor6.jpg">
        </a>
      </td>

      <td id="Textbooks">
        <a href="viewbycategory.php?category=Textbooks">
          <img src="books1.jpg">
        </a>

      </td>

      <td id="Other">
        <a href="viewbycategory.php?category=Other">
          <img src="other1.jpg">
        </a>

      </td>
    </tr>
  </table>

  <div id="extraPageLength"></div>



  <!-- <p align=center>Click here to <a href="">logout</a></p> -->



</body>
</html>
