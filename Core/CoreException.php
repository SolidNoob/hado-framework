<?php

namespace Hado\Core;

class CoreException extends \Exception{
	public function getErrorReport(){
		echo "<br/>********************************************<br/>";
		echo "Catched CoreException:<br/>";
		echo "Message: " . $this->getMessage()."<br/>"; 
	    echo "File: " . $this->getFile()."<br/>"; 
	    echo "Line: " . $this->getLine()."<br/>"; 
	    echo "Trace: <br/>" . $this->getTraceAsString()."<br/>"; 
		echo "********************************************<br/>";
	    die();
	}
}