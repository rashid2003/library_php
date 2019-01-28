<?php
  include 'inc.php';
 ?>
<form action="" method="post">
  Arabic Name :<input type="text" name="ar_name" placeholder="Arabic Name .......">
  English Name :<input type="text" name="en_name" placeholder="English Name .......">
Catagory : <select name="category_ID">
  <?php

  $sqll = "SELECT * FROM category";
  $resultt = $conn->query($sqll);



  if ($resultt->num_rows > 0) {
      // output data of each row
      while($roww = $resultt->fetch_assoc()) {
     	 $sub_ar_name = $roww["ar_name"];
       $id = $roww["id"];





            echo "<option value='$id'>". $sub_ar_name ."</option>";
          }



  }else{
           echo "we have not any category ...";
  }







   ?>
</select>
  <input type="submit" value="SAVE" name="submit">


  <?php


  if ( isset( $_POST['submit'] ) )  {
  if ( isset($_POST['ar_name'])){
    $ar_name = $_POST['ar_name'];
  }else {
    echo "Input your Arabic Name .....";
  }
  if (isset ( $_POST['en_name'])) {

    $en_name = $_POST['en_name'];
  }else{
  echo"Please enter your English Name .......";
  }
  if (isset ( $_POST['category_ID'])) {

    $category_ID = $_POST['category_ID'];
  }else{
  echo"Please enter your category_ID .......";
  }


  $sql = "INSERT INTO sub_category (en_name, ar_name, category_ID, user)
  VALUES ('$en_name', '$ar_name', '$category_ID', '$userID')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}




  ?>
