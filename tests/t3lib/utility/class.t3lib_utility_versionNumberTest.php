<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Susanne Moog <typo3@susanne-moog.de>
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
 * Testcase for class t3lib_utility_VersionNumber
 *
 * @author Susanne Moog <typo3@susanne-moog.de>
 *
 * @package TYPO3
 * @subpackage t3lib
 */

class t3lib_utility_VersionNumberTest extends tx_phpunit_testcase {

	//////////////////////////////////
	// Tests concerning int_from_ver
	//////////////////////////////////
	/**
	 * Data Provider for convertVersionNumberToIntegerConvertsVersionNumbersToIntegersDataProvider
	 *
	 * return array
	 */
	public function convertVersionNumberToIntegerConvertsVersionNumbersToIntegersDataProvider() {
		return array(
			array('4003003', '4.3.3'),
			array('4012003', '4.12.3'),
			array('5000000', '5.0.0'),
			array('3008001', '3.8.1'),
			array('1012', '0.1.12')
		);
	}

	/**
	 * @test
	 * @dataProvider convertVersionNumberToIntegerConvertsVersionNumbersToIntegersDataProvider
	 */
	public function convertVersionNumberToIntegerConvertsVersionNumbersToIntegers($expected, $version) {
		$this->assertEquals($expected, t3lib_utility_VersionNumber::convertVersionNumberToInteger($version));
	}

}

?>