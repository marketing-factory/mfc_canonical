<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011-12 Sebastian Fischer <sf@marketing-factory.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Contoller for imports
 *
 * @author Sebastian Fischer <sf@marketing-factory.de>
 */
class Tx_MfcCanonical_User_Canonical {
	/**
	 * @var array
	 */
	protected $conf = array();

	/**
	 * Render method that gets called by typoscript for adding the meta tag to <head>
	 *
	 * @param string $content
	 * @param array $conf
	 */
	public function render($content, $conf) {
		$this->conf = $conf;

		$host = $this->getHost($content, $this->conf);
		if (!empty($host)) {
			/** @var $pageRenderer t3lib_pageRenderer */
			/** @noinspection PhpUndefinedMethodInspection */
			$pageRenderer = $GLOBALS['TSFE']->getPageRenderer();
			$pageRenderer->addMetaTag('<link rel="canonical" href="' . $this->getUrl($content, $conf) . '"/>');
		}
	}

	/**
	 * @param string $content
	 * @param array $conf
	 * @return string
	 */
	public function getUrl($content, $conf) {
		$this->conf = $this->conf ? $this->conf : $conf;

		$host = $this->getHost($content, $this->conf);
		$path = $this->getPath();

			// prevent double slashes if http://www.example.com/ /index.html are given
		if (substr($host, -1) == '/' && substr($path, 0, 1) == '/') {
			$host = substr($host, 0, -1);
			// add slash if http://www.example.com index.html are given
		} elseif (!empty($host) && substr($host, -1) != '/' && substr($path, 0, 1) != '/') {
			$host .= '/';
		}

		if (strpos($path, 'http://') !== FALSE || strpos($path, 'https://') !== FALSE) {
			$host = '';
		}

		return $host . $path;
	}

	/**
	 * Get the host part of the canonical tag either by base url or by http host
	 * @param string $content
	 * @param array $conf
	 * @return string
	 */
	public function getHost($content, $conf) {
		$this->conf = $this->conf ? $this->conf : $conf;

		if (isset($this->conf['host']) && !empty($this->conf['host'])) {
			$host = $this->conf['host'];
		} else {
			$host = $GLOBALS['TSFE']->baseUrl ? $GLOBALS['TSFE']->baseUrl : 'http://' . $_SERVER['HTTP_HOST'];
		}

		$content .= rtrim($host, '/') . '/';
		return $content;
	}

	/**
	 * Get path part of the canonical tag build with typoscript respecting realurl or simulate static
	 *
	 * @return string
	 */
	protected function getPath() {
		$result = $GLOBALS['TSFE']->page['tx_mfccanonical_canonical'];

		if (empty($result)) {
			/** @var $cObj tslib_cObj */
			$cObj = t3lib_div::makeInstance('tslib_cObj');
			$cObj->start($GLOBALS['TSFE']->page, 'pages');
			$result = $cObj->cObjGetSingle('TEXT', $this->conf['path.']);
		}

		return $result;
	}
}

?>