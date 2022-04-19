<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../../MVC/View/login.html"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
?>
<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../MVC/View/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div class="overlay"> 
    <div class="wrapper row0">
      <div id="topbar" class="clear"> 
        <div class="fl_left">
          <ul class="nospace inline pushright">
              <li><i class="fa fa-phone"></i> +880-168-8901198</li>
              <li><i class="fa fa-envelope-o"></i>info@bubupharmacy.com</li>
          </ul>
        </div>
        <div class="fl_right">
          <ul class="faico clear">
            <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="wrapper row1">
      <header id="header" class="clear"> 
        <div id="logo" class="fl_left">
          <h1><a href="home.html">Inventory</a></h1>
        </div>
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li><a href="home.html">Home</a></li>
            <li><a class="drop" href="#">Inventory</a>
              <ul>
                <li><a href="inventory.php">View Inventory</a></li>
                <li><a href="inventoryedit.php">Edit Inventory</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">Order</a>
              <ul>
                <li><a href="order.html">Place Order</a></li>
                <li><a href="orderhistory.php">Order History</a></li>
              </ul>
            </li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
    </div>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row2">
  <div id="breadcrumb" class="clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="#">Inventory</a></li>
      <li><a href="inventorysearch.php">Search Inventory</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->

<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1></h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Manufacturer</th>
              <th>Category</th>
              <th>Unit Price</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>
            <?php
                      $host = "localhost"; /* Host name */
                      $user = "root"; /* User */
                      $password = ""; /* Password */
                      $dbname = "ims"; /* Database name */
                      $con = mysqli_connect($host, $user, $password,$dbname);
                      // Check connection
                      if (!$con) {
                       die("Connection failed: " . mysqli_connect_error());
                      }
                      $search = $_POST['searchstring'];
                      $sql = "SELECT * FROM medicine WHERE manufacturer LIKE '%$search%' OR name LIKE '%$search%'";
                      $result = mysqli_query($con, $sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                        {
                          $name = $row['name'];
                          $mfg = $row['manufacturer'];
                          $cat = $row['category'];
                          $up = $row['uprice'];
                          $qt = $row['quantity'];
                        ?>
                  <tr>
                  <td><?php echo $name ?></td>
                  <td><?php echo $mfg ?></td>
                  <td><?php echo $cat ?></td>
                  <td><?php echo $up ?></td>
                  <td><?php echo $qt ?></td>
                </tr>
               <?php
               }
            ?>
          </tbody>
        </table>
      </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
    <footer id="footer" class="clear">
        <!-- ################################################################################################ -->
        <div class="one_quarter first">
            <h6 class="title">Pharmacy</h6>
            <address class="btmspace-15">
                Bubu Pharmacy<br>
                Liyue Harbour,<br>
                Liyue<br>
                Teyvat
            </address>
            <ul class="nospace">
                <li class="btmspace-10"><span class="fa fa-phone"></span> +880-168-8901198</li>
                <li><span class="fa fa-envelope-o"></span> info@bubupharmacy.com</li>
            </ul>
        </div>
    </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">Bubu-Pharma</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>