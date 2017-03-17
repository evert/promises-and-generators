<?php

$promise = Promise\all([
    asyncOperation1(),
    asyncOperation2()
]);
