# phpunit_and_webdriver
phpunitとwebdriverの練習用リポジトリ

# Dockerについて
コンテナを起動するときに以下コマンドを実行するとホストOSとコンテナ間でファイル共有される
```
docker run -v /Users/h_hiroki/Projects/phpunit_and_webdriver:/projects -it -d --name ubuntu_php ubuntu_php:ubuntu_php
```

# コンテナを更新する場合
コンテナを消して、イメージをビルドして、-vオプションありでコンテナを起動する。（そしてコンテナに入る）


1. docker rm -f ubuntu_php
2. docker build -t ubuntu_php:ubuntu_php .
3. docker run -v /Users/h_hiroki/Projects/phpunit_and_webdriver:/projects -it -d --name ubuntu_php ubuntu_php:ubuntu_php
4. docker exec -it ubuntu_php bash