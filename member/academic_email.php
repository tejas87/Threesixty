<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Academic email</title>
</head>

<body>

<h3>Enter Academic email </h3>

<?php
   
    $this->load->helper("form");
    $this->load->library("form_validation"); 
	
	echo validation_errors();

	echo form_open("http://localhost/ci_intro/member/invitation");

    echo form_label("Enter your university email address: ", "email");

    $config = array(
        "name" => "email",
        "id" => "email",
        "maxlength" => "50",
        "size"     => "50",
        "rules" => "required|valid_email",
        "value" => set_value("email")
        
  );

   echo form_input($config);
///////////////////////////////////////////////////////////////////  

  /* $options = array(
                  'Threesixty'  => '@threesixtyapp.com',
                  'Durham'    => '@dur.ac.uk',
                  'Durham1'   => '@durham.ac.uk',
                  'St Andrews' => '@st-andrews.ac.uk',
                  'Cambridge'  => '@cam.ac.uk',
                  'Oxford' =>     '@ox.ac.uk',
                  'Nottingham' => '@nottingham.ac.uk',
                  'Manchester' => '@manchester.ac.uk',
                  'Sheffield' => '@sheffield.ac.uk',
                  'Harvard' => '@harvard.ac.uk',
                  'Sheffield1' => '@shef.ac.uk'                  
                );

	$uni_domain = array('Threesixty', 'Durham', 'Durham1','St Andrews','Cambridge','Oxford','Nottingham','Manchester',
	                    'Sheffield','Harvard','Sheffield1');

	echo form_dropdown('Enter email address', $options, 'Durham'); **/

  echo  form_submit("contactSubmit", "Submit");
 
  echo form_close();
 
  
?>

</body>
</html>
