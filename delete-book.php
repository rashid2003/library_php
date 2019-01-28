

<?php
include 'inc.php';


    if ( isset($_POST['bookid'])){
      $bookid = $_POST['bookid'];

      include 'form-vars.php';
      $url ="new.php?cat_id=$cat_id&cat_book_id=$sub_cat_id&book_id=$book_id&success_delete=book";
    


              $sql = "DELETE FROM books WHERE id = $bookid";


              if ($conn->query($sql) === TRUE) {
                header('Location: '.$url);
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }



    }else {
      echo "Input your Book is .....";
    }




$conn = null;
?>
