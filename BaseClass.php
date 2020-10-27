<?php

class BaseClass{

	public $Dom;

	public function __construct(){
		return $this->Dom = new DOMDocument;
	}
} (new BaseClass);