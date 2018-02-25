@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(Session::hasOldInput())
                    <h1 class="mb-5 mt-3">Edit post</h1>
                @else
                    <h1 class="mb-5 mt-3">Compose a Post</h1>
                @endif
                {{Form::open(['route' => 'admin.articles.store'])}}
                    <div class="form-group row my-4">
                        {{Form::label('title', 'Title', [
                            'class' => 'col-sm-2 col-form-label col-form-label-lg'
                        ])}}
                        <div class="col-sm-10">
                            {{Form::text('title', '', ['class' => 'form-control'])}}
                        </div>
                    </div>

                <div class="form-group row my-4">
                    {{Form::label('category', 'Category', [
                            'class' => 'col-sm-2 col-form-label col-form-label-lg'
                     ])}}
                    <div class="col-sm-10">
                    @foreach($categories as $category)
                        <div class="custom-control custom-radio custom-control-inline">
                            {{Form::radio('category_id', $category->id, ($loop->index == 0), [
                                'id'=>$category->slug,
                                'class' => 'custom-control-input'
                            ])}}
                            {{Form::label($category->slug, $category->title, [
                                'class' => 'custom-control-label'
                            ])}}
                        </div>
                    @endforeach
                    </div>
                </div>

                    <div class="form-group row my-4">
                        {{Form::label('brief', 'Brief description', [
                            'class' => 'col-sm-2 col-form-label col-form-label-lg'
                        ])}}
                        <div class="col-sm-10">
                            {{Form::textarea('brief', '', [
                                'class' => 'form-control',
                                'rows' => 3
                            ])}}
                        </div>
                    </div>

                    <div class="form-group row my-4">
                        {{Form::label('content', 'Content', [
                            'class' => 'col-sm-2 col-form-label col-form-label-lg'
                        ])}}
                        <div class="col-sm-10">
                            {{Form::textarea('content', '', [
                                'class' => 'form-control',
                                'rows' => 12
                            ])}}
                        </div>
                    </div>

                    {{Form::submit('Save', ['class'=>'btn btn-primary offset-2'])}}

                    {{Form::hidden('id')}}
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection