<!-- In PHP, the goto statement allows you to jump to another section of your code. 
The use of goto is generally discouraged in modern programming because 
it can make the code less readable and harder to maintain -->


<?php 
  for($i = 0; $i < 10; $i++ ){
    echo $i+1 ,", Hai goto statement","<br>";
    if( $i == 8){
        goto gotoName;
    }
  }
  gotoName:
  echo "the compailer jump to this statement";
?>