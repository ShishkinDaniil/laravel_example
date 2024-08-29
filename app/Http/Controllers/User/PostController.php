<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;


class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $categoryId = $request->input('categoryId');

        $posts = Post::query()->oldest('published_at')->paginate(12);

        return view('user.posts.index', compact('posts'));
    }
    public function create()
    {
        return view('user.posts.create');
    }
    public function store(Request $request)
    {
        $validated = validate($request->all(), Post::$rules);


        $post = Post::create([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at']) ?? null,
            'published' => $validated['published'] ?? false,
        ]);

        return redirect()->route('user.posts.show', 123);
    }
    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iure est sequi ratione ad velit accusantium, nostrum esse temporibus iusto.',
        ];
        return view('user.posts.show', compact('post'));

    }
    public function edit($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iure est sequi ratione ad velit accusantium, nostrum esse temporibus iusto.',
        ];
        return view('user.posts.edit', compact('post'));
    }
    public function update(Request $request, $post)
    {

        $validated = validate($request->all(), Post::getRules());

        return redirect()->back();
    }
    public function delete($post)
    {
        return redirect()->route('user.posts');

    }
    public function like()
    {
        return 'Лайк +1';


    }
}
