<?php

namespace App\Models;

class BlogPost {
    
    //function to return an array of blog posts
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Day One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet eget leo ac semper. Phasellus varius blandit lectus vel interdum. Suspendisse cursus, felis eget faucibus auctor, mauris velit efficitur magna, nec tempus velit leo eu lacus. Phasellus efficitur a urna eget commodo. Mauris maximus, nisi eu ultricies tincidunt, metus quam sagittis leo, id imperdiet odio odio vel ex. Phasellus at dolor enim. Proin feugiat nibh scelerisque sem viverra tincidunt. Cras sem orci, molestie et neque ac, auctor vestibulum risus. Maecenas convallis porta urna sit amet rutrum. Maecenas scelerisque metus id ullamcorper interdum. Morbi ullamcorper pharetra ultricies. Etiam venenatis non dolor ut consequat. Curabitur dictum condimentum blandit.'
            ],
            [
                'id' => 2,
                'title' => 'Day Two',
                'description' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'id' => 3,
                'title' => 'Day Three',
                'description' => 'Lorem ipsum dolor sit amet'
            ]
        ];
    }

    //function to return a single blog post, Find by ID
    public static function find($id) { 
        $posts = self::all();

        foreach($posts as $post) {
            if($post['id'] == $id) {
                return $post;
            }
        }
    }

}