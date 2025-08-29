# MantanDteam
ファミレス「マンタン」の注文タブレット開発

## laravel取り込み後の手順書
1. .envファイルを作成
    ファイル構成：order_app/.env

2. .envファイルにコピペ

3. 順番にコマンドを実行
    docker compose build
    docker compose up -d
    docker compose run app bash
    compose install

4. コンテナ内に出てもう一度立ち上げ
    docker compose build
    docker compose up -d