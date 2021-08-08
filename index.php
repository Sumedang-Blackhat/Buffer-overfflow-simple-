<?php
     if(isset($_POST["gob"])){
     $pw = $_POST["user"];
     if ($pw == "12345"){
     echo "<script>alert('flag benar');</script>";
     }else{
     echo "<script>alert('flag salah Kawan coba lagi :) ');</script>";
     }
     }
     ?>
     <center>
     <br>
     <h3> bufer overflow - challange </h3>
     <form action="" method="post">
     <input type="user" name="user" class="tombol" placeholder="flag">
     <br>
     <button type="submit" name="gob" class="submite">start</button>
     </form>