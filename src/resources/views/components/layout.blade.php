<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>奈波輝磨ポートフォリオ</title>
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex min-h-screen flex-col bg-gray-50 text-gray-900">
        <header class="bg-purple-900 shadow-sm">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('profile') }}" class="text-lg font-bold text-white">
                    奈波輝磨ポートフォリオ
                </a>
                <ul class="flex gap-2 text-sm">
                    <li>
                        <a href="{{ route('profile') }}" class="rounded-full px-3 py-1.5 font-medium {{ request()->routeIs('profile') ? 'bg-white text-purple-900' : 'text-purple-100 hover:text-white' }}">
                            プロフィール
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('process') }}" class="rounded-full px-3 py-1.5 font-medium {{ request()->routeIs('process') ? 'bg-white text-purple-900' : 'text-purple-100 hover:text-white' }}">
                            開発プロセス
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="rounded-full px-3 py-1.5 font-medium {{ request()->routeIs('contact') ? 'bg-white text-purple-900' : 'text-purple-100 hover:text-white' }}">
                            お問い合わせ
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="mx-auto w-full max-w-6xl flex-1 px-4 py-8 sm:px-6 lg:px-8">
            <div class="rounded-lg bg-white p-6 shadow-sm sm:p-8">
                {{ $slot }}
            </div>
        </main>

        <footer class="bg-purple-900">
            <div class="mx-auto max-w-6xl px-4 py-6 text-center text-sm text-white sm:px-6 lg:px-8">
                &copy; {{ date('Y') }} 奈波輝磨ポートフォリオ
            </div>
        </footer>
    </body>
</html>
