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
		 //  console.log(" no error in collections");
       // $this->_db = new MongoClient();

     //   $_db = $this->_db;

       /* if ($_db->connect_error) {
            die('Connection Error: ' . $_db->connect_error);
			exit;
        }
       else {  */
		 
		      $collection = $_db->personal;
			// console.log($db);
			// console.log("error in collections");
		  
	//	}
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
    public function Results($params) {
		
		
		$connection = new MongoClient();
		$collection = $connection->Personnel->personal;
		 $results = array();
		$cursor = $collection->find();
		foreach ( $cursor as $id => $value )
		{
		 //  echo "$id: ";
			 array_push($results, $value);
			 
			//var_dump( $value );
		}
		//return json_encode($results);
		return $results;
 //return $results;
			/*	$m = new MongoClient(); 
		  $_db = $m->Personnel;*/
    //    $_db = $this->_db;

     
	// $_result = $_db->query("SELECT name,email,phone FROM heroes") or
	// die('Connection Error: ' . $_db->connect_error);

	 
	/* $collection = $_db -> personal;
	  $_result= $collection->find();
     /*   $_result = $_db->("db.personal.find()"); or
                   die('Connection Error: ' . $_db->connect_error);*/
				   
     /*   $results = array();

        while ($document = $_result->fetch_assoc()) {
            array_push($results, $document);
        }

        $this->_db->close();

        return $results;
    } */
		 /*
			$connection = new MongoClient();
			$collection = $connection->Personnel->personal;
			 $results = array();
			$cursor = $collection->find();
			foreach ( $cursor as $id => $value )
			{
				echo "$id: ";
				 array_push($results, $value);
				var_dump( $value );
			}
			 return $results;  */
 }
 }
 ?>

