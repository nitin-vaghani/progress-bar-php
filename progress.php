<?php

/**
 * Quick and easy progress script
 * The script will slow iterate through an array and display progress as it goes.
 */
#First progress
$array1 = array(2, 4, 56, 3, 3);
$current = 0;

foreach ($array1 as $element) {
    $current++;
    outputProgress($current, count($array1));
}

echo '<br/>Now Redirect to Video list';
die;

/**
 * Output span with progress.
 *
 * @param $current integer Current progress out of total
 * @param $total   integer Total steps required to complete
 */
function outputProgress($current, $total) {
    echo "<span style='position: absolute;z-index:$current;background:#FFF;'>" . round($current / $total * 100) . "% Completed..</span>";
    myFlush();
    sleep(2);
}

/**
 * Flush output buffer
 */
function myFlush() {
    echo(str_repeat(' ', 256));
    if (@ob_get_contents()) {
        @ob_end_flush();
    }
    flush();
}
?>


