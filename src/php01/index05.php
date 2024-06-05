<?php
$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br ?>';
  $count++;
}
?>

<?php
$i = 0;
do {
  echo $i . '<br ?>';
  $i++;
} while ($i < 5);
?>

<?php
$num = 0;
do {
  echo 'num = ' . $num . '<br ?>';
  $num += 1;
} while ($num < 3);
?>

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo "Buzz";
  } else {
    echo $i;
  }
}
?>

<?php
for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "⚫︎";
  }
  echo "<br />";
}