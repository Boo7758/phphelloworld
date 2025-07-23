<?php

function max3($a, $b, $c) {
    return max(max($a, $b), $c);
}

function maxSubSum($A, $left, $right) {
    if ($left == $right) { /* Base case */
        if ($A[$left] > 0) {
            return $A[$left];
        } else {
            return 0;
        }
    }

    $center = intval(($left + $right) / 2);
    $maxLeftSum = maxSubSum($A, $left, $center);
    $maxRightSum = maxSubSum($A, $center + 1, $right);

    $maxLeftBorderSum = 0;
    $leftBorderSum = 0;
    for ($i = $center; $i >= $left; $i--) {
        $leftBorderSum += $A[$i];
        if ($leftBorderSum > $maxLeftBorderSum) {
            $maxLeftBorderSum = $leftBorderSum;
        }
    }

    $maxRightBorderSum = 0;
    $rightBorderSum = 0;
    for ($i = $center + 1; $i <= $right; $i++) {
        $rightBorderSum += $A[$i];
        if ($rightBorderSum > $maxRightBorderSum) {
            $maxRightBorderSum = $rightBorderSum;
        }
    }

    return max3($maxLeftSum, $maxRightSum, $maxLeftBorderSum + $maxRightBorderSum);
}

function maxSubsequenceSum($A, $N) {
    return maxSubSum($A, 0, $N - 1);
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



