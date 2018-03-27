<?php

/**
 * Module SEO for Contao Open Source CMS
 *
 * Copyright (c) 2018 Web ex Machina
 *
 * @author Web ex Machina <https://www.webexmachina.fr>
 */

$GLOBALS['TL_DCA']['tl_short_urls']['fields']['domain']['default'] = 0;
$GLOBALS['TL_DCA']['tl_short_urls']['fields']['domain']['options_callback'] = array('tl_wem_short_urls', 'getDomains');

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_wem_short_urls extends tl_short_urls
{
	/**
     * Retreives all available domains in this installation (plus empty selection)
     *
     * @return array
     */
    public function getDomains()
    {
        // options array
        $options = array(0 => $GLOBALS['TL_LANG']['tl_short_urls']['noDomain'] );

        // get the root pages and their dns settings
        if( version_compare( VERSION, '3.5', '>=' ) )
        {
            if( ( $objPages = \PageModel::findPublishedRootPages() ) !== null )
                while( $objPages->next() )
                    if( $objPages->dns )
                        $options[$objPages->id] = $objPages->dns;           
        }
        else
        {
            $t = \PageModel::getTable();
            $arrColumns = array("$t.type=?");

            if (!BE_USER_LOGGED_IN)
            {
                $time = time();
                $arrColumns[] = "($t.start='' OR $t.start<='$time') AND ($t.stop='' OR $t.stop>'" . ($time + 60) . "') AND $t.published='1'";
            }

            $objPages = \PageModel::findBy($arrColumns, 'root');

            if( $objPages !== null )
                while( $objPages->next() )
                    if( $objPages->dns )
                        $options[$objPages->id] = $objPages->dns;
        }

        // return the options
        return $options;
    }
}