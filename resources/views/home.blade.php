@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($category))
        <h1 class="my-5">{{$category->title}}</h1>
    @endif
    @foreach($articles as $article)
        <div class="row my-5">
            <div class="col">
                <h1>
                    <a href="{{route('article', [
                        'category' => $article->category->slug,
                        'slug' => $article->slug
                    ])}}">
                        {{$article->title}}
                    </a>

                    <a class="small align-text-top" href="{{route('category', ['slug'=>$article->category->slug])}}">
                        <span class="badge badge-info ml-2">
                            <small>{{$article->category->title}}</small>
                        </span>
                    </a>

                </h1>

                <p class="lead">
                    {{$article->brief}}
                </p>

                <a href="{{route('article', [
                        'category' => $article->category->slug,
                        'slug' => $article->slug
                    ])}}">
                    Read more...
                </a>

            </div>
        </div>
    @endforeach
</div>
@endsection
