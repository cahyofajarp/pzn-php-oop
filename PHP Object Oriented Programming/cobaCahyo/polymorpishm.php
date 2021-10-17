<?php

// namespace CobaCahyo{
//     class Todolist {

//         private $todolist;

//         public function __construct(string $todo = "")
//         {
//             $this->todolist = $todo;
//         }

//         public function getData():string
//         {
//             return $this->todolist;
//         }
//     }
// }


// namespace CobaCahyo2 {

//     use CobaCahyo\Todolist;

// interface helperIterface {
//         public function save(Todolist $todolist):void;
//     }
    
//     class todolistadd implements helperIterface {
        
//         private array $todolist = array();

//         public function save(Todolist $todolist):void 
//         {
            
//             $number = sizeof($this->todolist) + 1;
//             $this->todolist[$number] = $todolist;   
//         }

//         function findAll(): array
//         {
//             return $this->todolist;
//         }
//     } 
// }



namespace CobaCahyo{


    class Category {
        private string $categoryName;

        public function setCategoryName(string $category): void
        {
            $this->categoryName = $category;
        }

        public function getCategoryName()
        {
            return $this->categoryName;
        }
        
    }
    
    class Product extends Category {
        
        public function setProduct()
        {

        }
    }
    
    class Order extends Product {
        
    }

}



