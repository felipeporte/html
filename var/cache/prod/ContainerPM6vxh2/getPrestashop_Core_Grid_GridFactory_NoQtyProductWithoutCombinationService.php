<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.grid_factory.no_qty_product_without_combination' shared service.

return $this->services['prestashop.core.grid.grid_factory.no_qty_product_without_combination'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.monitoring.no_qty_product_without_combination'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_Monitoring_NoQtyProductWithoutCombinationService.php')), ($this->services['prestashop.core.grid.data.factory.no_qty_product_without_combination'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_NoQtyProductWithoutCombinationService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));