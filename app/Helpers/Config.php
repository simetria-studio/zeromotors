<?php

use App\Models\SiteConfig;

function getConfigs()

{
    $conf = SiteConfig::get()->first();
    return $conf;
}
