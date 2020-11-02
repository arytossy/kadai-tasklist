@extends('layouts.app')

@section('content')

    <h1 class="mb-3">
        <small class="mr-2"><i class="fas fa-info-circle"></i></small>
        詳細ページ
    </h1>
    
    <h3 class="text-secondary">-- ID：{{ $task->id }} --</h3>
    <table class="table table-bordered">
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! Form::model($task, [
            'route' => ['tasks.destroy', $task->id],
            'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection