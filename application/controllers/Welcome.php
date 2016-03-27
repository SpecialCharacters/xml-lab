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
	{
	    $this->data['pagebody'] = 'homepage';
	    $this->data['days']       = $this->timetable->getDays();
	    $this->data['periods']    = $this->timetable->getPeriods();
	    $this->data['courses']    = $this->timetable->getCourses();
	    $this->data['dateAvailable'] = form_dropdown('day',$this->timetable->getDaysDropdown());
	    $this->data['timeAvailable'] = form_dropdown('time',$this->timetable->getTimeDropdown());
            $this->render();
	} 
	
	public function search(){
	    
	}
}
