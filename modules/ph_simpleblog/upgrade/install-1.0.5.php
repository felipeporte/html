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

function upgrade_module_1_0_5($object)
{
    $object->registerHook('displayLeftColumn');
    $object->registerHook('displayRightColumn');

    $tab = new Tab();
    $tab->name[Context::getContext()->language->id] = $object->l('Settings');
    $tab->class_name = 'AdminSimpleBlogSettings';
    $tab->id_parent = Tab::getIdFromClassName('AdminSimpleBlog');
    $tab->module = $object->name;
    $tab->add();

    Configuration::updateValue('PH_BLOG_POSTS_PER_PAGE', '10');
    Configuration::updateValue('PH_BLOG_FB_COMMENTS', '1');

    return true;
}
