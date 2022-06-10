<?php

class ProfilerEnabler
{
	// enable or disable profiling based on config values
	function enableProfiler(){		
		$CI = &get_instance();
		$CI->output->enable_profiler( config_item('enable_profiling') );		
	}
}
?>
