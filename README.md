# オンラインスキルアップSTEP1開発環境


## 起動・停止

起動
```
$ docker-compose up -d
```

停止
```
$ docker-compose down
```

## URL

index.php  
http://localhost:9000

phpmyadmin  
http://localhost:9001


## 構成
* phpなコンテンツは./appに配置となります  
* mysqlの設定は./mysql/conf/custom.cnf
* nginxの設定は./nginx/site.conf

```
.
├── app
│   └── index.php
├── mysql
│   └── conf
│       └── custom.cnf
│   └── data
│       └── .gitkeep
├── nginx
│   └── site.conf
├── phpmyadmin
│   └── sessions
│       └── .gitkeep
├── docker-compose.yml
├── .gitignore
└── README.md
```
