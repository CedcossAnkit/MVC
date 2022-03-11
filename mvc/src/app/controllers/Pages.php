<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        echo "kfc";
    }

    public function login()
    {

        $this->view('login');
    }

    public function signup()
    {

        $data = [
            'action' => isset($_POST['insert']) ? $_POST['insert'] : 'gg',
            'name' => isset($_POST['name']) ? $_POST['name'] : 'gg',
            'email' => isset($_POST['email']) ? $_POST['email'] : 'gg',
            'password' => isset($_POST['password']) ? $_POST['password'] : 'gg',
            'Cpassword' => isset($_POST['Cpassword']) ? $_POST['Cpassword'] : 'gg',

        ];



        $this->view('signup', $data);

        if ($data['password'] != $data['Cpassword']) {
            echo "Password not match";
        } else if ($data['action'] == "insert") {
            $this->userModel->hello($data);
        }
    }
}
