<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bulk Add</title>
</head>

<body>

<h3>Bulk add members to society </h3>
<?php

  
	
   
    $this->load->helper("form"); 
	
	echo validation_errors();

	echo form_open("http://localhost/ci_intro/member/add_users");

    echo form_label("Email: ", "email");

  $data = array(
        "name" => "email",
        "id" => "email",
        "value" => set_value("email")
  );

   echo form_textarea($data);

  echo  form_submit("contactSubmit", "Next");
 
  echo form_close();
 
  
?>

</body>
</html>
