<?php
    function totalScore($arr)   { return array_sum($arr); }
    function averageScore($arr) { return count($arr) > 0 ? array_sum($arr) / count($arr) : 0; }
    function result($avg)       { return $avg >= 50 ? "Passed" : "Failed"; }
?>
