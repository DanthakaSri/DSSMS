<?php
class WC_Router extends CI_Router {

	function _set_request ($seg = array())
	{
		parent::_set_request(str_replace('-', '_', $seg));
	}

}