<?php


class DBController
{
    // Database Connection Properties
     // Database Connection Properties
    protected $host = 'eu-cdbr-west-03.cleardb.net';
    protected $user = 'b5d53262c8e8f5';
    protected $password = '7df5b121';
    protected $database = "heroku_a1c43d1ef89e06b";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
