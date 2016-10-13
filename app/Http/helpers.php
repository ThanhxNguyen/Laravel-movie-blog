<?php
	//reference: https://laracasts.com/discuss/channels/general-discussion/navbar-and-active-elements
	/**
	 * Set active page
	 *
	 * @param string $uri
	 * @return string
	 */
	function set_active($uri)
	{
		return Request::is($uri) ? 'active' : '';
	}