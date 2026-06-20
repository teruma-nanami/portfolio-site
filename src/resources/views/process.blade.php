<x-layout>
    <section>
        <h1 class="text-2xl font-bold text-indigo-600 sm:text-3xl">開発プロセスへのアプローチ</h1>
        <p class="mt-4 leading-relaxed text-gray-700">
            本サイトは、個人のポートフォリオでありながら、実務におけるチーム開発を強く意識した<strong>「Issue駆動開発」</strong>を採用しています。要件定義からIssueの起票、実装、レビュー、Pull Request作成に至るすべての工程をGitHub上で厳格に管理しています。
        </p>
        <p class="mt-2 leading-relaxed text-gray-700">
            また、各工程においては<strong>Claude CodeなどのAI開発エージェント</strong>をフル活用した<strong>「AI駆動開発」</strong>を実践。要件整理、実装方針の壁打ち、テストファーストのコード生成、可読性レビューにAIを組み込むことで、開発ベロシティ（速度）を最大化しています。
            もちろん、方針の最終決定や、レビュー指摘の採用判断といった「システム設計のコア」は人間が主導権を握ることで、品質とスピードを高次元で両立するハイブリッドな開発スタイルを確立しています。
        </p>
        <p class="mt-4">
            <a href="https://github.com/teruma-nanami/portfolio-site" target="_blank" rel="noopener noreferrer" class="inline-flex items-center font-medium text-indigo-600 hover:underline">
                <span>GitHubリポジトリで実際のIssue / PRを見る</span>
                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 16 16" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
            </a>
        </p>
    </section>

    <section class="mt-10">
        <h2 class="border-l-4 border-indigo-500 pl-3 text-xl font-bold sm:text-2xl">実践している開発パイプライン</h2>
        <div class="mt-6 grid gap-6 sm:grid-cols-2">
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm">
                <div class="font-bold text-indigo-600">1. 要件定義 & Issue起票</div>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                    実装したい機能や修正点をタスク単位でGitHub Issueに分解・明文化。AIに対して仕様の「認識ズレ」が起きないよう、ゴールを明確に言語化するスキルをここで担保します。
                </p>
            </div>
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm">
                <div class="font-bold text-indigo-600">2. AIエージェントとの協調実装</div>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                    Claude Code等にIssueの文脈を読み込ませ、最適な設計パターンの壁打ちを行いながら実装。単に生成されたコードを貼るのではなく、可読性や命名規則を常に人間側がチェック・修正します。
                </p>
            </div>
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm">
                <div class="font-bold text-indigo-600">3. 継続的レビュー</div>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                    実装されたコードに対し、AIによる静的解析やリファクタリング提案を実施。表記規則の統一や、将来的なバグの原因になり得る境界値のチェックをこの段階で潰し込みます。
                </p>
            </div>
            <div class="rounded-lg border border-gray-100 bg-white p-5 shadow-sm">
                <div class="font-bold text-indigo-600">4. Pull Request & マージ</div>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                    変更理由と実装内容をロジカルにまとめたPRを作成。個人開発であってもメインブランチへの直接コミットを避け、実務と同じ「丁寧な履歴管理」を徹底しています。
                </p>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <h2 class="border-l-4 border-indigo-500 pl-3 text-xl font-bold sm:text-2xl">このプロセスを支える技術スタック</h2>
        
        <div class="mt-4">
            <p class="text-sm font-semibold text-gray-600 mb-2">■ フレームワーク・環境</p>
            <div class="flex flex-wrap gap-2">
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">PHP 8.x</span>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">Laravel 11</span>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">Laravel Sail (Docker)</span>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">Blade Template</span>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">Tailwind CSS</span>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">Vite</span>
                <span class="rounded-full bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-700">SQLite</span>
            </div>
        </div>

        <div class="mt-4">
            <p class="text-sm font-semibold text-gray-600 mb-2">■ AI & 生産性ツール</p>
            <div class="flex flex-wrap gap-2">
                <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-700">Claude Code (AI開発エージェント)</span>
                <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-700">ChatGPT (Architecture / Wall-Chipping)</span>
                <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-700">GitHub (Issues / Pull Requests / Git)</span>
            </div>
        </div>
    </section>
</x-layout>