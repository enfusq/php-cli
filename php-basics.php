<?php

// echo "This is my first CLI script in php\n";

// for ($i = 1; $i <= 10; $i++) {
//     echo "Number: $i\n";
// }
// echo "\n";
// for ($i = 10; $i > 0; $i--) { 
//     echo "Number: $i\n";
// }

// $persons = [
//     ['name' => "Jānis", 'age' => 19],
//     ['name' => "Dāvis", 'age' => 18],
//     ['name' => "Anna", 'age' => 18]
// ];

// $input = readline("Ievadi savu vardu: ");
// echo "Tavs vards ir $input\n";
$taskList = [
    "first task",
    "second task",
];

function viewAllTasks($allTasks) {
    foreach ($allTasks as $task) {
        echo $task . "\n";
    }
}

function addTask(&$allTasks) {
    $task = readline("Ievadiet uzdevumu: ");
    array_push($allTasks, $task);
}

function viewTask($allTasks) {
    $index = readline("Ievadiet uzdevuma indeksu: ");
    if ($index >= 0 && $index < count($allTasks)) {
        echo $allTasks[$index] . "\n";
    } else {
        echo "Invalid number.";
        return;
    }
}

do {
    echo "Uzdevumu pārvaldnieks\n";
    echo "Apskatīt visus uzdevumu - 1\n";
    echo "Ievadīt jaunu uzdevumu - 2\n";
    echo "Apskatīt vienu uzdevumu - 3\n";
    echo "Iziet - N\n";
    $choice = readline("Enter value: ");
    switch ($choice) {
        case '1':
            viewAllTasks($taskList);
            break;
        case '2':
            addTask($taskList);    
            break;
        case '3': 
            viewTask($taskList);
            break;
        default:
            echo "Invalid option!\n";
            break;
    }

} while ($choice != "N" || $choice != "n");