<?php
if (isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  $copies = $_POST['copies'];
  $bookstitle = $_POST['bookstitle'];
  $booksauthor = $_POST['booksauthor'];
  $price = $_POST['price'];
  $published = $_POST['published'];
  $customername = $_POST['customername'];
  $orders = $_POST['orders'];


  if (empty($copies) || empty($bookstitle) || empty($booksauthor) || empty($price) || empty($published) || empty($customername) || empty($orders)) {
    header("Location: ../index.php?error=emptyfields&copies=".$copies."&bookstitle=".$bookstitle);
    exit();
  }
  
  
  else {

  $sql = "INSERT INTO books (copies, bookstitle, booksauthor, price, published, customername, orders) VALUES (?,?,?,?,?,?,?) ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../index.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sssssss", $copies, $bookstitle, $booksauthor, $price, $published, $customername, $orders);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php?add=success");
          exit();
      }
   

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../index.php");
  exit();

}
