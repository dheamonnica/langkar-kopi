<?php

/**
 * CC html Class
 *
 * @package			Cicool  
 * @category		Components
 */

class Cc_Html
{

	/**
	 * File js top
	 *
	 * @var			array
	 * @access		public
	 */
	public $scriptFileTop = array();

	/**
	 * File js bottom
	 *
	 * @var			array
	 * @access		public
	 */
	public $scriptFileBottom = array();


	/**
	 * Html file bottom
	 *
	 * @var			array
	 * @access		public
	 */
	public $htmlFileBottom = array();

	/**
	 * File css top
	 *
	 * @var			array
	 * @access		public
	 */
	public $styleFileTop = array();

	/**
	 * File css bottom
	 *
	 * @var			array
	 * @access		public
	 */
	public $styleFileBottom = array();


	/**
	 * Css file top
	 *
	 * @access		public
	 * @param		string boolean
	 * @return		string
	 */
	public function registerCssFile($href = '', $rel = 'stylesheet', $type = 'text/css')
	{
		$this->styleFileTop[] = '<link rel="' . $rel . '" type="' . $type . '" href="' . $href . '">';
	}

	/**
	 * Script file top
	 *
	 * @access		public
	 * @param		string
	 * @return		string
	 */
	public function registerScriptFile($contains = '', $type = 'file')
	{
		if ($type == 'file') {
			$this->scriptFileTop[] = '<script type="text/javascript" src="' . $contains . '"></script>';
		} else {
			$this->scriptFileTop[] = '<script type="text/javascript">' . $contains . '</script>';
		}
	}

	/**
	 * Script file bottom
	 *
	 * @access		public
	 * @param		string
	 * @return		string
	 */
	public function registerScriptFileBottom($contains = '', $type = 'file')
	{
		if ($type == 'file') {
			$this->scriptFileBottom[] = '<script type="text/javascript" src="' . $contains . '"></script>';
		} else {
			$this->scriptFileBottom[] = '<script type="text/javascript">' . $contains . '</script>';
		}
	}

	/**
	 * Get Script file top
	 *
	 * @access		public
	 * @return		string
	 */
	public function getScriptFileBottom()
	{
		foreach ($this->scriptFileBottom as $script) {
			echo $script . PHP_EOL;
		}
	}

	/**
	 * Script file bottom
	 *
	 * @access		public
	 * @param		string
	 * @return		string
	 */
	public function registerHtmlFileBottom($contains = '')
	{
		$this->htmlFileBottom[] = $contains;
	}

	/**
	 * Get Script file top
	 *
	 * @access		public
	 * @return		string
	 */
	public function getHtmlFileBottom()
	{
		foreach ($this->htmlFileBottom as $html) {
			echo $html . PHP_EOL;
		}
	}


	/**
	 * Get Script file bottom
	 *
	 * @access		public
	 * @return		string
	 */
	public function getScriptFileTop()
	{
		foreach ($this->scriptFileTop as $script) {
			echo $script . PHP_EOL;
		}
	}

	/**
	 * Get Css file top
	 *
	 * @access		public
	 * @return		string
	 */
	public function getCssFileBottom()
	{
		foreach ($this->styleFileBottom as $css) {
			echo $css . PHP_EOL;
		}
	}


	/**
	 * Get Css file bottom
	 *
	 * @access		public
	 * @return		string
	 */
	public function getCssFileTop()
	{
		foreach ($this->styleFileTop as $css) {
			echo $css . PHP_EOL;
		}
	}
}
