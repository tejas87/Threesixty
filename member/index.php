<!DOCTYPE html>
<html lang = "en">
<head>
      <meta charset ="utf-8">
      <title><?php echo $title ?></title>
</head>
<body>

<div id= "container">
     <div id ="nav">
     <ul>
         <li><a href="<?php echo base_url(); ?>member">Home</a></li>
         <li><a href="<?php echo base_url(); ?>member/contact">Send email</a></li>
         <li><a href="<?php echo base_url(); ?>member/add_users">Bulk add</a></li>
        
     </ul>
     </div>
     </div>
</body>
</html>


<?php

    $this->load->helper("form"); 
	echo form_open("member/contact");
	echo  form_submit("contactSubmit", "Invite");
	echo "<h2>"."Users currently in the system"."</h2>";	
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>First name</td>";
	echo "<td>Last name</td>";
	echo "<td>Email</td>";
	echo "<td>Invite</td>";
	echo "</tr>";
	echo "<tr>";

     foreach ($member as $item)
     {
		  
		 echo "<td>".$item['first_name']."</td>";
		 echo "<td>".$item['last_name']."</td>";
		 echo "<td>".$item['email']."</td>";
		 echo "<td>".'<input type="checkbox" name ="myCheckBox[]", value='.$item['email'].', FALSE />'."</td>";     
		 echo "</tr>";
     }
     echo "</table>";
     echo  form_close();
	 
	 //echo $this->table->generate($records);
	// echo "<td>".'<input type="checkbox" name ="myCheckBox[]", value='.$item['email'].', FALSE />'."</td>"; 
	 //echo $this->pagination->create_links();
 ?>



