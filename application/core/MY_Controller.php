<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		Carson Roscoe, Jaegar Sarauer, Dhivya Manohar
 * @copyright           2016-, Carson Roscoe, Jaegar Sarauer, Dhivya Manohar
 * ------------------------------------------------------------------------
 */

class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content


    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['pagetitle'] = "Lab08";
        $this->data['pageheader'] = "Lab08";
    }

    /**
     * Render this page
     * Used on all. We need to load data into content in the controller
     */
    function render() {	
	$this->data['data'] = &$this->data;
	$this->data['content'] = '';
	$this->parser->parse('_template', $this->data);
    }
    
    /**
     * Parsing query fom database
     * @param type $queryData data received from database
     * @param type $ignoreIndex 
     * @return string parsed data
     */

    
}