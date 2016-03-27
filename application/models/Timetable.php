<?php

class Timetable extends CI_Model {

    protected $xml = null;
    protected $days = array();
    protected $periods = array();
    protected $courses = array();

    public function __construct() {
	parent::__construct();
	$this->xml = simplexml_load_file(DATAPATH . 'schedule.xml');

	foreach ($this->xml->days->day as $day) {
	    foreach ($day->booking as $b) {
		$this->days[] = new Booking($b);
	    }
	}

	foreach ($this->xml->periods->timeslot as $time) {
	    foreach ($time->booking as $b) {
		$this->periods[] = new Booking($b);
	    }
	}

	foreach ($this->xml->courses->course as $course) {
	    foreach ($course->booking as $b) {
		$this->courses[] = new Booking($b);
	    }
	}
    }

    public function getDays() {
	return $this->days;
    }

    public function getPeriods() {
	return $this->periods;
    }

    public function getCourses() {
	return $this->courses;
    }

    function getDaysDropdown() {
	return array
	    ("mon" => "Monday",
	    "tu" => "Tuesday",
	    "wed" => "Wednesday",
	    "thu" => "Thursday",
	    "fri" => "Friday");
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

class Booking extends CI_Model {

    public $type;
    public $courseNumber;
    public $weekday;
    public $time;
    public $instructor;
    public $room;

    public function __construct($b) {
	$this->type = $b['type'];
	$this->courseNumber = $b->courseNumber;
	$this->weekday = $b->weekday;
	$this->time = $b->time;
	$this->instructor = $b->instructor;
	$this->room = $b->room;
    }

}
