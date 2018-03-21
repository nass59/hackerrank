<?php

// Space complexity => O(N)
// We have O(2^n) nodes in the tree
// But we only need O(N) memory available
function f(int $n)
{
    if ($n <= 1) {
        return 1;
    }

    return f($n - 1) + f($n - 1);
}

var_dump(f(4));