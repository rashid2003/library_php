
<form action="" method="post">
  Arabic Name :<input type="text" name="ar_name" placeholder="Arabic Name .......">
  English Name :<input type="text" name="en_name" placeholder="English Name .......">
  <input type="submit" value="SAVE" name="submit">


  <?php

  include 'inc.php';
  if ( isset( $_POST['submit'] ) )  {
  if ( isset($_POST['ar_name'])){
    $ar_name = $_POST['ar_name'];
  }else {
    echo "Input your Arabic Name .....";
  }
  if (isset ( $_POST['en_name'])) {

    $en_name = $_POST['en_name'];
  }


  $sql = "INSERT INTO category (en_name, ar_name, user)
  VALUES ('$en_name', '$ar_name', '$userID')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}




  ?>
