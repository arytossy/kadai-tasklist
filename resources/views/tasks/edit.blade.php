@extends('layouts.app')

@section('content')

    <h1 class="mb-3">
        <small class="mr-2"><i class="fas fa-edit"></i></small>
        編集
    </h1>
    
    <h3 class="text-secondary">-- ID：{{ $task->id }} --</h3>
    
    {!! Form::model($task, [
            'route' => ['tasks.update', $task->id],
            'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('status', '状況：') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'タスク内容：') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('更新', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

@endsection