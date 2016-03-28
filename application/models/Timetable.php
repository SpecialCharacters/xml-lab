<?php

//Timetable model
class Timetable extends CI_Model {

    protected $xml = null;
    protected $days = array();
    protected $periods = array();
    protected $courses = array();

    //Timetable constructor to populate each facet with bookings
    public function __construct() {
	parent::__construct();
	$this->xml = simplexml_load_file(DATAPATH . 'schedule.xml');

	//Populate the days facet
	foreach ($this->xml->days->day as $day) {
	    foreach ($day->booking as $b) {
		$this->days[] = new Booking($b);
	    }
	}

	//Populate the periods facet
	foreach ($this->xml->periods->timeslot as $time) {
	    foreach ($time->booking as $b) {
		$this->periods[] = new Booking($b);
	    }
	}

	//Populate the courses facet
	foreach ($this->xml->courses->course as $course) {
	    foreach ($course->booking as $b) {
		$this->courses[] = new Booking($b);
	    }
	}
    }

    //Accessor method for days facet
    public function getDays() {
	return $this->days;
    }

    //Accessor method for periods facet
    public function getPeriods() {
	return $this->periods;
    }

    //Accessor method for courses facet
    public function getCourses() {
	return $this->courses;
    }

    //Method to search the days facet
    public function searchDays($day, $time) {
	$result = array();
	foreach ($this->days as $b) {
	    if ($b->weekday == $day && $b->time == $time) {
		$result[] = $b;
	    }
	}
	return $result;
    }

    //Method to search the periods facet
    public function searchPeriods($day, $time) {
	$result = array();
	foreach ($this->periods as $b) {
	    if ($b->weekday == $day && $b->time == $time) {
		$result[] = $b;
	    }
	}
	return $result;
    }

    //Method to search the courses facet
    public function searchCourses($day, $time) {
	$result = array();
	foreach ($this->courses as $b) {
	    if ($b->weekday == $day && $b->time == $time) {
		$result[] = $b;
	    }
	}
	return $result;
    }

    function getDaysDropdown() {
	return array
	    ("Monday" => "Monday",
	    "Tuesday" => "Tuesday",
	    "Wednesday" => "Wednesday",
	    "Thursday" => "Thursday",
	    "Friday" => "Friday");
    }

    function getTimeDropdown() {
	return array
	    ("0830" => "8:30 AM",
	    "0930" => "9:30 AM",
	    "10:30" => "10:30 AM",
	    "11:30" => "11:30 AM",
	    "12:30" => "12:30 PM",
	    "1330" => "1:30 PM",
	    "1430" => "2:30 PM",
	    "1530" => "3:30 PM",
	    "1630" => "4:30 PM");
    }

}

//Booking class
class Booking extends CI_Model {

    public $type;
    public $courseNumber;
    public $weekday;
    public $time;
    public $instructor;
    public $room;

    //Booking constructor to fill out fields
    public function __construct($b) {
	$this->type = (string) $b['type'];
	$this->courseNumber = (string) $b->courseNumber;
	$this->weekday = (string) $b->weekday;
	$this->time = (string) $b->time;
	$this->instructor = (string) $b->instructor;
	$this->room = (string) $b->room;
    }

}
