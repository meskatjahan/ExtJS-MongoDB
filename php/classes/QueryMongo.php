<?php

 class QueryDatabase {

   // private $_db;
  //  protected $_result;
   // public $results;

	// $m = new MongoClient();
	
 //  echo "	Connection to database successfully   ";
   // select a database
  // $db = $m->Personnel;
   //Collection selected 
   // $collection = $db->personal;
	
    public function __construct() {
		$m = new MongoClient(); 
		  $_db = $m->Personnel;
       // $this->_db = new MongoClient();

     //   $_db = $this->_db;

        if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
        }
       else {
		 
		      $collection = $db->personal;
			 console.log($db);
		  
		}}
        return $_db;
    }
	
/*	
    public function __construct() {
        $this->_db = new mysqli('host', 'username' ,'password', 'database');

        $_db = $this->_db;

        if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
        }

        return $_db;
    }
*/
    public function getResults($params) {
        $_db = $this->_db;

     
	// $_result = $_db->query("SELECT name,email,phone FROM heroes") or
	// die('Connection Error: ' . $_db->connect_error);

	 
	 
        $_result = $_db->query("db.personal.find()") or
                   die('Connection Error: ' . $_db->connect_error);
				   
        $results = array();

        while ($row = $_result->fetch_assoc()) {
            array_push($results, $row);
        }

        $this->_db->close();

        return $results;
    }

 }
 