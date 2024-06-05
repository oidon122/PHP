<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[0];
echo '<br />';
?>

<?php
$people = array(
  'person1' => 'Taro',
  'person2' => 'Jiro',
  'person3' => 'Saburo'
);

var_dump($people);
echo '<br />';
?>

<?php
$people = [
  'person1' => 'Taro',
  'person2' => 'Jiro',
];

echo $people['person1'];
echo '<br />';
?>

<?php
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[0]["last_name"];
echo '<br />';
?>

<?php
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}
?>

<?php
$people = array(
  'person1' => 'Taro',
  'person2' => 'Jiro',
  'person3' => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

?>

<?php
$people = array(
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['Hanako', 16, 'Women']
);

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}