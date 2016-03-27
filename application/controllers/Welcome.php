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
	    $day = $this->input->post('day');
	    $period = $this->input->post('time');
	    $checkSame = false;
	    
	    $resultsDay = $this->timetable->getBookingsDays($day,$time);
	    $resultsPeriods = $this->timetable->getBookingsPeriod($day,$time);
	    $resultsCourse = $this->timetable->getBookingsCourse($day,$time);
	    
	    if(count($resultDay) != 1){
		$this->data['bingo'] = "By the Days facet, search returned ".count($resultDay)." booking";
	    }else {
		$checkSame = true;
	    }
	    
	    if(count($resultPeriods) != 1){
		$this->data['bingo'] = "By the Periods facet, search returned ".count($resultPeriods)." booking";
	    }else{
		$checkSame = true;
	    }
	    
	    if(count($resultCourse) != 1){
		$this->data['bingo'] = "By the Course facet, search returned ".count($resultCourse)." booking";
	    }else{
		$checkSame = true;
	    }
	    
	    
	    
	}
}
