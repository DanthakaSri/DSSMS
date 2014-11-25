<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter W3Capsule URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		W3Capsule Dev Team
 * @link		https://github.com/Olionsoft/w3capsule-codeigniter
 */

// ------------------------------------------------------------------------

/**
 * Site URL
 *
 * Returns zone url .
 *
 * @access	public
 * @param	string
 * @return	string
 */
function zone_url()
{
	$CI =& get_instance();
	$path = $CI->config->item('zone_url');

	if($path != NULL && $path != '')
	{
		return $path;
	}
	else
	{
		return $CI->config->item('base_url');
	}
}