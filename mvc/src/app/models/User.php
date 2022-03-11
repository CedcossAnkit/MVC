<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        */

    public function hello($data)
    {
        // print_r();
        // echo "sdkjksdnsds";
        // print_r($data);
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        // $sql="select * from "
        if ($name == "" || $email == "" ||  $password == "") {
            echo "All Feilds Are Requried";
        } else {
            $rd = rand(10, 100);
            // echo $name, $email, $password;
            try {
                $sql = "insert into users
            values(
                $rd,'$name','$email','$password','USER'
            )
            ";

                $this->db->query($sql);
                $this->db->execute();
                echo "Data Inserted";
            } catch (PDOException $e) {
                echo "Something Went Wrong $e";
            }
            // print_r();
        }
    }
}
