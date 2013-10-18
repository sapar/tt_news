<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2002-2004 Kasper Sk�rh�j (kasper@typo3.com)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is 
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
 * Class that adds the wizard icon.
 *
 * $Id: class.tx_ttnews_wizicon.php,v 1.2 2004/07/05 17:35:01 rupertgermann Exp $
 *
 * @author	Kasper Sk�rh�j (kasper@typo3.com)
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   56: class tx_ttnews_wizicon 
 *   64:     function proc($wizardItems)	
 *   84:     function includeLocalLang()	
 *
 * TOTAL FUNCTIONS: 2
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */





/**
 * Class that adds the wizard icon.
 * 
 * @author	Stig N�rgaard Jepsen (stig@8620.dk)
 */
class tx_ttnews_wizicon {

	/**
	 * Adds the newloginbox wizard icon
	 * 
	 * @param	array		Input array with wizard items for plugins
	 * @return	array		Modified input array, having the item for newloginbox added.
	 */
	function proc($wizardItems)	{
		global $LANG;

		$LL = $this->includeLocalLang();

		$wizardItems['plugins_tx_ttnews_pi'] = array(
			'icon'=>t3lib_extMgm::extRelPath('tt_news').'pi/ce_wiz.gif',
			'title'=>$LANG->getLLL('pi_title',$LL),
			'description'=>$LANG->getLLL('pi_plus_wiz_description',$LL),
			'params'=>'&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=9'
		);

		return $wizardItems;
	}

	/**
	 * Includes the locallang file for the 'tt_news' extension
	 * 
	 * @return	array		The LOCAL_LANG array
	 */
	function includeLocalLang()	{
		include(t3lib_extMgm::extPath('tt_news').'locallang.php');
		return $LOCAL_LANG;
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tt_news/pi/class.tx_ttnews_wizicon.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tt_news/pi/class.tx_ttnews_wizicon.php']);
}

?>