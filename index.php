<?php

  for( $i=0; $i <= 10; $i++ ){
    for( $j=0; $j <= $i; $j++ ){
      echo $j;
    }
    echo "<br>";
  }

?>


<?php

  for( $i=0; $i <=10; $i++ ){
    for( $j=0; $j <= $i; $j++ ){
      echo $i;
    }
    echo "<br>";
  }

 ?>

 <?php

   for( $i=0; $i <=10; $i++ ){
     for( $j=0; $j <= $i; $j++ ){
       echo '*';
     }
     echo "<br>";
   }

?>

<?php

  for( $i=0; $i <= 10; $i++ ){
    for( $j=0; $j <= 10-$i; $j++ ){
      echo '*';
    }
    echo "<br>";
  }

?>

<?php

  for( $i=0; $i <= 20; $i++ ){
    for( $j=20; $j >= $i; $j-- ){
      echo '&nbsp;&nbsp;';
    }

    for( $x=0; $x <= $i; $x++ ){
      echo '&nbsp;&nbsp;*';
    }
    echo '<br>';
  }

?>

<?php

  for( $i=0; $i <= 20; $i++ ){
    for( $j=20; $j >= 20-$i; $j-- ){
      echo '&nbsp;&nbsp;';
    }

    for( $x=0; $x <=20-$i; $x++ ){
      echo '&nbsp;&nbsp;*';
    }
    echo '<br>';
  }

?>
