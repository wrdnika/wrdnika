<?php
$ball = 'purple';
// Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain
    if ($ball == 'red') {
        $redbox = $ball;
        echo "redbox: $redbox<br>\n";
    } elseif ($ball == 'yellow') {
        $yellowbox = $ball;
        echo "yellowbox: $yellowbox<br>\n";
    } elseif ($ball == 'blue') {
        $bluebox = $ball;
        echo "bluebox: $bluebox<br>\n";
    } elseif ($ball == 'green') {
        $greenbox = $ball;
        echo "greenbox: $greenbox<br>\n";
    } elseif ($ball == 'purple') {
        $purplebox = $ball;
        echo "purplebox: $purplebox<br>\n";
    } else {
        $colorlessbox = $ball;
        echo "colorlessbox: $colorlessbox<br>\n";
    }
?>