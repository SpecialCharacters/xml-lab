<?php

class Timetable extends CI_Model {
	
	protected $xml = null;
	protected $days = array();
	protected $periods = array();
	protected $courses = array();
	
}

class Booking extends CI_Model {
	public $type;
	public $courseNumber;
	public $weekday;
	public $time;
	public $instructor;
	public $room;
}