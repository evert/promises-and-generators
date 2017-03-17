<?php

function getRecords() {

    $result = $pdo->query('SELECT * FROM articles');
    return $result->fetchAll(); 

}

foreach(getRecords() as $record) {

    echo $record['title'], "\n";

}
