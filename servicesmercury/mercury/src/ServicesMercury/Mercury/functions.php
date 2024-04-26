<?php

if (! function_exists('mercuryHello')) {


	function mercuryHello()
		{
			$mercury = app('mercury');
				return $mercury->hello();
		}
}

