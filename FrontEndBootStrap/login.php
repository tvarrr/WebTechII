<?php
   // connect to mongodb
   $m = new MongoClient("mongodb://localhost:27017");
   $ctr=0;
	
   echo "Connection to database successfully\n";
   // select a database
   $db = $m->wt2quiz;
	
   echo "Database wt2quiz selected" . "\n";
   
   $collection = $db->users;
   echo "Collection selected succsessfully" . "\n";
   
 
   $u= $_GET["uname"];
   $p= $_GET["pwd"];
   
   $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
      if($document["username"]==$u)
	  {
		$ctr=1;
		if($document["password"]==$p)
		{
			echo "logged in";
		}
		else
		{
			echo "incorrect password";
		}
	  }
	  
   }
   if($ctr==0){
	   echo "wrong user";
   }

   /*$cursor = $collection->findOne(array('user_name' => 'Tvarita'));
   print_r($cursor['password']);*/
 


   // iterate cursor to display title of documents
	
   /*foreach ($cursor as $document) {
      echo $document["email"] . "\n";
   }*/
   
?>