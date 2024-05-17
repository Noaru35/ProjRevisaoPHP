
<?php

include_once (__dir__ . '/../vendor/autoload.php');

Use App\model\Todo;
$todo1 = new Todo(1, 'Aprendendo PHP');
$todo2 = new Todo(2, 'Testando o comando');
print_r($todo1->title);
echo "<br>";
print_r($todo2->title);