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
	    $this->data['bingo'] = "";
	    $this->data['results']="";
            $this->render();
	} 
	
	public function search(){
	    
	    $this->data['pagebody'] = 'homepage';
	    $this->data['days']       = $this->timetable->getDays();
	    $this->data['periods']    = $this->timetable->getPeriods();
	    $this->data['courses']    = $this->timetable->getCourses();
	    $this->data['dateAvailable'] = form_dropdown('day',$this->timetable->getDaysDropdown());
	    $this->data['timeAvailable'] = form_dropdown('time',$this->timetable->getTimeDropdown());
	    $this->data['bingo'] = "";
	    $this->data['results']="";	    
	    
	    
	    $day = $this->input->post('day');
	    $period = $this->input->post('time');
	    $checkSame = false;
	    
	    $resultsDay = $this->timetable->searchDays($day,$period);
	    $resultsPeriods = $this->timetable->searchPeriods($day,$period);
	    $resultsCourse = $this->timetable->searchCourses($day,$period);
	    
	    if(count($resultsDay) != 1){
		$this->data['bingo'] = "By the Days facet, search returned ".count($resultsDay)." booking";
	    }else {
		$checkSame = true;
	    }
	    
	    if(count($resultsPeriods) != 1){
		$this->data['bingo'] = "By the Periods facet, search returned ".count($resultsPeriods)." booking";
	    }else{
		$checkSame = true;
	    }
	    
	    if(count($resultsCourse) != 1){
		$this->data['bingo'] = "By the Course facet, search returned ".count($resultsCourse)." booking";
	    }else{
		$checkSame = true;
	    }
	    
	    if ($checkSame) {    
	    }

	$this->render();	    
	    
	}
}
