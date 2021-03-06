@extends('layouts.app')

@section('content')

    <h1>ログイン</h1>
    
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メール') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('ログイン', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    

@endsection