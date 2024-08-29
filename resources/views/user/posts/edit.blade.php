@extends('layouts.main')

@section('main.content')
    <x-title>
        {{ __('Изменить пост') }}
        <x-slot name="link">
            <a href="{{ route('user.posts') }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
    </x-title>
    <x-post.form action="{{ route('user.posts.update', $post->id) }}" method="PUT" :post="$post">
        <x-button type="submit">
            {{ __('Сохранить') }}
        </x-button>
    </x-post.form>
@endsection
