---- ofashion CC API框架1.0 ----




1.将当前项目从线上分支拉出一个升PHP7专用分支, 记录当前版本号

2.mkdir olden && ls | grep -v olden | xargs -I {} mv {} olden

3.cp -r vendor/ofashion/cframe/demo/* . && mv env.example .env && mv composer.json.example composer.json
 
4. 修改composer.json 然后 composer install
```json
{
  "name": "ofashion/buyer",
  "description": "buyer API",
  "license": "MIT",
  "type": "project",
  "require": {
    "php": ">=7.2",
    "ofashion/cframe": "dev-master",
    "ofashion/ci_db_adapter": "dev-master",
    "ext-pdo": "*",
    "ext-json": "*"
  },
  "repositories": [
    {
      "type": "composer",
      "url": "https://packages.ofashion.com.cn"
    }
  ],
  "require-dev": {
    "phpunit/phpunit": "^7.5",
    "symfony/var-dumper": "^4.2"
  },
  "autoload": {
    "psr-4": {
      "App\\": "app/"
    },
    "files": [
      "app/Helper/helper.php",
      "app/Constants/constants.php"
    ]
  },
  "minimum-stability": "stable",
  "prefer-stable": true,
  "config": {
    "sort-packages": true,
    "optimize-autoloader": true
  }
}
```


5.拷贝demo文件,批量替换Demo 为 App
cp -r vendor/ofashion/cframe/demo/* .

6.配置env文件
mv env.example .env

7. 配置nginx
>    root /var/www/html/buyer/public;
>
>    location / {
>        try_files $uri $uri/ /index.php?$query_string;
>    }

8.IDE language level


注意事项：
类名转大驼峰
success和failed的结构