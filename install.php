<?php

$content = rex_file::get(rex_path::addon('ycom', 'install/tablesets/yform_user.json'));
rex_yform_manager_table_api::importTablesets($content);

$this->getPlugin('auth')->includeFile(__DIR__.'/plugins/auth/install.php');

if ($this->getPlugin('group')->isInstalled()) {
    $this->getPlugin('group')->includeFile(__DIR__.'/plugins/group/install.php');
}

if ($this->getPlugin('media_auth')->isInstalled()) {
    $this->getPlugin('media_auth')->includeFile(__DIR__.'/plugins/media_auth/install.php');
}

rex_delete_cache();