<?php 

namespace Zipper\Interfaces;

interface FileInterface {
	
	/**
	 * function create
	 * @param @zipFileName [type of : string] : the name of th zip file
	 * 
	 * the function used to create .zip files
	 * @return boolean
	 */
	public function create($zipFileName);
	
}