<?php
function intMaxSubsequenceSum($A, $N) {
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

// 生成包含10万个随机整数的数组
$N = 100000;
$a = array_map(function() { return rand(-10, 10); }, range(1, $N));

// 测量执行时间
$start_time = microtime(true);
$maxSum = intMaxSubsequenceSum($a, $N);
$end_time = microtime(true);

echo "最大子序列和是: " . $maxSum . "\n";
echo "执行时间: " . ($end_time - $start_time) . " 秒\n";
?>



