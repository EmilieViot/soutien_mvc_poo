<?php

class CategoryManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function findAll () : array
    {
        $query = $this->db->prepare('SELECT * FROM categories');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        
        $categories_array = [];

        foreach($categories as $category) {
            $newCategory = new Category($category["name"]);
            $newCategory->setId($category["id"]);
            $categories_array[]=$newCategory;
        }
        
        return $categories_array;
        print($categories_array);
    }
}