<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Frontend Helper user DCA
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default'] = str_replace('formp;', 'formp;{rocksolid_frontend_helper_legend},rocksolidFrontendHelperOperations;', $GLOBALS['TL_DCA']['tl_user_group']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_user_group']['fields']['rocksolidFrontendHelperOperations'] = array(
	'label' => &$GLOBALS['TL_LANG']['tl_user']['rocksolidFrontendHelperOperations'],
	'exclude' => true,
	'inputType' => 'checkbox',
	'options' => array('feModules', 'beModules', 'pages', 'articles', 'contents', 'infos'),
	'reference' => &$GLOBALS['TL_LANG']['tl_user']['rocksolidFrontendHelperOperationsValues'],
	'eval' => array('multiple' => true),
	'sql' => "blob NULL",
);
