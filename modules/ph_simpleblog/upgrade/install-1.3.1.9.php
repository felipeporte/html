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

function upgrade_module_1_3_1_9($object)
{
    Configuration::updateGlobalValue('PH_BLOG_LOAD_FONT_AWESOME', 1);
    Configuration::updateGlobalValue('PH_BLOG_LOAD_BXSLIDER', 1);
    Configuration::updateGlobalValue('PH_BLOG_LOAD_MASONRY', 1);
    Configuration::updateGlobalValue('PH_BLOG_LOAD_FITVIDS', 1);

    return true;
}
