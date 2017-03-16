<?php 

namespace Zipper\Classes;

use Zipper\Interfaces\FileInterface as FileInterface;

class File implements FileInterface {


	/**
	 * Description: Interfaces/FileInterface.php Line : 14
	 */
	public function create($zipFileName) {

		if (file_exists($zipFileName)) {
			return true;
		}
		$zip = fopen($zipFileName, "w+");
		if(is_resource($zip)) {
			return true;
		}
		return false;

	}

}