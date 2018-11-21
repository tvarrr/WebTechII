<?php
   // connect to mongodb
   $m = new MongoClient("mongodb://localhost:27017");
	
   echo "Connection to database successfully\n";
   // select a database
   $db = $m->wt2quiz;
	
   echo "Database wt2quiz selected" . "\n";
   
   $collection = $db->users;
   echo "Collection selected succsessfully" . "\n";
   
   $n= $_GET["name"];
   $m= $_GET["mail"];
   $d= $_GET["dob"];
   $u= $_GET["uname"];
   $p= $_GET["pwd"];
   
    $document = array( 
      "id" => 3, 
      "Name" => $n, 
      "Email" => $m,
      "dob" => $d,
      "username" => $u,
	  "password" => $p
   );
   
   $collection->insert($document);
   echo "Document inserted successfully";

   /*$cursor = $collection->findOne(array('user_name' => 'Tvarita'));
   print_r($cursor['password']);*/
 


   // iterate cursor to display title of documents
	
   /*foreach ($cursor as $document) {
      echo $document["email"] . "\n";
   }*/
   
?>