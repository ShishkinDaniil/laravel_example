@extends('layouts.main')

@section('main.content')
    <x-title>
        {{ __('Список постов') }}
    </x-title>

    @include('blog.filter')

    @if (empty($posts))
        {{ __(' Нет ни одного поста') }}
    @else
        <div class="scrolling-pagination">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-4">
                        <x-post.card :post="$post" route="blog.show" />
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
        @once
            @push('scripts')
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
                <script type="text/javascript">
                    $('ul.pagination').hide();
                    $(function() {
                        $('.scrolling-pagination').jscroll({
                            autoTrigger: true,
                            padding: 0,
                            nextSelector: '.pagination li.active + li a',
                            contentSelector: 'div.scrolling-pagination',
                            callback: function() {
                                $('ul.pagination').remove();
                            }
                        });
                    });
                </script>
            @endpush
        @endonce
    @endif
@endsection
