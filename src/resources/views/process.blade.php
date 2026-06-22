<x-layout>
    <section>
        <h1 class="text-3xl font-bold text-indigo-600 sm:text-4xl">開発プロセス</h1>
        <p class="mt-6 text-lg leading-relaxed text-gray-700">
            GitHub Issueによる厳格なタスク管理を軸に、自社仕様のAIカスタムSkillを組み込んだ、再現性の高いAI協調開発パイプラインです。
        </p>

        <div class="mt-8 grid gap-4 sm:grid-cols-3">
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                <p class="text-lg font-bold text-gray-900">Issue駆動</p>
                <p class="mt-2 text-base text-gray-600 leading-relaxed">変更理由をIssue、PR、コード差分に紐付けます。</p>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                <p class="text-lg font-bold text-gray-900">AI協調</p>
                <p class="mt-2 text-base text-gray-600 leading-relaxed">AIの速度を活用し、人間が設計と判断を担います。</p>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                <p class="text-lg font-bold text-gray-900">品質管理</p>
                <p class="mt-2 text-base text-gray-600 leading-relaxed">実装前後にレビュー工程を設け、手戻りを減らします。</p>
            </div>
        </div>
    </section>

    <section class="mt-12">
        <h2 class="border-l-4 border-indigo-500 pl-3 text-2xl font-bold sm:text-3xl">Issue駆動型 AI協調開発フロー</h2>
        <p class="mt-4 text-base text-gray-600 leading-relaxed">
            要件定義からPRマージまでを、5つのフェーズで管理します。
        </p>

        <div class="mt-6 flex flex-wrap items-center gap-2">
            <div class="flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-2 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">01</span>
                <p class="text-base font-semibold text-gray-900">要件定義</p>
            </div>
            <span class="text-gray-300" aria-hidden="true">→</span>
            <div class="flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-2 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">02</span>
                <p class="text-base font-semibold text-gray-900">Issue分割</p>
            </div>
            <span class="text-gray-300" aria-hidden="true">→</span>
            <div class="flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-2 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">03</span>
                <p class="text-base font-semibold text-gray-900">事前設計</p>
            </div>
            <span class="text-gray-300" aria-hidden="true">→</span>
            <div class="flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-2 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">04</span>
                <p class="text-base font-semibold text-gray-900">二重レビュー</p>
            </div>
            <span class="text-gray-300" aria-hidden="true">→</span>
            <div class="flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-3 py-2 shadow-sm">
                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">05</span>
                <p class="text-base font-semibold text-gray-900">PRマージ</p>
            </div>
        </div>
    </section>

    <section class="mt-12 space-y-6">
        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <p class="text-base font-bold text-indigo-600">PHASE 01</p>
                <span class="rounded-full bg-indigo-50 px-2.5 py-0.5 text-sm font-medium text-indigo-700">/requirements</span>
            </div>
            <h3 class="mt-4 text-xl font-bold text-gray-900">対話型要件定義とドキュメント化</h3>
            <p class="mt-4 text-base text-gray-700 leading-relaxed">
                開発の最初に、AIへいきなりコードを書かせることはしません。
                人間の抽象的な要望を整理し、仕様として扱える状態にしてから開発へ進みます。
            </p>

            <div class="mt-6 rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                <p class="text-base font-semibold text-indigo-600">【実践していること】</p>
                <ul class="mt-2 list-disc list-inside space-y-1 text-base text-gray-600">
                    <li>
                        カスタムSkill
                        <code class="rounded bg-white px-1.5 py-0.5 text-gray-800 ring-1 ring-gray-200">/requirements [要望の概要]</code>
                        を使い、目的・背景・利用者・必要な挙動・受け入れ条件・対象外・制約を整理します。
                    </li>
                    <li>AIからの質問は一度に2〜3問までに制限し、曖昧な回答に対しては勝手に仕様を補完させず、選択肢を提示させた上で人間が判断します。</li>
                </ul>
            </div>

            <div class="mt-6 grid gap-3 text-base sm:grid-cols-2">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="font-semibold text-gray-700">成果物</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>docs/requirements/*.md</li>
                        <li>docs/maintenance/*.md</li>
                    </ul>
                </div>
                <div class="rounded-lg border border-rose-100 bg-rose-50/50 p-3">
                    <p class="font-semibold text-rose-700">制約</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>承認前のファイル作成禁止</li>
                        <li>既存ファイルの勝手な変更禁止</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <p class="text-base font-bold text-indigo-600">PHASE 02</p>
                <span class="rounded-full bg-indigo-50 px-2.5 py-0.5 text-sm font-medium text-indigo-700">/issue</span>
            </div>
            <h3 class="mt-4 text-xl font-bold text-gray-900">要件の縦分割設計と GitHub Issue 起票</h3>
            <p class="mt-4 text-base text-gray-700 leading-relaxed">
                要件をそのまま大きなタスクとして扱うのではなく、ユーザー価値単位でIssueに分割します。
                技術レイヤー単位の横分割は避け、単独で意味のある変更単位にします。
            </p>

            <div class="mt-6 rounded-lg border border-indigo-100 bg-indigo-50/50 p-3">
                <p class="text-base font-semibold text-indigo-700">【分割原則】</p>
                <p class="mt-2 text-base text-gray-600 leading-relaxed">
                    各Issueは、単独でマージされたときに、利用者または開発者が画面上で確認できる完了状態を持っていること。
                    この条件を満たす縦割りの機能単位でのみIssue化します。
                </p>
            </div>

            <div class="mt-6 rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                <p class="text-base font-semibold text-indigo-600">【実践していること】</p>
                <p class="mt-2 text-base text-gray-600 leading-relaxed">
                    カスタムSkill
                    <code class="rounded bg-white px-1.5 py-0.5 text-gray-800 ring-1 ring-gray-200">/issue [要件パス]</code>
                    を使い、受け入れ条件・依存関係・ラベルを整理します。
                    受け入れ条件が曖昧な場合は、前提・操作・期待結果が明確になるまで修正します。
                </p>
            </div>

            <div class="mt-6 grid gap-3 text-base sm:grid-cols-2">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="font-semibold text-gray-700">担保する成果</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>ユーザー価値ベースのIssue構造</li>
                        <li>テスト可能な受け入れ条件</li>
                        <li>依存関係を整理した起票</li>
                    </ul>
                </div>
                <div class="rounded-lg border border-rose-100 bg-rose-50/50 p-3">
                    <p class="font-semibold text-rose-700">制約</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>技術レイヤー単位での分割禁止</li>
                        <li>承認前の勝手なIssue起票禁止</li>
                        <li>曖昧な受け入れ条件の放置禁止</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <p class="text-base font-bold text-indigo-600">PHASE 03</p>
            <h3 class="mt-4 text-xl font-bold text-gray-900">実装方針シートによる事前設計レビュー</h3>
            <p class="mt-4 text-base text-gray-700 leading-relaxed">
                実装前に、AIへ実装方針シートを作成させます。
                いきなりコードを書き始めるのではなく、変更対象・設計意図・影響範囲を確認してから実装します。
            </p>

            <div class="mt-6 space-y-3">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">1. 実装方針の確認</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        変更対象のファイルパス、新設するクラスや関数の役割、ディレクトリ構成、既存コードへの影響範囲を確認します。
                    </p>
                </div>

                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">2. 1 Issue = 1 Branch の徹底</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        ブランチは
                        <code class="rounded bg-white px-1.5 py-0.5 text-gray-800 ring-1 ring-gray-200">feature/#XX-task-name</code>
                        の形式で作成し、差分を小さく保ちます。
                    </p>
                </div>

                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">3. Figma連携によるUI実装</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        FigmaをMCPサーバー経由でAIに読み込ませ、見た目だけでなく、UI構造やTailwind CSSのクラス設計も含めて再現性を高めます。
                    </p>
                </div>

                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">4. コミットメッセージの統一</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        <code class="rounded bg-white px-1.5 py-0.5 text-gray-800 ring-1 ring-gray-200">feat:</code>
                        や
                        <code class="rounded bg-white px-1.5 py-0.5 text-gray-800 ring-1 ring-gray-200">fix:</code>
                        などの接頭辞を使い、変更内容が分かる日本語メッセージで履歴を残します。
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-3 text-base sm:grid-cols-2">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="font-semibold text-gray-700">担保する品質</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>最小限で追いやすい差分</li>
                        <li>事前設計による手戻り削減</li>
                        <li>一貫したコミット履歴</li>
                    </ul>
                </div>
                <div class="rounded-lg border border-rose-100 bg-rose-50/50 p-3">
                    <p class="font-semibold text-rose-700">制約</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>実装方針承認前のコード変更禁止</li>
                        <li>内容が不透明なコミット禁止</li>
                        <li>スコープ外のついで修正禁止</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <p class="text-base font-bold text-indigo-600">PHASE 04</p>
            <h3 class="mt-4 text-xl font-bold text-gray-900">Claude Code × Gemini による二重レビュー</h3>
            <p class="mt-4 text-base text-gray-700 leading-relaxed">
                実装後すぐにPRを出すのではなく、AIによるレビュー工程を挟みます。
                人間のレビュー前に、規約違反・軽微なバグ・考慮漏れを可能な限り削減します。
            </p>

            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">1次レビュー：Claude Code</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        Linter、静的解析、自動テストを実行し、構文エラーや規約違反、既存機能へのデグレを確認します。
                    </p>
                </div>
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">2次レビュー：Gemini</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        実装を担当したAIとは別系統のLLMで確認し、セキュリティ、保守性、パフォーマンスの観点からレビューします。
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-3 text-base sm:grid-cols-2">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="font-semibold text-gray-700">削減する無駄</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>タイポや規約違反のレビューコスト</li>
                        <li>単一AIによる見落とし</li>
                    </ul>
                </div>
                <div class="rounded-lg border border-rose-100 bg-rose-50/50 p-3">
                    <p class="font-semibold text-rose-700">通過基準</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>静的解析・Linterのエラーゼロ</li>
                        <li>Claude / Gemini 双方で修正事項なし</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <p class="text-base font-bold text-indigo-600">PHASE 05</p>
            <h3 class="mt-4 text-xl font-bold text-gray-900">人間の最終判断とPRマージ</h3>
            <p class="mt-4 text-base text-gray-700 leading-relaxed">
                AIによる実装とレビューを活用しつつ、最終的な品質保証とマージ判断は人間が行います。
                AIの出力を鵜呑みにせず、設計思想に合っているかを確認します。
            </p>

            <div class="mt-6 space-y-3">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">人間によるソースコード確認</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        エラーやリファクタリングが発生した場合は、人間がソースコードを直接読み、根本原因と修正方針を判断します。
                    </p>
                </div>

                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="text-base font-bold text-gray-800">IssueとPRの紐付け</p>
                    <p class="mt-2 text-base text-gray-600 leading-relaxed">
                        PR本文には
                        <code class="rounded bg-white px-1.5 py-0.5 text-gray-800 ring-1 ring-gray-200">Closes #Issue番号</code>
                        を含め、Issue、PR、コード差分を一気通貫で追跡できる状態にします。
                    </p>
                </div>
            </div>

            <div class="mt-6 grid gap-3 text-base sm:grid-cols-2">
                <div class="rounded-lg border border-gray-100 bg-gray-50/50 p-3">
                    <p class="font-semibold text-gray-700">残る資産</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>人間の責任で担保されたコード</li>
                        <li>IssueとPRが紐付いた開発履歴</li>
                        <li>後から追跡しやすい変更理由</li>
                    </ul>
                </div>
                <div class="rounded-lg border border-rose-100 bg-rose-50/50 p-3">
                    <p class="font-semibold text-rose-700">制約</p>
                    <ul class="mt-2 space-y-1 text-gray-600">
                        <li>AIの当て推量による修正の繰り返し禁止</li>
                        <li>変更理由が不明瞭なPRマージ禁止</li>
                        <li>人間の検収を省略した自動マージ禁止</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout>
