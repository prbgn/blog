@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Compose a Post</h1>

                {{Form::open(['route' => 'admin.articles.store'])}}
                    <div class="form-group">
                        {{Form::label('category', 'Category')}}
                        {{Form::select('category', $categories, [], [
                            'class' => 'form-control col-sm-4'
                        ])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '', ['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('brief', 'Brief description')}}
                        {{Form::textarea('brief', '', [
                            'class' => 'form-control',
                            'rows' => 3
                        ])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('content', 'Content')}}
                        {{Form::textarea('content', '', [
                            'class' => 'form-control',
                            'rows' => 12
                        ])}}
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection