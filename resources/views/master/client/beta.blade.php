<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Beta</title>
    <base href="/">
    <meta name="viewport" content="width=500, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <link rel="icon" href="https://habron.biz/assets/images/favicon.ico">
    <link rel="stylesheet" href="/images/envanter.css">
<link href="/static/css/main.dd6afc03.chunk.css" rel="stylesheet">
<body>

<iframe style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:1;" src="{{$nitroPath . '?sso=' . auth()->user()->auth_ticket}}"></iframe>
<div id="root"></div>


<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>

<script >
var WSConfiguration = {
	ws:"ws://127.0.0.1:2083",
	sso:"{{auth()->user()->auth_ticket}}",
	icons:"http://localhost/ms-swf/dcr/hof_furni/icons/"
}
</script>

<script>!function(e){function t(t){for(var n,l,i=t[0],f=t[1],a=t[2],p=0,s=[];p<i.length;p++)l=i[p],Object.prototype.hasOwnProperty.call(o,l)&&o[l]&&s.push(o[l][0]),o[l]=0;for(n in f)Object.prototype.hasOwnProperty.call(f,n)&&(e[n]=f[n]);for(c&&c(t);s.length;)s.shift()();return u.push.apply(u,a||[]),r()}function r(){for(var e,t=0;t<u.length;t++){for(var r=u[t],n=!0,i=1;i<r.length;i++){var f=r[i];0!==o[f]&&(n=!1)}n&&(u.splice(t--,1),e=l(l.s=r[0]))}return e}var n={},o={1:0},u=[];function l(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,l),r.l=!0,r.exports}l.m=e,l.c=n,l.d=function(e,t,r){l.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,t){if(1&t&&(e=l(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(l.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)l.d(r,n,function(t){return e[t]}.bind(null,n));return r},l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,"a",t),t},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l.p="/";var i=this["webpackJsonpWebsocket-Client"]=this["webpackJsonpWebsocket-Client"]||[],f=i.push.bind(i);i.push=t,i=i.slice();for(var a=0;a<i.length;a++)t(i[a]);var c=f;r()}([])</script><script src="/static/js/2.fa2198f8.chunk.js"></script><script src="/static/js/main.7a96634f.chunk.js"></script>
</body>
</html>