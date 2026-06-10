# CLAUDE.md

このファイルは Claude Code 起動時のインデックスハブ。常時ロードされる。

## プロジェクト概要

| 項目 | 値 |
| --- | --- |
| アプリケーション構成 | Laravel単体構成 |
| フロントエンド | Blade + Tailwind CSS |
| データベース | SQLite |
| 開発環境 | Laravel Sail (Docker) |
| タスクランナー | Makefile |

## リポジトリ構造

```
portfolio/
├── CLAUDE.md
├── Makefile
├── .claude/
│   ├── settings.json
│   ├── agents/        # 専門エージェント定義
│   ├── rules/         # 常時参照する開発ルール
│   └── skills/        # フェーズ別スキル(スラッシュコマンド)
├── .github/
│   ├── ISSUE_TEMPLATE/
│   ├── pull_request_template.md
│   └── workflows/
├── docs/
│   ├── requirements/
│   ├── features/
│   ├── architecture/
│   ├── decisions/
│   └── development/
└── (標準Laravelディレクトリ: app/ config/ database/ resources/ routes/ tests/ など)
```

## 参照先

- 開発ルール: `.claude/rules/`
- スキル一覧: `.claude/skills/README.md`
- 仕様・設計ドキュメント: `docs/`
- Issue駆動開発の進め方: `docs/development/issue-driven-workflow.md`
