
  <?php

  include 'inc.php';
  include 'form-vars.php';
  $url ="new.php?cat_id=$cat_id&cat_book_id=$sub_cat_id&book_id=$book_id&success_added=category";

  $en_name = $_POST['en_name'];
  $ar_name = $_POST['ar_name'];


  $sql = "INSERT INTO category (en_name, ar_name, user)
  VALUES ('$en_name', '$ar_name', '$userID')";

  if ($conn->query($sql) === TRUE) {
header('Location: '.$url);
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();





  ?>
