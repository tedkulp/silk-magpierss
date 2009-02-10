<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
// The MIT License
// 
// Copyright (c) 2009 Ted Kulp
// 
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
// 
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
// 
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.

class SilkMagpierss extends SilkObject
{
	function __construct()
	{
		parent::__construct();
		if (!defined('MAGPIE_CACHE_DIR'))
			define('MAGPIE_CACHE_DIR', join_path(ROOT_DIR, 'tmp', 'cache'));
		require_once(join_path(dirname(dirname(__FILE__)), 'lib', 'rss_fetch.inc'));
	}
	
	function parse_url($url, $smarty_var = '')
	{
		$rss = fetch_rss($url);
		
		if (!$rss)
			return false;
		
		if ($smarty_var != '')
		{
			smarty()->assign($smarty_var, $rss);
			return true;
		}
		
		return $rss;
	}
}

?>