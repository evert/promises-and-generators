<?php

const operation = *function() {

    yield dbQuery1();
    yield dbQuery2();
    yield dbQuery3(); 

    return true;

};

co(operation);
