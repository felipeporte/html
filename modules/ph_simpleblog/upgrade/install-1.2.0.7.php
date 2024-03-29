<?php
/**
 * Blog for PrestaShop module by PrestaHome Team.
 *
 * @author    PrestaHome Team <support@prestahome.com>
 * @copyright Copyright (c) 2011-2021 PrestaHome Team - www.PrestaHome.com
 * @license   You only can use module, nothing more!
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_2_0_7($object)
{
    return Configuration::updateGlobalValue('PH_RECENTPOSTS_GRID_COLUMNS', Configuration::get('PH_BLOG_GRID_COLUMNS'));
}
