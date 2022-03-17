<!DOCTYPE HTML>
<html>
	<head>
		<title>Gürkan Sönmez Project</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						
						<h1>Gürkan Sönmez</h1>
						<p>Online Book Store Project</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#bookadd" class="active">Book Add</a></li>
							<li><a href="#booklist">Book List</a></li>
							
							


							
							
							

						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="bookadd" class="main">
										<header class="major">
											<center><h2>Book Add</h2></center>
										</header>
										<p><?php
@$error=$_GET['error'];

if (!$error == null)
{
echo "<p>Please fill all inputs!";
}

@$response=$_GET['add'];
if ($response == "success")
{
echo "<p>Book add successfull!";
}

@$delete=$_GET['removeid'];
if (!$delete == null)
{
  require 'includes/dbh.inc.php';
if (is_numeric($delete))
{
  $delquery="DELETE FROM books WHERE idBooks = $delete";
   $deletedb = mysqli_query($conn,$delquery);
   //var_dump($deletedb);
   echo "<p>Delete Row Successfull!";
 }
 else {
   echo "<p>Delete Row Error. Please choose id from table!";
 }
}



?><p>
<form class="form-signup"action="includes/bookadd.inc.php" method="post">
         <input type="text" name="copies" placeholder="Copies">
         <input type="text" name="bookstitle" placeholder="Books Title">
         <input type="text" name="booksauthor" placeholder="Books Author">
         <input type="text" name="price" placeholder="Price">
         <input type="text" name="published" placeholder="Published">
         <input type="text" name="customername" placeholder="Customer Name">
         <input type="text" name="orders" placeholder="Orders">
         <button type="submit" name="signup-submit">Add</button>
       </form>
	   </p></p>
										
							</section>

						<!-- First Section -->
							<section id="booklist" class="main">
								<header class="major">
									<center><h2>Book List</h2></center>
								</header>
								<p>
								<?php
require 'includes/dbh.inc.php';
$query='select * from books';
 $verileriCek = mysqli_query($conn,$query);

 echo "Total Record Number:";
 echo mysqli_num_rows($verileriCek);
echo "<table border=1>";
echo "<tr><td>Copies</td><td>Books Title</td><td>Books Author</td><td>Price</td><td>Published</td><td>Customer Name</td><td>Orders</td><td>Delete</td></tr>";
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($verileriCek)){

                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $copies = $b['copies'];
                    $bookstitle = $b['bookstitle'];
                    $booksauthor = $b['booksauthor'];
                    $price = $b['price'];
                    $published = $b['published'];
                    $customername = $b['customername'];
                    $orders = $b['orders'];
                    $bid=$b['idBooks'];

                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz.
                    echo "<tr>
                    <td>$copies</td>
                    <td>$bookstitle</td>
                    <td>$booksauthor</td>
                    <td>$price</td>
                    <td>$published</td>
                    <td>$customername</td>
                    <td>$orders</td>
                    <td><a href='index.php?removeid=$bid'>Delete</a></td>
                </tr>";

                }
                echo "</table>";

  ?>
								
								</p>
								
							</section>


						

				
			</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
</html>