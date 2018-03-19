<?php

// Add the runtimes => O(A + B)
// Do this, then, when you're all done, do that
function addRuntimes()
{
    for ($i = 0; $i < 5; $i++) {
        var_dump('loop 1 :' . $i);
    }

    for ($i = 0; $i < 5; $i++) {
        var_dump('loop 2 :' . $i);
    }
}

addRuntimes();

// Multiply the runtimes => O(A * B)
// Do this for each time you do that
function multiplyRuntimes()
{
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            var_dump('loop 1: ' . $i . ' / loop 2: ' . $i);
        }
    }
}

multiplyRuntimes();
