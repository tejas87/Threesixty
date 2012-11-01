<html>
<head>
<title>
Bulk Add Confirmation
</title>

</head>

<body>

<!-- Number of users on threesixty database which were entered in the bulk add text field-->

<h3>The user is already on the system </h3>

 <li><a href="<?php echo base_url(); ?>member">Home</a></li>
 
<!-- Depends on which society is adding them select that society and its members-->

<h3>Number of users who are already members </h3>

<?php 

$affect = $this->db->affected_rows();

echo $affect; ?>

<!-- Users who are neither on the threesixty database and who are not on the society list -->




	
</body>


</html>



















