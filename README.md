---- ofashion CC API框架1.0 ----




1.将当前项目从线上分支拉出一个升PHP7专用分支, 记录当前版本号

2.mkdir olden && ls | grep -v olden | xargs -I {} mv {} olden

3.cp -r vendor/ofashion/cframe/demo/* . && mv env.example .env && mv composer.json.example composer.json
 
4.Demo => App

5.修改composer.json 然后 composer install

6.配置env文件

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