<?php 

namespace Zipper\Classes;

use Zipper\Classes\UnzipperFacade as UnzipperFacade;
use Zipper\Interfaces\ZipInterface as ZipInterface;
use Zipper\Classes\ZipperFacade as ZipperFacade;


class Zip implements ZipInterface {

	/**
	 * @var zipFileName [type of : string] : store the zip file name.
	 */
	public $zipFileName = NULL;

	/**
	 * @var files [type of : array] : store the unzip only files.
	 */
	public $files = NULL;

	/**
	 * Description: Interfaces/ZipInterface.php Line: 14. 
	 */
	public function make($zipFileName) {
		ZipperFacade::makeZipFile($zipFileName);
		$this->zipFileName = $zipFileName;
		return $this;
	}

	/**
	 * Description: Interfaces/ZipInterface.php Line: 23. 
	 */
	public function add($file) {
		return ZipperFacade::add($this->zipFileName, $file);
	}

	/**
	 * Description: Interfaces/ZipInterface.php Line: 32. 
	 */
	public function extract($zipFileName) {
		$this->zipFileName = $zipFileName;
		return $this;
	}

	/**
	 * Description: Interfaces/ZipInterface.php Line: 41. 
	 */
	public function only($files) {
		$this->files = $files;
		return $this;
	}

	/**
	 * Description: Interfaces/ZipInterface.php Line: 50. 
	 */
	public function to($path) {
		return UnzipperFacade::extract($this->zipFileName, $path, $this->files);
	}


}