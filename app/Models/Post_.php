<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'My First Blog Post',
            'slug' => 'my-first-blog-post',
            'author' => 'Ariza Akmal Syahida',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ex magni mollitia incidunt id voluptas, ipsam itaque dignissimos error velit quia veniam eos unde corporis enim fuga temporibus cum eaque quis officiis asperiores? Iusto, ullam adipisci. Doloribus officiis in cumque rerum modi aut atque eos accusantium exercitationem impedit fugiat dolorum assumenda, sunt, eveniet, dolor tempora maiores ullam nihil cum vero. Exercitationem reiciendis necessitatibus eveniet. Quae cumque tenetur dolore modi, corporis sint dolor, vel nulla accusantium distinctio aliquam recusandae, labore obcaecati.',
        ],
        [
            'title' => 'My Second Blog Post',
            'slug' => 'my-second-blog-post',
            'author' => 'Spiderman',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum in, recusandae deleniti fuga debitis quos. Pariatur recusandae quia dolorem perferendis ut nemo ipsum magnam, beatae sapiente accusantium tenetur. Facere recusandae sequi itaque delectus odio dolorem sapiente saepe hic blanditiis praesentium illum provident optio, dicta maxime vel, debitis dignissimos eos architecto, cum possimus. Maiores quidem soluta delectus tempora rem, suscipit laborum ad quisquam magnam natus minima voluptatem dicta porro asperiores maxime, dolorum architecto necessitatibus placeat commodi. Cupiditate a nam provident reiciendis quae quo, numquam, minus vero beatae quia iusto earum ducimus pariatur optio ad magnam, qui veritatis. Eaque fugit distinctio quidem.',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
