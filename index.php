<?php

require "models/Category.php";

$category = new Category("Emilie");
var_dump($category);
$category->setId(1);
var_dump($category);

require "managers/AbstractManager.php";
require "managers/CategoryManager.php";

$newCategoryManager = new CategoryManager();
var_dump($newCategoryManager);
$allCategories = $newCategoryManager -> findAll();
var_dump($allCategories);
