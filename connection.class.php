<?php

class Dbconnection{
    private $db_host = 'localhost'; // Server Name
    private $db_user = 'root'; // Username
    private $db_pass = ''; // Password
    private $db_name = 'bootcamp2021'; // Database Name
    private $conn = null;

    public function __construct(){
        $this->conn = mysqli_connect('localhost', $this->db_user, $this->db_pass, $this->db_name);
        if (!$this->conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
        }
    }

    public function ourquery($sql)
    {
        return $this->conn->query($sql);
    }

}