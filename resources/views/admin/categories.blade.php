@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Manage Categories</h1>

            <ul class="list-group col-md-6">
                @foreach($categories as $category)
                    <li class="list-group-item">
                        {{$category->title}}
                        <span class="small">
                            / {{$category->slug}}
                        </span>

                        {{Form::open([
                            'url'=>route('admin.category.delete', [
                                'category'=>$category->id
                            ]),
                            'method' => 'delete',
                            'class'=>'float-right'
                        ])}}
                        {{Form::submit('Remove',['class'=>'btn-danger btn-sm'])}}
                        {{Form::close()}}

                    </li>
                @endforeach

                {{Form::open(['route'=>'admin.category.add', 'method' => 'post'])}}
                    <li class="list-group-item">

                    {{Form::text('title', '', [
                        'placeholder' => 'Create a new category',
                        'class'=> 'form-control',
                        'required'
                    ])}}

                    </li>
                {{Form::close()}}

            </ul>
        </div>
    </div>
</div>
@endsection
