<?php
      include("conexion.php");
      $query="SELECT * FROM tbl_cliente";
      $resultado=$conexion->query($query);
      while($row=$resultado-> fetch_assoc()){
header("Content-disposition: attachment; filename=".$row["nombre_img"]);
header("Content-type: image/jpeg");
readfile($row["nombre_img"]);
?>
 <?php
      }
      ?>



