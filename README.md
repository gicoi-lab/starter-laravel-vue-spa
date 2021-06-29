# starter-laravel-vue-spa

## 注意事項

1. 不採用 `laravel/ui` 套件
2. bootstrap / vue or react 不透過 php artisan ui 管理，直接使用 npm / yarn 獨立管理
3. 專案根目錄 `/` 為標準 laravel project 資料夾結構
4. 專案目錄 `/webapp-web` 為 nodejs / webpack 專案目錄

## 重要檔案 for laravel
1. `resources/views/welcome.blade.php`
2. `route/web.php`
3. `route/api.php`
4. `public/js` & `public/css`

## 測試
1. 預設路由： http://127.0.0.1:8000
1. 直接訪問： http://127.0.0.1:8000/welcome
1. act=TEST http://127.0.0.1:8000/welcome/TEST
1. act=load, guid=c21856a8-101e-4d1a-a0ef-9c67c44b5c5f http://127.0.0.1:8000/welcome/load/c21856a8-101e-4d1a-a0ef-9c67c44b5c5f
1. API entry point： http://127.0.0.1:8000/api/user?act=loading&guid=c21856a8-101e-4d1a-a0ef-9c67c44b5c5f

## Screenshot 
![Image](./resources/images/Screenshot.png)

---

## Install
### laravel
php packages
```shell
composer install
```

### nodejs  (**optional**)
nodejs packages
```shell
yarn install
```
or 
```shell
npm install
```

## Development
### laravel
run with

```shell
php artisan serve
```

open `http://127.0.0.1:8000`


### nodejs  (**optional**)
TODO

---
The MIT License (MIT)

2021 Copyright (c) Gicoi Labs. JunYuan Yan <luke@jyyan.info>, YaLing Peng

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
