

<?php
include 'inc.php';


    if ( isset($_POST['ar_name'])){
      $ar_name = $_POST['ar_name'];
      if (isset ( $_POST['en_name'])) {
        $en_name = $_POST['en_name'];
        if ( isset($_POST['sub_category_id'])){
          $sub_category_id = $_POST['sub_category_id'];
          include 'form-vars.php';
          $url ="new.php?cat_id=$cat_id&cat_book_id=$sub_cat_id&book_id=$book_id&success_added=book";
        

                $file = "files/". $_POST['file'] ."";
                $userid="1";



              $sql = "INSERT INTO books (en_name, ar_name, sub_category_ID, user, file)
              VALUES ('$en_name', '$ar_name', '$sub_category_id', '$userid', '$file')";

              if ($conn->query($sql) === TRUE) {
                header('Location: '.$url);
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
