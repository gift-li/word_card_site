@extends('layouts.sidebar')

@section('title')
    {{ config('app.name') }} - {{ __('index') }}
@endsection

@section('content')
    <article
        class="prose sm:prose-base md:prose-lg xl:prose-xl dark:prose-invert prose-img:rounded-xl prose-headings:underline prose-a:text-blue-600">
        <h1>
            HI
        </h1>
    </article>
@endsection
