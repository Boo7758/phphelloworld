<?php

function intBinarySearch($A, $x, $N) {
    $Low = 0;
    $High = $N - 1;
    $NotFound = -1;

    while ($Low <= $High) {
        $Mid = intval(($Low + $High) / 2);
        if ($A[$Mid] < $x) {
            $Low = $Mid + 1;
        } elseif ($A[$Mid] > $x) {
            $High = $Mid - 1;
        } else {
            return $Mid; // Found
        }
    }

    return $NotFound; // NotFound is defined as -1
}

// 示例用法
$A = range(1, 100000); // 生成从1到100000的有序数组
$x = 50000; // 要查找的元素

$start_time = microtime(true);
$result = intBinarySearch($A, $x, count($A));
$end_time = microtime(true);

if ($result != -1) {
    echo "元素 $x 在数组中的索引是: " . $result . "\n";
} else {
    echo "元素 $x 不在数组中\n";
}

echo "查找耗时: " . ($end_time - $start_time) . " 秒\n";

?>



