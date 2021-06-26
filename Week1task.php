<?php
    function allNumbers(){
        $numbers = range(1,10);
        return $numbers;
    }
    print_r(allNumbers());

?>
    <br> <br>

<?php
    function sum_numbers(){
        $my_arrNumbers = array(1,2,3,4,5,6,7,8,9,10);
        $var = 0;
        foreach($my_arrNumbers as $itr){
        $var += $itr;
        }
    return $var;
    } 
    echo sum_numbers();
?>
