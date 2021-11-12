<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
</head>
<body>
<div class="container">
    <section class="posts">
        @forelse($posts->statuses as $status)
            <div class="posts__item">
                <div class="posts__item__text">
                    <pre>{!! $status->text !!}</pre>
                </div>
                <div class="posts__item__date">{{ $status->created_at }}</div>
            </div>
        @empty
            <h2 class="text-center">No data</h2>
        @endforelse
        @if(url()->previous())
            <a href="{{ url()->previous() }}">back</a>
        @endif

        @if($posts->search_metadata->next_results)
            <a href="{{ $posts->search_metadata->next_results }}">next</a>
        @endif

    </section>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
