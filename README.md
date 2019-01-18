---- ofashion CC API框架1.0 ----




1.将当前项目从线上分支拉出一个升PHP7专用分支, 记录当前版本号

2.mkdir olden && ls | grep -v olden | xargs -I {} mv {} olden

3.
```json
{
    "name": "ofashion/buyer",
    "description": "buyer API",
    "license": "MIT",
    "type": "project",
    "require": {
        "php": ">=7.1.3",
        "ofashion/cframe": "dev-master"
    },
    "repositories": [
        {
            "type": "composer",
            "url": "https://packages.ofashion.com.cn"
        }
    ],
    "require-dev": {
        "symfony/var-dumper": "^4.2"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "files": [
            "app/Helper/helper.php"
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

4. composer install

5.cp -r vendor/ofashion/cframe/demo/* .

6.
>    root /var/www/html/buyer/public;
>
>    location / {
>        try_files $uri $uri/ /index.php?$query_string;
>    }


3.在项目根目录新建一个叫olden的文件夹，将根目录除了vendor以外的所有文件和文件夹挪进去

4.将vendor/framework/demo中的所有文件和文件夹拷贝到项目根目录

5.将olden中的controller、logic、model文件拷贝到app中的对应文件夹中，注意BaseController、BaseLogic、BaseModel


