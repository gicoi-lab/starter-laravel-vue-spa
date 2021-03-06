<!DOCTYPE html>
<html lang="zh">
<!--語系寫固定值-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="zh-tw">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!--        預設 page title, 可被 google search engine 索引，-->
    <!--        但 SPA 啟動後，page title 將由 SPA 程式接管-->
    <title>Laravel SPA</title>
    <link href="{{ asset('/css/chunk-vendors.css') }}" rel="preload" as="style">
    <link href="{{ asset('/css/xptSpaPlugin.css') }}" rel="preload" as="style">
    <link href="{{ asset('/js/chunk-vendors.js') }}" rel="preload" as="script">
    <link href="{{ asset('/js/xptSpaPlugin.js') }}" rel="preload" as="script">
    <link href="{{ asset('/css/chunk-vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/xptSpaPlugin.css') }}" rel="stylesheet">
</head>
<body>

<!--SPA 應用應用程式於 HTML DOM 中的 entry point, id="app" 需為固定值（與 SPA 程式端約定好 id 值）-->
<!-- SPA page plugin -->
<!-- SPA page plugin -->
<!-- SPA page plugin -->
<div id="spa-app">
    <noscript>
        <h1 align="center">Javascript 已停用</h1>
        <h3 align="center">
            本網站需要JavaScript， <br>
            請啟用 JavaScript，然後重新整理頁面
        </h3>
    </noscript>
</div>
<!-- SPA page plugin -->
<!-- SPA page plugin -->
<!-- SPA page plugin -->

<script src="{{ asset('/js/chunk-vendors.js') }}"></script>
<script src="{{ asset('/js/xptSpaPlugin.js') }}"></script>
</body>
</html>
