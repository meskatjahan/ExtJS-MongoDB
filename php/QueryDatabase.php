<?php

public function __construct() {
		$m = new MongoClient(); 
		  $_db = $m->Personnel;
		 //  console.log(" no error in collections");
       // $this->_db = new MongoClient();

     //   $_db = $this->_db;

     /*   if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
			exit;
        }
       else {
	*/	 
		      $collection = $db->personal;
			// console.log($db);
			// console.log("error in collections");
		  
		}
		return $_db;
    }
	
    public function Results($params) {
		$m = new MongoClient(); 
		  $_db = $m->Personnel;
		   
        $_db = $this->_db;

       $collection = $db->personal;
	
		
     $_result = $_db->query("db.personal.find()")		
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();

        return $results;
    }

?>
 