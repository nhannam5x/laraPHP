

<?php 
    $books = [
        [
            'name' => 'book 1',
            'author' => 'Nam Nhan',
            'purchaseUrl' => 'https://www.google.com/',
            'yearRelease' => 2002
        ],
        [
            'name' => 'book 2',
            'author' => 'Hoang Ngan',
            'purchaseUrl' => 'https://www.facebook.com',
            'yearRelease' => 2012
        ],
        [
            'name' => 'book 3',
            'author' => 'Thi Cuc',
            'purchaseUrl' => 'http://www.youtube.com',
            'yearRelease' => 1951
        ],
        [
            'name' => 'book 4',
            'author' => 'Nam Nhan',
            'purchaseUrl' => 'http://www.youtube.com',
            'yearRelease' => 2022
        ]
    ];
    $movies = [
        [
            'name' => 'Mad Max',
            'author' => 'Nam Nhan',
            'purchaseUrl' => 'https://www.google.com/',
            'yearRelease' => 2014
        ],
        [
            'name' => 'Lord of the Ring',
            'author' => 'Hoang Ngan',
            'purchaseUrl' => 'https://www.facebook.com',
            'yearRelease' => 2001
        ],
        [
            'name' => 'Blade Runner',
            'author' => 'Thi Cuc',
            'purchaseUrl' => 'http://www.youtube.com',
            'yearRelease' => 1988
        ],
        [
            'name' => 'Star Wars',
            'author' => 'Nam Nhan',
            'purchaseUrl' => 'http://www.youtube.com',
            'yearRelease' => 1971
        ]
    ];

    /*function filter($items, $key, $value){
        $filteredItems=[];
        foreach($items as $item){
            if($item[$key] === $value){
                $filteredItems[]=$item;
            }
        }
        return $filteredItems;
    }

    $filteredItems = filter($books, 'author', 'Nam Nhan');
    */

     
    // function filter($items, $fn){          //= array_filter
    //     $filteredItems=[];
    //     foreach($items as $item){
    //         if($fn($item)){
    //             $filteredItems[]=$item;
    //         }
    //     }
    //     return $filteredItems;
    // } 

    $filteredItems = array_filter($books, function($books){
        return $books['yearRelease'] >= 1950 && $books['yearRelease'] <= 2020;
    });
require 'index.view.php';