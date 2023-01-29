<?php
echo "課題1";
echo "\n";
$name = "手塚友二郎";
if ($name == "手塚友二郎") {
    echo "私は" . $name . "です";
    echo "\n";
} else {
    echo $name . "ではありません";
    echo "\n";
}

echo "\n";

echo "課題2";
echo "\n";
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

echo "\n";

echo "課題3";
echo "\n";
$fruits = ["メロン","もも","バナナ","びわ","マンゴー"];
foreach ($fruits as $fruits) {
    echo $fruits;
    echo "\n";
}

echo "\n";

echo "課題4";
echo "\n";
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}