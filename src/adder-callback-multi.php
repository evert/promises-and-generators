<?php

adder(
    1, 
    2,
    function($result) {

        adder(
            $result, 
            3,
            function($result) {
                adder(
                    $result, 
                    4,
                    function($result) {

                        echo $result, "\n";

                    },
                    function($error) {
                    }
                );

            },
            function($error) {
            }
        );

    },
    function($error) {
    }
);
