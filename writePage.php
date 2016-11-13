<?php
	$txt = strip_tags($_POST['content']);
	$id = $_POST['id'];
	$id = str_replace('#ps', '', $id);

    $tempFile = file_get_contents('js/data.json');
    $match="match";
   
   
	$json = json_decode($tempFile);
	$newJson = "[\n";

	foreach($json as $item)
	{
        $newJson .= "{\n";

	    if($item->id == $id)
	    {
	        $newJson .= "\"id\":\"". $id . "\",\n\"content\":\"".$txt."\"},\n";
	    }
	    else{
	    	$newJson .= "\"id\":\"". $item->id . "\",\n\"content\":\"".$item->content."\"},\n";
	    }

	}

	

	$commaPos = strrpos($newJson, ",");
	$newJson = substr_replace($newJson,"",$commaPos,1);
	$newJson .= "]";
    
	

	file_put_contents('js/data.json', $newJson);
	
?>
