<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        
        <a class="navbar-brand" href="/">
            <i class="fas fa-tasks"></i> Tasklist
        </a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar-nav">
            <ul class="navbar-nav mx-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item">
                        {!! link_to_route('tasks.index', 'タスク一覧', null, ['class' => 'nav-link']) !!}
                    </li>
                    <li class="nav-item">
                        {!! link_to_route('tasks.create', '新規作成', null, ['class' => 'nav-link']) !!}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">
                                {!! link_to_route('logout', 'ログアウト') !!}
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        {!! link_to_route('login', 'ログイン', null, ['class' => 'nav-link']) !!}
                    </li>
                    <li class="nav-item">
                        {!! link_to_route('signup', 'ユーザ登録', null, ['class' => 'nav-link']) !!}
                    </li>
                @endif
            </ul>
        </div>
        
    </nav>
</header>