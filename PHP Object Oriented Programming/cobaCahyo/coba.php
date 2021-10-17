<?php

require_once "polymorpishm.php";

use CobaCahyo\{Category,Product,Order};

// use CobaCahyo2\todolistadd;

// $todolist = new todolistadd;

// $todolist->save(new Todolist('Poly'));
// $todolist->save(new Todolist('Poly12'));
// $todolist->save(new Todolist('Poly13'));

// foreach($todolist->findAll() as $todo){
//     echo $todo->getData() .PHP_EOL;
// }
// $todo = new Todolist('poly');



$category = new Category;
$category->setCategoryName('Handphone');

echo $category->getCategoryName();




