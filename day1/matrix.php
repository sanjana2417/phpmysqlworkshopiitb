<?php
$array1=array(array(6,3),array(5,4));
$array2=array(array(1,4),array(7,2));
echo "Matrix Addition <br>";

    
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $array1[$i][$j]+$array2[$i][$j]." ";
        }
        echo "<br>";
        
    }

?>