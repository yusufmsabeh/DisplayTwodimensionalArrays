<?php

    
    //two dimensional array
    $marks = array (
        "mohammad"=>array(
            "physics"=>35,
            "maths"=>30,
            "chemistry"=>39
        ),
        "qadir"=>array(
            "physics"=>30,
            "maths"=>32,
            "chemistry"=>29
        ),
        "zara"=>array(
            "physics"=>31,
            "maths"=>22,
            "chemistry"=>39
        )
 
        );

        DisplayArray($marks);
        


        // Display a two Dimensional array using for loop
        function DisplayArray($array){
            $firstArray =array_keys($array);
        for ($i=0;$i<count( $firstArray);$i++){
            $name=$firstArray[$i];
            echo"$name \n";
            $secondArray=array_keys($array[$name]);
            for ($j=0;$j<count ($secondArray);$j++){
                $subject =$secondArray[$j];
                $mark=$array[$name][$subject];
                echo"\t$subject = $mark\n";
            }
        }
        }

        

?>