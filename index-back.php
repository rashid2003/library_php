<?php
include 'inc.php';
$book_ID = $_GET['book_id'];
 ?>
<!DOCTYPE html>
<html>
<title>Library</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css"  crossorigin="anonymous">

<body>
<!--
########################################################
                        HEADER
########################################################
-->
<header>

  <div class="search">
  <input type="search"  placeholder="Search ....." class="searchb">
  <i class="fa fa-search "></i>

</div>



<button onClick="setBgColor('red')">Red</button>


</header>
<!--
###########################################################
THE LISTS ARE STARTING FROM HERE DOWN OF HERER ALL 3 LISTS
###########################################################
-->

<div class="first-list">

  <?php

  $sql = "SELECT * FROM category";
  $result = $conn->query($sql);



  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
     	 $ar_name = $row["ar_name"];
       $id = $row["id"];





            echo "<a href='?cat_id=$id&book_id=$book_ID'><button class=\"item\">". $ar_name ."<i class=\"fa fa-folder\"></i></button></a><br>";
          }



  }else{
           echo "<script> alert(\"we have not any category ...\");</script>";
  }







   ?>
</div>
<!--
###############################################################
          SECOND LIST STARTS FROM HERE (DOWN OF HERE)
###############################################################
 -->
 <?php
 if (isset( $_GET['cat_id'] )) {
?>

<div style="display:inline-block;" id="seclist" class="sec-list">

  <?php
  $getid = $_GET['cat_id'];
  $sqll = "SELECT * FROM sub_category where category_ID = $getid";
  $resultt = $conn->query($sqll);



  if ($result->num_rows > 0) {
      // output data of each row
      while($roww = $resultt->fetch_assoc()) {
     	 $sub_ar_name = $roww["ar_name"];
       $su_bid = $roww["id"];





            echo "<a href='?cat_id=$getid&cat_book_id=$su_bid&book_id=$book_ID'><button class=\"sec-item\">". $sub_ar_name ."<i class=\"fa fa-folder\"></i></button></a><br>";
          }



  }else{
           echo "<script> alert(\"we have not any category ...\");</script>";
  }







   ?>
</div>
<?php  } ?>
<!--
###############################################################
          THIRD LIST STARTS FROM HERE (DOWN OF HERE)
###############################################################
 -->
 <?php
 if (isset( $_GET['cat_book_id'] )) {
?>
<div style="display:inline-block;" id="thlist" class="th-list">

  <?php
  $cat_book_id = $_GET['cat_book_id'];
  $sqlll = "SELECT * FROM books where sub_category_ID = $cat_book_id";
  $resulttt = $conn->query($sqlll);



  if ($resulttt->num_rows > 0) {
      // output data of each row
      while($rowww = $resulttt->fetch_assoc()) {
     	 $sub_book_ar_name = $rowww["ar_name"];
       $sub_book_id = $rowww["id"];





            echo "<a href='http://localhost/library/index-back.php?cat_id=4&cat_book_id=3&book_id=$sub_book_id'><button class=\"th-item\">". $sub_book_ar_name ."<i class=\"fa fa-book\"></i></button></a><br>";
          }



  }else{
           echo "<script> alert(\"we have not any category ...\");</script>";
  }







   ?>
</div>
<?php  } ?>
<?php
if (isset( $_GET['book_id'] )) {
?>
<div style=" width : 800px; height: 600px; border : 1px solid black;">
<!--
#########################################################
 PUT AN IFRAME FOR PDF BOOKS IN HRERE IF YOU CAN DO THAT
#########################################################
-->
<h1 style="font-family : sans-serif;" >THIS WAS MY WORK THIS PART WILL COME SOON BY <i style="color : lightgreen;">RASHID OBAIDE </i>BACKEND STAFF<br> BOOK   <?php echo $book_ID; ?></h1>
</div>
<?php  } ?>
<script type="text/javascript">
 function setBgColor(color){
 document.body.style.backgroundColor = color;
 }
 function randBg() {
 var bgColor, colors = new Array('red', 'green', 'blue', 'yellow', 'orange');
 bgColor=colors[(Math.floor(Math.random() * colors.length))];
 setBgColor(bgColor);
 }
</script>
</body>
</html>
