<?php

$data=[
    "action" => "create"
];

// if(isset($data['action'])){
//     $action = $data['action'];
// } else {
//     $action = "nothing";
// }

// echo $action.PHP_EOL;

$action = $data['action'] ?? "Nothing";
echo $action.PHP_EOL;