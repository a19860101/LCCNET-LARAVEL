## MVC

Model 模型
View 視圖
Controller 控制器

## 從github下載的執行方法
1. 將下載好的資料夾放到xampp/htdocs內
2. 透過localhost建立資料庫
3. 執行 ``` composer install``` 安裝所需套件
4. 執行 ``` copy .env.example .env``` 產生.env
5. 設定.env內的資料庫資訊
6. 執行 ``` php artisan key:generate ``` 產生金鑰
7. 執行 ``` php artisan serve ``` 開啟測試伺服器

## put 與 patch
* put(替換資源)
> 用put方法送出更新，不只使用者的姓名會更新，連帶的連其實沒有要更新的大頭照以及描述都會在更新一次。

* patch(更換資源部分內容)
> 用patch方法送出更新，則僅會將使用者姓名更新 ，沒有動到的大頭照以及描述並不會也一起更新一次。