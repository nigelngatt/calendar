<?php

class MenuBaseClass extends BaseClass{
	public $Menu;
	public $Div;
	public $jQuery;
	public $JavaScript;
	public $Months;

	public function __construct(){
		$this->Months = 
		array(
			'Januari', 
			'Februari', 
			'Mars', 
			'April', 
			'Maj', 
			'Juni', 
			'Juli', 
			'Augusti', 
			'September', 
			'Oktober', 
			'November', 
			'December'
		);

		$this->Menu = (new DOMDOcument)->createElement('menu');
		
		foreach($this->Months as $Months){
			return function(){
				$this->Div = (new DOMDOcument)->createElement('div');
				$this->Div->setAttribute('class', 'Cal' . substr($Months, 0, 3));
				$this->jQuery = (new DOMDOcument)->createElement('script');
				$this->jQuery->setAttribute('src', 'https://code.jquery.com/jquery-3.5.0.js');
				$this->JavaScript = (new DOMDOcument)->createElement('script');
				$this->JavaScript->setAttribute('type', 'text/javascript');
				$this->JavaScript->setAttribute('src', 'calendar_menu.js');
			};
		}
	}
} (new MenuBaseClass);