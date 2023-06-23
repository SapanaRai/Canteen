<?php
      include 'config.php';
      $sql="SELECT * from menu";
      $result=mysqli_query($db,$sql);
      while($row=mysqli_fetch_array($result)){
?>

  <h4><?php echo $row['name']?></h4>
  <p class="w3-text-grey"><?php echo $row['desc'].' '.$row['price']?></p><br>
  <?php
      }
      ?>