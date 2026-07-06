# 奈波輝磨ポートフォリオ

就職・転職活動のため、自身のスキルや実績を採用担当者・企業へアピールするポートフォリオサイトです。
あわせて、本サイト自体の開発をIssue駆動・AI駆動開発で進め、その取り組み自体も成果としてアピールしています。

🔗 公開URL: [https://nanami-teruma.net](https://nanami-teruma.net)

## 技術スタック

| 項目           | 技術                       |
| -------------- | -------------------------- |
| バックエンド   | PHP 8.3 / Laravel 13.8     |
| フロントエンド | Blade + Tailwind CSS 4     |
| ビルドツール   | Vite 8                     |
| データベース   | SQLite                     |
| 開発環境       | Laravel Sail（Docker）     |

## 画面一覧

| 画面         | パス        | 内容                                       |
| ------------ | ----------- | ------------------------------------------ |
| プロフィール | `/`         | 自己紹介・経歴・スキルなど                 |
| 開発プロセス | `/process`  | Issue駆動・AI協調開発のプロセス紹介        |
| お問い合わせ | `/contact`  | お問い合わせフォーム                       |

## 開発プロセス：Issue駆動 × AI協調開発

GitHub Issueによるタスク管理を軸に、自社仕様のAIカスタムSkillを組み込んだ、再現性の高いAI協調開発パイプラインで開発しています。

1. **要件定義**（`/requirements`）：対話形式で要望を整理し、要件ドキュメントへ落とし込む
2. **Issue分割**（`/issue`）：ユーザー価値単位でGitHub Issueへ分割・起票する
3. **事前設計**（`/analyze`）：実装方針シートを作成し、人間が承認してから実装に着手する
4. **二重レビュー**：Claude Codeによる1次レビューと、Geminiによる2次レビューを実施する
5. **PRマージ**：人間が最終確認したうえで`develop`へマージする

詳細な取り組みは、公開中の[開発プロセスページ](https://nanami-teruma.net/process)で紹介しています。

## CI実行状況について

過去のPull Requestの中には、GitHub Actions上のCIチェックが❌（失敗）のままマージされているものがあります。これはIssue駆動開発の過程で実際に発生した既知の問題であり、経緯を記録として残します。

**発生していた問題**

- 2026年6月17日〜2026年7月6日の間、新規に作成したPRのCIが13件連続で失敗していた
- 前半の原因は、既存コードがLaravel Pintの整形ルール（`single_line_empty_body`・`phpdoc_align`）に違反していたこと
- 後半の原因は、CIワークフローにフロントエンドのビルド（`npm run build`）ステップが存在せず、テスト実行時に`public/build/manifest.json`が生成されないままViteアセットの解決に失敗していたこと

**対応内容**

- [Issue #32](https://github.com/teruma-nanami/portfolio-site/issues/32) / [PR #33](https://github.com/teruma-nanami/portfolio-site/pull/33)（2026年7月6日マージ）で、既存コードのPint整形と、CIワークフローへのNode.jsセットアップ・`npm ci`・`npm run build`ステップの追加を実施した
- 以降に作成したPRでは、CIが正常に成功する状態になっている

**注意事項**

- 上記の対応前にマージされたPRに残るCIチェック結果（❌）は、当時のワークフロー・コードに起因する既知の問題であり、現在の`develop`の健全性を反映するものではない
- 現在の`develop`は、`sail bin pint --test`・`sail artisan test`がいずれも成功する状態であることを確認済み
