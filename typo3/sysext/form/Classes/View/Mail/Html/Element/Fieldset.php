<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Patrick Broens (patrick@patrickbroens.nl)
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
 * View object for the fieldset element
 *
 * @author Patrick Broens <patrick@patrickbroens.nl>
 * @package TYPO3
 * @subpackage form
 */
class tx_form_View_Mail_Html_Element_Fieldset extends tx_form_View_Mail_Html_Element_Container {

	/**
	 * Default layout of this object
	 *
	 * @var string
	 */
	protected $layout = '
		<td colspan="2">
			<table cellspacing="0" style="padding-left: 20px; margin-bottom: 20px;">
				<legend />
				<containerWrap />
			</table>
		</td>
	';

	/**
	 * True if element needs no element wrap
	 * like <li>element</li>
	 *
	 * @var boolean
	 */
	//protected $noWrap = TRUE;

	/**
	 * Constructor
	 *
	 * @param tx_form_Domain_Model_Element_Fieldset $model Model for this element
	 * @return void
	 */
	public function __construct(tx_form_Domain_Model_Element_Fieldset $model) {
		parent::__construct($model);
	}
}
?>