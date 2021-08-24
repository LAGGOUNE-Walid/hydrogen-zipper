<?php

namespace Zipper\Classes;

use Zipper\Interfaces\ZipperFacadeInterface as ZipperFacadeInterface;
use \ZipArchive as ZipArchive;
use Zipper\Classes\File;

class ZipperFacade implements ZipperFacadeInterface {

	public static function makeZipFile($zipFileName) {
		$file = new File;
		return $file->create($zipFileName);
	}

	public static function add($zipFileName, $file) {
		$zip = new \ZipArchive();
		if (is_array($file)) {
			$files = $file;
			return self::addFiles($zipFileName, $file);
		}
		if (is_file($file)) {
			return self::addFile($zipFileName, $file);
		}
		if (is_dir($file)) {
			$dir = $file;
			return self::addDir($zipFileName, $dir);
		}
	}

	public static function addFile($zipFileName, $file) {
		$zip = new ZipArchive();
		if($zip->open($zipFileName, ZipArchive::OVERWRITE)) {
			$zip->addFile($file);
		}
		$zip->close();
		return true;
	}

	public static function addFiles($zipFileName, $files) {
		$zip = new ZipArchive();
		if($zip->open($zipFileName, ZipArchive::OVERWRITE)) {
			foreach ($files as $file) {
				if (file_exists($file)) {
					$zip->addFile($file);
				}
			}
		}
		$zip->close();
		return true;
	}

	public static function addDir($zipFileName, $dir) {
		$zip = new ZipArchive();
		if($zip->open($zipFileName, ZipArchive::OVERWRITE)) {
			foreach (scandir($dir) as $file) {
				if (is_file($dir.$file)) {
					$zip->addFile($dir.$file);
				}
			}
		}
		$zip->close();
		return true;
	}

}
