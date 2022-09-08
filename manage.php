<?php
  $name=$_GET['pin'];

  switch($name){
    case 741161:
      echo"<script>window.location.href='asanagar.html'</script>";
      break;
      case 741162:
      echo"<script>window.location.href='bhimpur.html'</script>";
        break;
      default:
      echo "<script>window.location.href='default.html'</script>";
      break;
  }




?>