<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $categoryId = $request->input('categoryId');


        ///
        /// Тестовые данные. Перезагружайте /blog, получаете 100 записей
        ///
        // for ($i = 0; $i < 99; $i++) {
        //     Post::query()->create([
        //         'user_id' => User::query()->value('id'),
        //         'title' => fake()->sentence(),
        //         'content' => fake()->paragraph(),
        //         'published' => true,
        //         'published_at' => fake()->dateTimeBetween(now()->subYear(), now()),
        //     ]);
        // }


        $posts = Post::all(['id', 'content', 'title', 'published_at']);
        $posts = Post::query()->latest('published_at')->paginate(12);


        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iure est sequi ratione ad velit accusantium, nostrum esse temporibus iusto.',
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'Поставить лайк';
    }
}


