<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_4_4_3($object)
{
    $hook_name = 'displayAboveProductsTabs';

    $id_hook = Hook::getIdByName($hook_name);
    // If hook does not exist, we create it
    if (!$id_hook) {
        $new_hook = new Hook();
        $new_hook->name = pSQL($hook_name);
        $new_hook->title = pSQL($hook_name);
        $new_hook->position = 1;
        $new_hook->add();
    }

    return true;
}

