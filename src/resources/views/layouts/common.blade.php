<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">

        <div class="footer__inner">
            <ul>
                @auth
                <li class="footer__nav--list">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">管理者ログアウト</button>
                    </form>
                </li>
                @else
                <li class="footer__nav--list">
                    <form method="GET" action="{{ route('login') }}">
                        @csrf
                        <button type="submit">管理者ログイン</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </footer>
</body>

</html>
