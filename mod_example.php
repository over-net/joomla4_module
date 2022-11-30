<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_example
 *
 * @copyright   M.Kulyk
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined('_JEXEC') or die;


use Joomla\Module\Example\Site\Helper\ExampleHelper;

/**
 * @var object $params
 * @var object $module
 */

try
{
	$model = new ExampleHelper();
}
catch (Exception $e)
{
}


require JModuleHelper::getLayoutPath('mod_example', $params->get('layout', 'default'));