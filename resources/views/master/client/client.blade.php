<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Game</title>
    <script src="http://localhost/assets/flash/jquery-latest.js" type="text/javascript"></script>
    <script src="http://localhost/assets/flash/jquery-ui.js" type="text/javascript"></script>
    <script src="http://localhost/assets/flash/flashclient.js" type="text/javascript"></script>
    <script src="http://localhost/assets/flash/flash_detect_min.js" type="text/javascript"></script>
    <script src="http://localhost/assets/flash/client.js" type="text/javascript"></script>

</head>
<body>
<div class="client" id="client"></div>

    <script>
        var Client = new SWFObject("{{$flashConfig['production_path'] . $flashConfig['Habbo_swf']}}", "client", "100%", "100%", "10.0.0");
        Client.addVariable("client.allow.cross.domain", "1");
        Client.addVariable("client.notify.cross.domain", "1");
        Client.addVariable("connection.info.host", "{{$flashConfig['emu_host']}}");
        Client.addVariable("connection.info.port", "{{$flashConfig['emu_port']}}");
        Client.addVariable("site.url", "{{$flashConfig['url']}}");
        Client.addVariable("url.prefix", "{{$flashConfig['url']}}");
        Client.addVariable("client.reload.url", "{{$flashConfig['url']}}/me");
        Client.addVariable("client.fatal.error.url", "{{$flashConfig['url']}}/me");
        Client.addVariable("client.connection.failed.url", "{{$flashConfig['url']}}/me");
        Client.addVariable("external.override.texts.txt", "{{$flashConfig['external_override_texts']}}");
        Client.addVariable("external.override.variables.txt", "{{$flashConfig['external_override_variables']}}");
        Client.addVariable("external.variables.txt", "{{$flashConfig['external_variables']}}");
        Client.addVariable("external.texts.txt", "{{$flashConfig['external_texts']}}");
        Client.addVariable("external.figurepartlist.txt", "{{$flashConfig['external_figuredata']}}");
        Client.addVariable("flash.dynamic.avatar.download.configuration", "{{$flashConfig['external_figuremap']}}");
        Client.addVariable("productdata.load.url", "{{$flashConfig['external_productdata']}}");
        Client.addVariable("furnidata.load.url", "{{$flashConfig['external_furnidata']}}");
        Client.addVariable("use.sso.ticket", "1");
        Client.addVariable("sso.ticket", "{{auth()->user()->auth_ticket}}");
        Client.addVariable("processlog.enabled", "0");
        Client.addVariable("client.starting", " is loading...");
        Client.addVariable("flash.client.url", "{{$flashConfig['production_path']}}");
        Client.addVariable("flash.client.origin", "popup");
        Client.addVariable("ads.domain", "");
        Client.addVariable("diamonds.enabled", '1');
        Client.addParam('base', '{{$flashConfig['production_path']}}');
        Client.addParam('allowScriptAccess', 'always');
        Client.addParam('wmode', "opaque");
        Client.write('client');
        FlashExternalInterface.signoutUrl = "/logout";
    </script>
</body>
</html>
