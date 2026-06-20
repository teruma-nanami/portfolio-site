<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>奈波照磨ポートフォリオ</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-gray-50 text-gray-900">
        <header class="bg-white shadow-sm">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('profile') }}" class="text-lg font-bold text-indigo-600">
                    奈波照磨ポートフォリオ
                </a>
                <ul class="flex gap-4 text-sm">
                    <li>
                        <a href="{{ route('profile') }}" class="font-medium text-gray-600 hover:text-indigo-600">
                            プロフィール
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('process') }}" class="font-medium text-gray-600 hover:text-indigo-600">
                            開発プロセス
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="font-medium text-gray-600 hover:text-indigo-600">
                            お問い合わせ
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="rounded-lg bg-white p-6 shadow-sm sm:p-8">
                {{ $slot }}
            </div>
        </main>

        <footer class="bg-white">
            <div class="mx-auto max-w-6xl px-4 py-6 text-center text-sm text-gray-400 sm:px-6 lg:px-8">
                &copy; {{ date('Y') }} 奈波照磨ポートフォリオ
            </div>
        </footer>
    </body>
</html>
