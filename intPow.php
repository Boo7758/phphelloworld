<?php

/**
 * 计算一个长整数的幂
 *
 * @param long int $x 基数
 * @param unsigned int $N 指数
 * @return long int 结果
 */
function intPow($x, $N) {
    if ($N == 0) return 1;
    if ($N == 1) return $x;

    if ($N % 2 == 0) {
        return intPow($x * $x, $N / 2);
    } else {
        return intPow($x * $x, intval($N / 2)) * $x;
    }
}

// 示例用法
$x = 2;
$N = 10;

$start_time = microtime(true);
$result = intPow($x, $N);
$end_time = microtime(true);

echo "$x 的 $N 次方是: " . $result . "\n";
echo "计算耗时: " . ($end_time - $start_time) . " 秒\n";

?>



