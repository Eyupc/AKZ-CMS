<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Beta</title>
    <base href="/">
    <meta name="viewport" content="width=500, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <link rel="icon" href="https://habron.biz/assets/images/favicon.ico">
<body>
<iframe style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:1;" src="{{$nitroPath . '?sso=' . auth()->user()->auth_ticket}}"></iframe>
</body>
</html>
