<?php
	
function locator($dbColumnToSearch, $searchValue){
		$mysqli = new mysqli('host', 'username', 'password', 'dbname');
		
		switch ($dbColumnToSearch){
			
			case "eaterytype_name":
					$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where eaterytype.eaterytype_name LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
						 "Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
						 "Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
					     "---------------------------------------------<br>";
				}
			
			case "owner_FULLname":
				//This switch case searches the Owner's First or Last Name	
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where owner.owner_fname OR owner.owner_lname LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}
					
			case "owner_lname":
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where owner.owner_lname LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}
				
			case "owner_phone":
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where owner.phone LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}
				
			case "eateries_name":
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where eateries.eateries_name LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}
				
			case "eateries_city":
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where eateries.eateries_city LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}
				
			case "eateries_state":
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where eateries.eateries_state LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}	
				
			case "eateries_zip":
				
				$q = "SELECT eateries.eateries_name, eateries.eateries_city, eateries.eateries_state, eateries.eateries_zip, 					owner.owner_fname, owner.owner_lname, owner.owner_phone FROM eateries INNER JOIN owner on 					eateries.eateries_owner = owner.owner_id INNER JOIN eateryType on eateries.eateries_type = 					eaterytype.eaterytype_id where eateries.eateries_zip LIKE '%".$searchValue."%'  ";
				
				$result = $mysqli->query($q);
				while($row = $result->fetch_array(MYSQLI_ASSOC)){
					echo "Business Name: {$row['eateries_name']} :<br>".
							"Owned By: {$row['owner_fname']} . {$row['owner_lname'] } | Phone: {$row['owner_phone'] } <br> ".
							"Located In: {$row['eateries_city']} , {$row['eateries_state']} . {$row['eateries_zip']} <br>".
							"---------------------------------------------<br>";
				}
				
		}
}
	
