<x-layout>
    <section>
        <h1 class="text-2xl font-bold text-purple-900 sm:text-3xl">お問い合わせ</h1>

        @if (session('status'))
            <p class="mt-4 rounded-md bg-green-50 px-4 py-3 text-sm font-medium text-green-700">
                {{ session('status') }}
            </p>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="mt-6 flex flex-col gap-6">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">氏名</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-purple-500 focus:outline-none focus:ring-1 focus:ring-purple-500">
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">メールアドレス</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-purple-500 focus:outline-none focus:ring-1 focus:ring-purple-500">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">問い合わせ内容</label>
                <textarea name="message" id="message" rows="6" class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-purple-500 focus:outline-none focus:ring-1 focus:ring-purple-500">{{ old('message') }}</textarea>
                @error('message')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="self-center rounded-full bg-purple-800 px-10 py-3 text-base font-medium text-white hover:bg-purple-900">
                送信する
            </button>
        </form>
    </section>
</x-layout>
