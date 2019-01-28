<?php
  include 'inc.php';
 ?>


  <?php



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

  include 'form-vars.php';
  $url ="new.php?cat_id=$cat_id&cat_book_id=$sub_cat_id&book_id=$book_id&success_added=sub_category";

  $sql = "INSERT INTO sub_category (en_name, ar_name, category_ID, user)
  VALUES ('$en_name', '$ar_name', '$category_ID', '$userID')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header('Location: '.$url);
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();





  ?>
