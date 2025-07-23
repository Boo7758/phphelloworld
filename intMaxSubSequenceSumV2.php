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

// 示例用法
$A = [1, -2, 3, 5, -1, 2];
$N = count($A);
echo "最大子序列和是: " . intMaxSubSequenceSum($A, $N);

?>



