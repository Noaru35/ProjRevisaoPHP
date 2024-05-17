
<?php

include_once (__dir__ . '/../vendor/autoload.php');

Use App\model\Todo;
$todo1 = new Todo(1, 'Aprendendo PHP');
print_r($todo1->title);