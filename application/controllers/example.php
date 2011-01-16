<?php

	// Load the library, which in turn grabs the API key from the config file
	$this->load->library('Mcapi');
	
	// just as an example here, i'm sending across first,
	// and last names into mailchimp
			
	$name = explode(' ', $arr['name']);
	
	// subscribe the individual to a list.
	// for information about what parameters to send, please 
	// view the mcapi.php library file. It's all documented.
		
	$success = $this->mcapi->listSubscribe('11111111', $arr['email'], array('FNAME' => $name[0], 'LNAME' => $name[1]));

	if($success)
	{
		log_message('info', 'Woop! Person added successfully');
	}
	else
	{
		log_message('error', 'Uh oh! Person could not be added to the list.');
	}

?>