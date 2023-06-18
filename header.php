<?php
@include 'config.php';
?>

<header class="header">

   <div class="flex">

      <a href="#" class="logo">Borneo Store</a>
      <nav class="navbar">
         <a href="products.php">view products</a>
         <?php
         if (isset($_SESSION['id'])) {
            $select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE user = '$idUser'") or die('query failed');
            $row_count = mysqli_num_rows($select_rows);
         ?>
            <?php if($_SESSION['role'] == 'admin') { ?>
               <a href="admin.php">add products</a> 
            <?php } ?>
            <a href="history.php">history order</a>
            <?php if($_SESSION['role'] != 'admin') { ?>
               <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
            <?php } ?>
            <a href="logout.php" class="link_navbar">Logout</a>
         <?php } ?>
      </nav>
      <?php if (!isset($_SESSION['id'])) { ?>
         <a href="login.php" class="link_navbar">Login</a>
         <a href="register.php" class="link_navbar">Register</a>
      <?php } ?>

      <div id="menu-btn" class="fas fa-bars"></div>
      

   </div>

</header>


