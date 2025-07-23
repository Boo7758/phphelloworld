<?php

/**
 * 计算两个无符号整数的最大公约数（GCD）
 *
 * @param unsigned int $M 第一个无符号整数
 * @param unsigned int $N 第二个无符号整数
 * @return unsigned int 最大公约数
 */
function calculateGcd($M, $N) {
    while ($N > 0) {
        $Rem = $M % $N;
        $M = $N;
        $N = $Rem;
    }
    return $M;
}

// 示例用法
$M = 56;
$N = 98;

$start_time = microtime(true);
$result = calculateGcd($M, $N);
$end_time = microtime(true);

echo "最大公约数是: " . $result . "\n";
echo "计算耗时: " . ($end_time - $start_time) . " 秒\n";

?>



