@extends('layouts.main')

@section('page.title', $post->title)

@section('main.content')

    <x-title>
        {{ $post->title }}

        <x-slot name="link">
            <a href="{{ route('user') }}">
                {{ __('Назад') }}
            </a>
        </x-slot>
        <x-slot name="right">
            <x-button additionalStyle="btn-sm" onclick="location.href='{{ route('user.posts.edit', $post->id) }}'">
                {{ __('Редактировать') }}
            </x-button>
        </x-slot>
    </x-title>

    {!! $post->content !!}


@endsection
