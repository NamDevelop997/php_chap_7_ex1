<?php
//  bài 1: tạo mảng in ra các số lẻ từ 3 - 150
$arr = [];
for ($i = 3; $i <= 150; $i += 2) {
    $arr[] = $i;
}
echo '<h1> List Number odd </h1> <pre>';
print_r($arr);
echo '</pre>';
