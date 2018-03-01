<div class="row my-5">
    <div class="col">
        @php
            $articleUrl = route('article', [
                'category' => $article->category->slug,
                'slug' => $article->slug
            ]);
        @endphp
        <a class="badge badge-info" href="{{route('category', ['category' => $article->category->slug])}}">
            {{$article->category->title}}
        </a>

        <h1>
            <a href="{{$articleUrl}}">
                {{$article->title}}
            </a>
        </h1>

        @auth
            <div class="row col">
                <a class="btn-sm btn-secondary float-left mr-1" href="{{route('admin.articles.compose', ['article'=> $article->id])}}">Edit</a>
                {{Form::open(['url'=> route('admin.articles.delete', ['article' => $article->id]), 'method'=> 'delete', 'class'=>'float-left'])}}
                {{Form::submit('Delete', ['class' => 'btn-sm btn-danger'])}}
                {{Form::close()}}
            </div>
        @endauth

        <p class="lead">{{$article->brief}}</p>

        <a href="{{$articleUrl}}">Read more...</a>

    </div>
</div>