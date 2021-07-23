<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Game</title>
    <script src="../../../../assets/flash/jquery-latest.js?{{\App\utils\Functions::cache()}}" type="text/javascript"></script>
    <script src="../../../../assets/flash/jquery-ui.js?{{\App\utils\Functions::cache()}}" type="text/javascript"></script>
    <script src="../../../../assets/flash/flashclient.js?{{\App\utils\Functions::cache()}}" type="text/javascript"></script>
    <script src="../../../../assets/flash/flash_detect_min.js?{{\App\utils\Functions::cache()}}" type="text/javascript"></script>
    <script src="../../../../assets/flash/client.js?{{\App\utils\Functions::cache()}}" type="text/javascript"></script>

</head>
<body>
<div class="client" id="client"></div>

    <script>
        var Client = new SWFObject("{{$flashConfig['production_path'] . $flashConfig['Habbo_swf']}}?{{\App\utils\Functions::cache()}}", "client", "100%", "100%", "10.0.0");
        Client.addVariable("client.allow.cross.domain", "1");
        Client.addVariable("client.notify.cross.domain", "1");
        Client.addVariable("connection.info.host", "{{$flashConfig['emu_host']}}");
        Client.addVariable("connection.info.port", "{{$flashConfig['emu_port']}}");
        Client.addVariable("site.url", "{{$flashConfig['url']}}");
        Client.addVariable("url.prefix", "{{$flashConfig['url']}}");
        Client.addVariable("client.reload.url", "{{$flashConfig['url']}}/me");
        Client.addVariable("client.fatal.error.url", "{{$flashConfig['url']}}/me");
        Client.addVariable("client.connection.failed.url", "{{$flashConfig['url']}}/me");
        Client.addVariable("external.override.texts.txt", "{{$flashConfig['external_override_texts']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("external.override.variables.txt", "{{$flashConfig['external_override_variables']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("external.variables.txt", "{{$flashConfig['external_variables']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("external.texts.txt", "{{$flashConfig['external_texts']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("external.figurepartlist.txt", "{{$flashConfig['external_figuredata']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("flash.dynamic.avatar.download.configuration", "{{$flashConfig['external_figuremap']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("productdata.load.url", "{{$flashConfig['external_productdata']}}?{{\App\utils\Functions::cache()}}");
        Client.addVariable("furnidata.load.url", "{{$flashConfig['external_furnidata']}}?{{\App\utils\Functions::cache()}}");
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
