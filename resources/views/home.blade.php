@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($category))
        <h1 class="my-5">{{$category->title}}</h1>
    @endif
    @foreach($articles as $article)
        @include('includes.summary')
    @endforeach

    <p>
        {{$articles->links()}}
    </p>
</div>
@endsection
