<?php 

class BookieBaseClass{

public $Start;
public $End;
public $Interval;
public $Period;
public $Post;

public function __construct(){
	
	$this->Start = new DateTime('2020-01-01');
	$this->End = new DateTime('2020-12-31');

	$this->StartMinutes = new DateTime('2020-01-00');
	$this->EndMinutes = new DateTime('2020-01-01');

	$this->StartDays = new DateTime('2020-01-01');
	$this->EndDays = new DateTime('2020-01-31');

	$this->Interval = new DateInterval('P1D');
	$this->IntervalMinutes = new DateInterval('PT30M');

	$this->Period = new DatePeriod($this->Start, $this->Interval, $this->End);
	$this->PeriodMinutes = new DatePeriod($this->StartMinutes, $this->IntervalMinutes, $this->EndMinutes);
	$this->PeriodDays = new DatePeriod($this->StartDays, $this->Interval, $this->EndDays);

	$this->Post = 'schema';

	echo $this->Start->format('D, h:m:s, M, Y');
	echo "<br/>";
	echo $this->End->format('D, h:m:s, M, Y');
	echo "<br/>";

	return $this->Period;
	}
} (new BookieBaseClass);
?>