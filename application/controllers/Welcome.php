<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * controllers/Welcome.php
 *
 * Welcome model
 *
 * @author		Dhivya Manohar, Allen Tsang
 * @copyright           2016-, Special Characters
 * ------------------------------------------------------------------------
 */

class Welcome extends Application {
    public function __construct() { parent::__construct(); }
	/**
	 
	 * Index Page for this controller.
	 */
	public function index()
	{   $this->data['pagebody'] = '';
            $this->render();
	} 
	
	public function search(){
	    
	}
}
