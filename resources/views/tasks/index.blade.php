@extends('layouts.app')

@section('content')
    
    <h1 class="mb-3">
        <small class="mr-2"><i class="fas fa-check-square"></i></small>
        タスク一覧
    </h1>
    
    @if (count($tasks) == 0)
    
        <div class="alert alert-warning d-flex">
            <div class="mr-3">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <p class="m-0">
                登録されているタスクがありません。<br>
                登録ボタンより登録してください。
            </p>
        </div>
        
    @else
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>状況</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, $task->id, null) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {!! $tasks->links() !!}
        
    @endif
    
    {!! link_to_route('tasks.create', '新規作成', null, ['class' => 'btn btn-outline-secondary']) !!}

@endsection