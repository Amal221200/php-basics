<?php
    // Three types of array

    // 1. Indexed
    $people = array('Michael', 'Peter', 'John');
    $id = array(1, 33, 4);
    $cars = ['Honda', 'Batmobile'];
    $cars[] = "BMW";
    $cars[1] = "Audi";

    // echo $cars[1];
    // echo count($cars);
    // print_r($cars)
    // var_dump($cars)


    // 2. Associative
    $people = array('Brad' => 44, 'John' =>32);



    // 3. Multi-dimensional
    $people = array(
        array("Honda", 24, 'Activa'),
        array("Toyota", 24, 'Simply Clever'),
        array("Hyundai", 24, 'Alcazar'),
    );

    // echo $people[2][0]
    // print_r($people)
    // var_dump($people);

    // foreach($people as $car){
    //     // echo $car[0];
    //     // echo '<br>';

    //     foreach($car as $de){
            
    //         echo $de;
    //     }
    //     echo '<br>';
    // }

?>