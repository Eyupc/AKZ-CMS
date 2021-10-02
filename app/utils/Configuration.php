<?php


namespace App\utils;


class Configuration
{

   const nitroPath = "http://localhost/Nitro/index.html";

   const flashConfig = array(
       'url'=>'http://localhost',
       'external_override_variables' => 'http://localhost/ms-swf/gamedata/override/external_override_variables.txt?v=4',
       'external_override_texts'     => 'http://localhost/ms-swf/gamedata/override/external_flash_override_texts.txt?v=9',
       'external_variables'          => 'http://localhost/ms-swf/gamedata/external_variables.txt?v=11',
       'external_texts'              => 'http://localhost/ms-swf/gamedata/external_flash_texts.txt',
       'external_figuredata'         => 'http://localhost/ms-swf/gamedata/figuredata.xml',
       'external_figuremap'          => 'http://localhost/ms-swf/gamedata/figuremap.xml',
       'external_productdata'        => 'http://localhost/ms-swf/gamedata/productdata.txt',
       'external_furnidata'          => 'http://localhost/ms-swf/gamedata/furnidata.xml?v=5',
       'production_path'             => 'http://localhost/ms-swf/gordon/PRODUCTION-202006192205-424220153/',
       'Habbo_swf'                   =>  'habbo.swf',
       'emu_host'                    => '127.0.0.1',
       'emu_port'                    => 30000
   );

   const maintenance = false;
   const maintenanceMinRank  = 2;


}
