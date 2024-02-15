<?php
$var = 50;
function isBitten($var) {
    $bite = ($var >= 50) ? "Charlie em va mossegar el dit!" : "Charlie et mossegarà el dit";
    return $bite;
}
echo isBitten();
?>