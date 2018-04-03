<?php

/**
 * Module SEO for Contao Open Source CMS
 *
 * Copyright (c) 2018 Web ex Machina
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */

/**
 * List of fields added :
 * Classical meta : canonical,metaImage
 * OpenGraph (http://ogp.me/) : og:title, og:type, og:image, og:url, og:description
 * Twitter (https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/summary) : twitter:card, twitter:site, twitter:title, twitter:description, twitter:image, twitter:image:alt
 */


/**
 * Add Fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['metaCanonical'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaCanonical'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w100 clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaImage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaImage'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>Config::get('validImageTypes'), 'tl_class'=>'clr'),
	'sql'                     => "binary(16) NULL"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['overrideOGTags'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['overrideOGTags'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['overrideTwitterTags'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['overrideTwitterTags'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaOGTitle'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaOGTitle'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaOGType'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaOGType'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaOGImage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaOGImage'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>Config::get('validImageTypes'), 'tl_class'=>'clr'),
	'sql'                     => "binary(16) NULL"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaOGUrl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaOGUrl'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w100'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaOGDescription'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaOGDescription'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:60px', 'decodeEntities'=>true, 'tl_class'=>'clr'),
	'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaTwitterCard'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaTwitterCard'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaTwitterSite'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaTwitterSite'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaTwitterTitle'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaTwitterTitle'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaTwitterDescription'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaTwitterDescription'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('style'=>'height:60px', 'decodeEntities'=>true, 'tl_class'=>'clr'),
	'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaTwitterImage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaTwitterImage'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('filesOnly'=>true, 'fieldType'=>'radio', 'extensions'=>Config::get('validImageTypes'), 'tl_class'=>'clr'),
	'sql'                     => "binary(16) NULL"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['metaTwitterImageAlt'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['metaTwitterImageAlt'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

/**
 * Remove all the SEO SERP references in the default tl_page
 */
if(Input::get('do') == 'page' && !Input::get('serp_tests_tmp'))
{
	$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace('{meta_legend},pageTitle;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);
	$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace('{meta_legend},pageTitle,robots,description,seo_serp_preview;', '', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);

	foreach($GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'] as $intKey => $arrCallback)
	{
		if($arrCallback[0] == 'Derhaeuptling\SeoSerpPreview\TestsHandler\PageHandler' && $arrCallback[1] == 'initialize')
		{
			unset($GLOBALS['TL_DCA']['tl_page']['config']['onload_callback'][$intKey]);
			break;
		}
	}
}

/**
 * SEO Mode
 */
if(Input::get('serp_tests_tmp') || Input::get('do') == 'seo_urls')
{
	/**
	 * Update all palettes and operations
	 */
	foreach($GLOBALS['TL_DCA']['tl_page']['palettes'] as $strPaletteType => $strPaletteFields)
	{
		switch($strPaletteType)
		{
			case '__selector__':
			case 'logout':
			case 'default':
			break;

			case 'forward':
			case 'redirect':
			case 'root':
				$GLOBALS['TL_DCA']['tl_page']['palettes'][$strPaletteType] = '{title_legend},title,alias,type;{meta_legend},pageTitle;';
			break;

			default:
				$GLOBALS['TL_DCA']['tl_page']['palettes'][$strPaletteType] = '{title_legend},title,alias,type;{meta_legend},pageTitle,robots,description,seo_serp_preview;';
		}
	}

	/**
	 * Disable Multiple Edition
	 */
	unset($GLOBALS['TL_DCA']['tl_page']['list']['global_operations']['all']);

	/**
	 * Update Operations (just keep the Edit button)
	 */
	foreach($GLOBALS['TL_DCA']['tl_page']['list']['operations'] as $strAction => $arrActions)
	{
		if($strAction == "edit")
			$GLOBALS['TL_DCA']['tl_page']['list']['operations'][$strAction]['button_callback'] = array('tl_wem_page_seo', 'editPage');
		else
			unset($GLOBALS['TL_DCA']['tl_page']['list']['operations'][$strAction]);
	}
	
	/**
	 * Update Regular & Root palette
	 */
	$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace
	(
		'seo_serp_preview;',
		'seo_serp_preview,metaCanonical,metaImage;{opengraph_legend:hide},overrideOGTags;{twitter_legend:hide},overrideTwitterTags;',
		$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
	);
	$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace
	(
		'pageTitle',
		'pageTitle,metaCanonical,metaImage;{opengraph_legend:hide},overrideOGTags;{twitter_legend:hide},overrideTwitterTags',
		$GLOBALS['TL_DCA']['tl_page']['palettes']['root']
	);

	/**
	 * Update Selector palettes
	 */
	$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'overrideOGTags';
	$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'overrideTwitterTags';

	/**
	 * Update Subpalettes
	 */
	$GLOBALS['TL_DCA']['tl_page']['subpalettes']['overrideOGTags'] = 'metaOGTitle,metaOGType,metaOGImage,metaOGUrl,metaOGDescription';
	$GLOBALS['TL_DCA']['tl_page']['subpalettes']['overrideTwitterTags'] = 'metaTwitterCard,metaTwitterSite,metaTwitterTitle,metaTwitterDescription,metaTwitterImage,metaTwitterImageAlt';

	/**
	 * Update Fields
	 */
	$GLOBALS['TL_DCA']['tl_page']['fields']['type']['filter'] = false;
	$GLOBALS['TL_DCA']['tl_page']['fields']['protected']['filter'] = false;
	$GLOBALS['TL_DCA']['tl_page']['fields']['groups']['filter'] = false;
	$GLOBALS['TL_DCA']['tl_page']['fields']['guests']['filter'] = false;
	$GLOBALS['TL_DCA']['tl_page']['fields']['noSearch']['filter'] = false;
	$GLOBALS['TL_DCA']['tl_page']['fields']['published']['filter'] = false;
}

/**
 * Extends miscellaneous methods that are used by the data configuration array.
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */
class tl_wem_page_seo extends tl_page
{
	/**
	 * Return the edit page button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function editPage($row, $href, $label, $title, $icon, $attributes)
	{
		if($row['type'] == 'regular' || $row['type'] == 'root')
			return parent::editPage($row, $href, $label, $title, $icon, $attributes);
		else
			return Image::getHtml(preg_replace('/\.svg$/i', '_.svg', $icon));
	}
}