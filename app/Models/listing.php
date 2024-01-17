<?php  
    namespace App\Models;

    class Listing{
        public static function all(){
            return  [
                [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fuga libero consectetur consequuntur ipsa eveniet atque numquam aliquam
                sed ipsam maiores pariatur cumque laborum nemo tenetur animi,
                quis veniam odio quae?',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fuga libero consectetur consequuntur ipsa eveniet atque numquam aliquam
                sed ipsam maiores pariatur cumque laborum nemo tenetur animi,
                quis veniam odio quae?',
            ],
        ];
        }
    }

?>