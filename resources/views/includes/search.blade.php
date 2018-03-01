{{Form::open(['route'=>'search', 'method'=>'get', 'class' => 'navbar-form'])}}
    {{Form::text('query', '', ['placeholder'=>'Search for...', 'class' => 'form-control'])}}
{{Form::close()}}