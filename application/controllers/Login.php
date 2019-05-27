
<?php
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		
		date_default_timezone_set('Asia/Calcutta');
		// Load database
		$this->load->model ('LoginModel');
	}
	
	// Show login page
	public function index() {
		
		$this->load->view('Login');
	}
	
	// Check for user login process
	public function userLoginProcess() {
		$this->form_validation->set_rules ( 'username', 'Username', 'trim|required' );
		$this->form_validation->set_rules ( 'password', 'Password', 'trim|required' );
		
		if ($this->form_validation->run () == FALSE) {
			if (isset ( $this->session->userdata ['logged_in'] )) {
				redirect('/Dashboard', 'refresh');				
			} else {
				$this->load->view ( 'Login' );
			}
		} else {
			
			$data = array (
					'username' => $this->input->post ( 'username' ),
					'password' => $this->input->post ( 'password' ) 
			);
			$result = $this->LoginModel->login ( $data );
			
			if ($result == TRUE) {
				
				$username = $this->input->post ( 'username' );
				$result = $this->LoginModel->readUserInformation ( $username );
				if ($result != false) {
					$session_data = array (
							'username' => $result [0]->user_name,
							'email' => $result [0]->user_email, 
							'fullname' => $result [0]->fullname 
					);
					// Add user data in session
					$this->session->set_userdata ( 'logged_in', $session_data );
					redirect('/Dashboard', 'refresh');
				}
			} else {
				$data = array (
						'error_message' => 'Invalid Username or Password' 
				);
				$this->load->view ( 'Login', $data );
			}
		}
	}
	
	// Logout from admin page
	public function logout() {
		
		// Removing session data
		$sess_array = array (
				'username' => '' 
		);
		$this->session->unset_userdata ( 'logged_in', $sess_array );
		$data ['message_display'] = 'Successfully Logout';
		redirect('/Login', 'refresh');
	}
}

?>

