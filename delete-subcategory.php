

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
    if ( isset($_POST['bookid'])){
      $bookid = $_POST['bookid'];




              $sql = "DELETE FROM sub_category WHERE id = $bookid";


              if ($conn->query($sql) === TRUE) {
                  echo "record Deleted successfully";
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }



    }else {
      echo "Input your Book is .....";
    }




$conn = null;
?>
