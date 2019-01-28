

<?php
include 'inc.php';


    if ( isset($_POST['ar_name'])){
      $ar_name = $_POST['ar_name'];
      if (isset ( $_POST['en_name'])) {
        $en_name = $_POST['en_name'];
        if ( isset($_POST['sub_category_id'])){
          $sub_category_id = $_POST['sub_category_id'];


                $file = "files/". $_POST['file'] ."";
                $userid="1";



              $sql = "INSERT INTO books (en_name, ar_name, sub_category_ID, user, file)
              VALUES ('$en_name', '$ar_name', '$sub_category_id', '$userid', '$file')";

              if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }


        }else {
          echo "Input your sub_category_id .....";
        }
      }else {
        echo "Input your English Name .....";
      }
    }else {
      echo "Input your Arabic Name .....";
    }




$conn = null;
?>
