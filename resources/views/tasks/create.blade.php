@extends('layouts.app')

@section('content')

    <h1 class="mb-3">
        <small class="mr-2"><i class="fas fa-plus-square"></i></small>
        新規作成
    </h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('status', '状況：') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'タスク内容：') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('登録', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

@endsection