@extends('layouts.app')

@section('content')

    <section class="mb-5">
        <h1>ようこそ！</h1>
        <hr>
        <h3>Tasklist</h3>
        <p>シンプルなタスク管理アプリです。</p>
    </section>
    <section>
        {!! link_to_route('signup', 'はじめよう！', null, ['class' => 'btn btn-primary btn-lg']) !!}
        <p class="mt-2">ログインは{!! link_to_route('login', 'こちら') !!}</p>
    </section>
    
@endsection

               


