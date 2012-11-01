<html>
<head><title><?php echo $title ?></title>

<style>
body 
{
  width:170px;
  min-height:100%;
  margin:0 auto;
  padding:20px;
} 
</style>

</head>
<body>
  <li><a href="<?php echo base_url(); ?>member">Home</a></li>

<?php
 
  $this->load->helper("form");
  $this->load->helper('string');
  

  
 // foreach($this->input->post("myCheckBox") as $email)
  //{
    
 	
  $emailarray = $this->input->post('myCheckBox');
  $email = $emailarray[0];
  $string = reduce_multiples($email, ", ", TRUE); // Remove any trailing commas
  echo $string;
  
  
  //}
  echo $message;
  
  echo validation_errors();
  
  echo form_open("http://localhost/ci_intro/member/send_email");
 
  echo form_label("Name: ", "fullName");
	$data = array
	(
		  "name" => "fullName",
		  "id" => "fullName",
		  "value" => set_value("fullName")
	);
  echo form_input($data);

  echo form_label("Email: ", "email");
	$data = array
	(
		  "name" => "email",
		  "id" => "email",
		  "value" => set_value("email") //$string
	                
	);
  echo form_input($data);
  
  echo form_label("Message:", "message");
	$data = array(
		  "name" => "message",
		  "id" => "message",
		  "value" => "Hello student
		    We are inviting you to join our society. Please click on the below link to register"
	);
  echo form_textarea($data);
  
  echo  form_submit("contactSubmit", "Send!");
  
  echo form_close();  
  



?>

</body>
</html>


