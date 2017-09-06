<?php

if (!defined('TL_ROOT'))
    die('You can not access this file directly!');

class MIInserttags extends Frontend {

    /**
     *  * Template
     * @var string
     */
    protected $strTemplate = '';

    /**
     * Generate module
     */
    protected function compile() {
        
    }

    public function replaceMITags($strTag) {
        if ($strTag == 'mi_redsquare') {
        	return '<div class="redsquare"><div class="inner"></div></div>';
        }
	    if ($strTag == 'mi_whitesquare') {
		    return '<div class="whitesquare"><div class="inner"></div></div>';
	    }
    }



}