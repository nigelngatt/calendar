<?php

class BookieGeneratorClass{

	public $Dom;
	public $Form;

	public function __construct(){
		
		$this->Dom = new DOMDocument;

		$this->Form = $this->Dom->createElement('form');
		$this->Form->setAttribute('action', 'DayBookieViewHtml.html');
		$this->Form->setAttribute('method', 'post');

		$link = mysqli_connect("162.222.227.194", "gatsftaf_gatsfta", "I=1Nozb=01Mr", "gatsftaf_pwd"); 
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query .= "SELECT email,passwords FROM passwords";
/* execute multi query */
if (mysqli_multi_query($link, $query)) {
    do{
        /* store first result set */
        if ($result = mysqli_use_result($link)) {
            while ($row = mysqli_fetch_assoc($result)) {
                return $row;
            }
            mysqli_free_result($result);
        }
        /* print divider */
        if (mysqli_more_results($link)) {
            printf("-----------------\n");
        }
    } while(mysqli_next_result($link));
}
/* close connection */
mysqli_close($link);
	}
}(new BookieGeneratorClass);