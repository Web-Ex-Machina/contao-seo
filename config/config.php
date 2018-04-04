<?php

/**
 * Module SEO for Contao Open Source CMS
 *
 * Copyright (c) 2018 Web ex Machina
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD'], 1, array
(
	"wem_seo" => array
	(
		"seo_urls" => array
		(
			'tables' => array("tl_page")
		),
	)
));

/**
 * Back end style
 */
if ('BE' === TL_MODE) {
    $GLOBALS['TL_CSS'][] = 'system/modules/wem-contao-seo/assets/backend.css';
}

/**
 * Register Hooks
 */
if('FE' === TL_MODE) {
	$GLOBALS['TL_HOOKS']['generatePage'][] = array('WEM\SEO\Hooks', 'applySEORules');
	$GLOBALS['TL_HOOKS']['parseArticles'][] = array('WEM\SEO\Hooks', 'applySEONewsRules');
}

// Adjust Backenduser Navigation
$GLOBALS['TL_HOOKS']['getUserNavigation'][] = ['WEM\SEO\Hooks', 'reorderUserNavigation'];