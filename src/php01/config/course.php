<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$options = htmlspecialchars($_POST['options'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $name . '<br />';
print "ご希望商品は" . $options . '<br />';
print "注文数は、" . $number;