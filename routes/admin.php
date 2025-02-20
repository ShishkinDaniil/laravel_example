<?php
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'active', 'admin'])->prefix('admin')->group(function () {

    Route::redirect('/', 'admin/posts')->name('admin');

    // CRUD for posts.
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');

    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');

    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');

    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');

    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');

    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');

    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete');
});
