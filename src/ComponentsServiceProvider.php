<?php

namespace Icemt\Components;

use Illuminate\Support\ServiceProvider;

class ComponentsServiceProvider extends ServiceProvider
{
	public function getDirContents($dir, &$results = array()) {
		$files = scandir($dir);

		foreach ($files as $key => $value) {
			$path = realpath($dir . DIRECTORY_SEPARATOR . $value);
			if (!is_dir($path)) {
				$results[] = $path;
			} else if ($value != "." && $value != "..") {
				$this->getDirContents($path, $results);
				// folder, we don't need this
				// $results[] = $path;
			}
		}

		return $results;
	}

	public function boot()
	{
		$MARKER = '/icemt/components/src/';

		$items = $this->getDirContents(__DIR__.'/components');

		$publish = [];

		foreach($items as $item)
		{
			if(strpos($item, '.blade.php') !== false)
			{
				$pos = substr($item, strpos($item, $MARKER)+strlen($MARKER));
				$publish[$item] = resource_path('views/'.$pos);
			}
		}

		$this->publishes($publish, 'icemt-components');
	}

	public function register()
	{
		//
	}
}