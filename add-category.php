
  <?php

  include 'inc.php';
  if ( isset($_GET['book_Id'])){

  $book_ID = $_GET['book_id'];
  }else {
    $book_ID = "1";

  }
  if ( isset($_GET['sub_cat_id'])){
  $sub_cat_id = $_GET['sub_cat_id'];
  }else{
    $sub_cat_id = "1";

  }
  if ( isset($_GET['cat_id'])){
  $cat_id = $_GET['cat_id'];
  }else {
    $cat_id = "1";
  }
  $en_name = $_POST['en_name'];
  $ar_name = $_POST['ar_name'];
  $url ="new.php?cat_id=$cat_id&sub_cat_id=$sub_cat_id&book_id=$book_ID&success_add=category";


  $sql = "INSERT INTO category (en_name, ar_name, user)
  VALUES ('$en_name', '$ar_name', '$userID')";

  if ($conn->query($sql) === TRUE) {
header('Location: '.$url);
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();





  ?>
