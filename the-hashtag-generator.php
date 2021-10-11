<?php
// https://www.codewars.com/kata/52449b062fb80683ec000024
    function generateHashtag($str) {
        $str = join(array_map('ucfirst', explode(' ', trim($str))));
        return $str && strlen($str) < 140 ? "#$str" : false;
    }
?>