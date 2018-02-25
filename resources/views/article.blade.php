@extends('layouts.app')

@section('content')
<div class="container">
    <a class="badge badge-info mt-5" href="{{route('category', ['category' => $article->category->slug])}}">
        {{$article->category->title}}
    </a>
    <h1 class="mb-5">{{$article->title}}</h1>

    <p class="blockquote mb-5">
        {{$article->brief}}
    </p>

    {!!  nl2br($article->content) !!}

    <p class="my-5">
        {{$article->created_at}}
    </p>
</div>
@endsection
