<?php

class Timetable extends CI_Model {
	
	protected $xml = null;
	protected $days = array();
	protected $periods = array();
	protected $courses = array();
	
	public function __construct() {
		parent::__construct();
		$this->xml = simplexml_load_file(DATAPATH . 'schedule.xml');
		
		foreach($this->xml->days->day as $day) {
			$this->days[] = new Booking($day);
		}
		
		foreach($this->xml->periods->timeslot as $time) {
			$this->periods[] = new Booking($time);
		}
		
		foreach($this->xml->courses->course as $course) {
			$this->courses[] = new Booking($course);
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
		$this->courseNumber = $b['courseNumber'];
		$this->weekday = $b['weekday'];
		$this->time = $b['time'];
		$this->instructor = $b['instructor'];
		$this->room = $b['room'];
    }
	
}