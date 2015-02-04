<?php 

// (left side)  ON   (right side)

//LEFT JOIN - do display data on the left even if data doesnt exist on the right

//"SELECT people.name, pets.pet FROM people LEFT JOIN pets ON people.id=pets.people_id";
//"SELECT people.name, pets.pet FROM people LEFT JOIN pets ON people.id=pets.people_id LIMIT 0, 30";
//OUT PUT = 
//          name  	pet
//			Alex	Cat
//			Alex	Fish
//			Dale	NULL

//RIGHT JOIN - to display data on the right hand side even if the corresponding value on left hand side doesnt exist. for example Dog exists while Dale does not exists

//"SELECT people.name, pets.pet FROM people RIGHT JOIN pets ON people.id=pets.people_id";
//"SELECT people.name, pets.pet FROM people RIGHT JOIN pets ON people.id=pets.people_id LIMIT 0, 30";
//OUT PUT = 
//          name  	pet
//			Alex	Cat
//			Alex	Fish
//			NULL	Dog



//JOIN - values that exists on both tables, left hand side and right hand side

//"SELECT people.name, pets.pet FROM people JOIN pets ON people.id=pets.people_id";
//"SELECT people.name, pets.pet FROM people JOIN pets ON people.id=pets.people_id LIMIT 0, 30";
//OUT PUT = 
//          name  	pet
//			Alex	Cat
//			Alex	Fish
//			
?>