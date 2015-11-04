<?php

function getRecords() {

    $result = $pdo->query('SELECT * FROM articles');

    while($record = $pdo->fetch()) {
        yield $record;
    }

}

foreach(getRecords() as $record) {

    echo $record['title'], "\n";

}
