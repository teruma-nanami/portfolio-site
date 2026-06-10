.PHONY: up down restart build install fresh migrate seed test pint shell logs

up: ## コンテナ起動
	./vendor/bin/sail up -d

down: ## コンテナ停止
	./vendor/bin/sail down

restart: ## コンテナ再起動
	./vendor/bin/sail restart

build: ## コンテナビルド
	./vendor/bin/sail build --no-cache

install: ## 初期セットアップ
	./vendor/bin/sail composer install
	./vendor/bin/sail artisan key:generate
	./vendor/bin/sail artisan migrate

fresh: ## DB初期化 + シード
	./vendor/bin/sail artisan migrate:fresh --seed

migrate: ## マイグレーション実行
	./vendor/bin/sail artisan migrate

seed: ## シーディング実行
	./vendor/bin/sail artisan db:seed

test: ## テスト実行
	./vendor/bin/sail artisan test

pint: ## コードフォーマット (Laravel Pint)
	./vendor/bin/sail bin pint

shell: ## アプリコンテナにログイン
	./vendor/bin/sail shell

logs: ## ログ表示
	./vendor/bin/sail logs -f
