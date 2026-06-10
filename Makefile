.PHONY: up down restart build install fresh migrate seed test pint shell logs

up: ## コンテナ起動
	cd src && ./vendor/bin/sail up -d

down: ## コンテナ停止
	cd src && ./vendor/bin/sail down

restart: ## コンテナ再起動
	cd src && ./vendor/bin/sail restart

build: ## コンテナビルド
	cd src && ./vendor/bin/sail build --no-cache

install: ## 初期セットアップ
	cd src && ./vendor/bin/sail composer install
	cd src && ./vendor/bin/sail artisan key:generate
	cd src && ./vendor/bin/sail artisan migrate

fresh: ## DB初期化 + シード
	cd src && ./vendor/bin/sail artisan migrate:fresh --seed

migrate: ## マイグレーション実行
	cd src && ./vendor/bin/sail artisan migrate

seed: ## シーディング実行
	cd src && ./vendor/bin/sail artisan db:seed

test: ## テスト実行
	cd src && ./vendor/bin/sail artisan test

pint: ## コードフォーマット (Laravel Pint)
	cd src && ./vendor/bin/sail bin pint

shell: ## アプリコンテナにログイン
	cd src && ./vendor/bin/sail shell

logs: ## ログ表示
	cd src && ./vendor/bin/sail logs -f
