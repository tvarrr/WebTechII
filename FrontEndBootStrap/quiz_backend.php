<?php
       //send json data
	   
	$m = new MongoClient("mongodb://localhost:27017");
	$db = $m->wt2quiz;
	$collection = $db->quiz;
	
	$res=array();
	extract($_GET);
	$res["q_id"]=$q_id;
	$cursor = $collection->find();
	foreach ($cursor as $document) {
      if($document["q_id"]==$q_id)
	  {
		$res["question"]=$document["question"];
		 break;
		
	  }
	 
	  
   }
   
   $options=$document["options"];
	
	

	/*$options=array();
	$options["0"]="yes";
	$options["1"]="no";
	$options["2"]="maybe";
	//json_encode */
	$res["options"]=json_encode($options);
	
	$ret=json_encode($res);
	echo $ret;
?>





