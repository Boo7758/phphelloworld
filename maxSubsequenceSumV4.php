<?php

function maxSubsequenceSum($A, $N) {
    $ThisSum = 0;
    $MaxSum = 0;

    for ($j = 0; $j < $N; $j++) {
        $ThisSum += $A[$j];
        if ($ThisSum > $MaxSum) {
            $MaxSum = $ThisSum;
        } elseif ($ThisSum < 0) {
            $ThisSum = 0;
        }
    }

    return $MaxSum;
}

// 生成10万个随机数
$N = 100000;
$A = [];
for ($i = 0; $i < $N; $i++) {
    $A[] = rand(-100, 100); // 生成-100到100之间的随机数
}

// 测量时间
$start_time = microtime(true);
$max_sum = maxSubsequenceSum($A, $N);
$end_time = microtime(true);

echo "最大子序列和是: " . $max_sum . "\n";
echo "计算耗时: " . ($end_time - $start_time) . " 秒\n";

?>



