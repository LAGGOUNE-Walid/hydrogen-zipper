<?php 

namespace Zipper\interfaces;

interface ZipInterface {

	/**
	 * function make
	 * @param zipFileName [type of : string] : the zip file name.
	 * 
	 * the function used to initial and create .zip file 
	 * @return object
	 */
	public function make($zipFileName);

	/**
	 * function add
	 * @param zipFileName [type of : string] : the zip file name
	 * 
	 * the function used to add file to .zip file. 
	 *  @return boolean
	 */
	public function add($zipFileName);

	/**
	 * function extract
	 * @param zipFileName [type of : string] : the zip file name.
	 * 
	 * the function used to extract files from .zip file
	 * @return object
	 */
	public function extract($zipFileName);

	/**
	 * function only
	 * @param file [type of : array] : the files to extract it from .zip file
	 * 
	 * the function used to extract only this files
	 * 	@return object
	 */
	public function only($files);

	/**
	 * function to 
	 * @param path [type of : string] : the extract path
	 * 
	 * the fucntion used to set a path for the extract operation
	 * @return boolean
	 */
	public function to($path);

}