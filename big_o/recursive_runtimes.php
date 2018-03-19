<?php

function f(int $n)
{
    if ($n <= 1) {
        return 1;
    }

    return f($n - 1) + f($n - 1);
}

var_dump(f(10));