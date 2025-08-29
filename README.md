# MantanDteam
ファミレス「マンタン」の注文タブレット開発

## laravel取り込み後の手順書
1. .envファイルを作成<br>
    ファイル構成：order_app/.env

2. .envファイルにコピペ<br>
    slackに記載

3. 順番にコマンドを実行<br>
    docker compose build<br>
    docker compose up -d<br>
    docker compose run app bash<br>
    compose install

4. コンテナ内に出てもう一度立ち上げ<br>
    docker compose build<br>
    docker compose up -d