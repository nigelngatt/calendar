<?php

class DayBookViewLoader{
	
	public $CalView;
	public $MenuView;

	public function __construct(){
		
		$this->CalView = new DOMDocument;
		$this->MenuView = new DOMDocument;

		$this->CalView->loadHTMLFile('day/DayCalendarScheduleViewHtml.html');

		$this->MenuView->loadHTMLFile('day/MenuViewHtml.html');

		$MenuViewElements = $this->MenuView->getElementsByTagName('div')->item(0);

		$MenuViewImport = $this->CalView->importNode($MenuViewElements, true);

		$this->CalView->insertBefore($MenuViewImport);

		echo $this->CalView->saveHTMLFile('day/DayCalendarScheduleViewHtml.html');
	}
} (new DayBookViewLoader);