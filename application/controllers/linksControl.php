<?php

class linksControl extends CI_Controller {
 
		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model("Links",'linkm');
			$this->load->library(array('ion_auth','form_validation'));
		
		}
		

    public function updateClicks(){
       echo $this->linkm->updateclick($this->ion_auth->get_user_id());
    }

	public function insertLink()
	{
		// profile image manipulation
	$filename = '230x142.png';
    if (is_uploaded_file($_FILES['videoimg']['tmp_name'])) {
        $errors     = array();
        $allowed =  array('gif','png' ,'jpg','jpeg');
        $tmp = $_FILES['videoimg']['tmp_name'];
        $filename = $_FILES['videoimg']['name'];
        $maxsize    = 11097152;
        $ext = pathinfo($filename,PATHINFO_EXTENSION);
        if($_FILES['videoimg']['size'] >= $maxsize)
            $errors[]  = "File size is too large File must be less than 11 mb";
        if(!in_array($ext,$allowed))
           $errors[] = "Invalid file type. Only  JPG, GIF and PNG types are accepted.";
        if(count($errors)==0){
        $target = "assets/postimages/".$this->input->post('title').".".$ext;
        $filename = $this->input->post('title').".".$ext;
        move_uploaded_file($tmp,$target);
        }
        else{
            foreach ($errors as $error)
              echo '<script>alert("'.$error.'");</script>';
        }}

		$this->linkm->insertdata($this->ion_auth->get_user_id(),$filename);
		redirect("/auth/loggedin");
	}

}


?>