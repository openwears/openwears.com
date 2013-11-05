<?php

require_once dirname(__FILE__) . "/lib/SimpieCache.php";
require_once dirname(__FILE__) . "/lib/TIPI.php";
require_once dirname(__FILE__) . "/lib/GithubVersionManager.php";
require_once dirname(__FILE__) . "/models/Page.php";

SimpieCache::setGlobalCacheFilePrefix(TIPI::getVersion());
