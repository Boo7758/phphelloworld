<?php

function intMaxSubSequenceSum($A, $N) {
    $MaxSum = 0;
    for ($i = 0; $i < $N; $i++) {
        $ThisSum = 0;
        for ($j = $i; $j < $N; $j++) {
            $ThisSum += $A[$j];
            if ($ThisSum > $MaxSum) {
                $MaxSum = $ThisSum;
            }
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
$max_sum = intMaxSubSequenceSum($A, $N);
$end_time = microtime(true);

echo "最大子序列和是: " . $max_sum . "\n";
echo "计算耗时: " . ($end_time - $start_time) . " 秒\n";

?>



