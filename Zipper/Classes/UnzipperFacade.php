<?php

namespace Zipper\Classes;

use Zipper\Interfaces\ZipperFacadeInterface as ZipperFacadeInterface;
use \ZipArchive as ZipArchive;
use Zipper\Classes\File;

class UnzipperFacade {

	public static function extract($zipFileName, $path, $files) {
		$zip = new ZipArchive;
		$zip->open($zipFileName);
		if (sizeof($files) === 0) {
			return $zip->extractTo($path);
		}
		return $zip->extractTo($path, $files);
	}

}