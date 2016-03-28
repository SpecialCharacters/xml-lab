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
	    
	    $resultsDays = $this->timetable->searchDays($day,$period);
	    $resultsPeriods = $this->timetable->searchPeriods($day,$period);
	    $resultsCourses = $this->timetable->searchCourses($day,$period);
	    
	    if(count($resultsDays) != 1){
		$this->data['bingo'] = "By the Days facet, search returned ".count($resultsDays)." bookings.";
	    }else if(count($resultsPeriods) != 1){
		$this->data['bingo'] = "By the Periods facet, search returned ".count($resultsPeriods)." bookings.";
	    }else if(count($resultsCourses) != 1){
		$this->data['bingo'] = "By the Course facet, search returned ".count($resultsCourses)." bookings.";
	    }else{
		$checkSame = true;
	    }
	    
	    if ($checkSame) {
		if($resultsDays == $resultsPeriods && $resultsDays == $resultsCourses && $resultsCourses == $resultsPeriods){
		    $this->data['bingo'] = "Bingo!";
		    $this->data['results'] = "Day: " . $resultsCourses[0]->weekday.
					    "<br/>Course: ". $resultsCourses[0]->courseNumber.
					    "<br/>Type: ".$resultsCourses[0]->type.
					    "<br/>Time: " .$resultsCourses[0]->time.
					    "<br/>Instructor: ". $resultsCourses[0]->instructor.
					    "<br/>Room: ". $resultsCourses[0]->room;
			    
		}
		else{
		    $this->data['bingo'] = "Bookings do not match!";
		}
	    }

	$this->render();	    
	    
	}
}
