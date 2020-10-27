<?php

include 'BookieGeneratorClass.php';

class DayBookViewGenerator extends BookieGeneratorClass{

	public function __construct(){		
		echo (new BookieGeneratorClass('M, Y', 'd D', 'w'))->Dom->saveHTMLFile('day/DayCalendarScheduleViewHtml.html');
	}
} (new DayBookViewGenerator);