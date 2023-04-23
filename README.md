# Wordpressのblog用練習サイト

## ローカル環境構築について

### Dockerのボリュームを使った開発

```
docker-compose build
docker-compose up
```

### FileZillaを使った開発

```
docker-compose build
docker-compose up
docker ps
docker exec -it コンテナID /bin/bash
service vsftpd start
chmod -R 755 wp-content/themes/
chown -R ftpuser wp-content/themes/

filezillaで以下を設定
ホスト：localhost
通信：FTP
ポート:21
user: ftpuser
pw: ftpuser
```
