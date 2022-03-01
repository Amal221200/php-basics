<?php
$people[] = 'Amal';
$people[] = 'Ashin';
$people[] = 'Peter';

// print_r($people);

$q = $_REQUEST['q'];

// echo $q;

$suggestion = '';

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ''){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;