
 <?php 
  $arr = array( 1, 2, 4, 2, 534, 234, 342, 23, 3, 53, 1, 2, 4, 2, 534, 234, 342, 23, 3, 53, 1, 2, 4, 2, 534 );
  rsort($arr);
  for ($i=1; $i < 25; $i+=2) { 
   echo "$arr[$i] ";
  }
  ?>