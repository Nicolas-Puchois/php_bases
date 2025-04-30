<?php


//------------------------------------
function debug($var, $mode = 1)
{
    echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
    $trace = debug_backtrace();
    $trace = array_shift($trace);
    echo "Debug demande dans le fichier : $trace[file] a la ligne $trace[line].<hr />";
    if ($mode === 1) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    } else {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
    echo '</div>';
}


function eol()
{
    echo php_sapi_name() == "cli" ? "\n" : "<br>";
}
//------------------------------------