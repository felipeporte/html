<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_4_6_0($object)
{
    $object->unregisterHook('Header');
    $object->registerHook('displayHeader');

    return true;

}

