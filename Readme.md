# seribune

水俣市競り舟協会のカスタムテーマです。

## Setup

ローカル環境でテストするときは、VScodeとDockerを利用すると便利です。

```sh
git clone https://github.com/SC-hisayo/seribune.git
cd seribune
docker compose up -d
```

https://localhost:8080 で確認することができます。  
最初は適当なユーザーとパスワードを設定します。

カスタムテーマをインストールし、デザインや動作を確認します。

### Required

* VScode
* Docker

### VScode Extensions

あると便利なVScodeの拡張機能です。

* Live Server
* Live Sass Compiler
* PHP Intelephense

## Deploy

CI/CDなどの実装は行ってません。
手動でzip化を行いテーマのアップロードをお願いします。

```sh
cd wp/
zip seribune.zip seribune/**/*
```
