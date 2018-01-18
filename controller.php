<?php
class controller
{
    private $host = 'localhost';
    private $user = '23899_guestbook';
    private $password = 'sxzdcstf';
    private $database = '23899_db';
    private $con;
    public function __construct()
    {
        $this->con = $this->connect();
    }

    private function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die('Test');
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $con;
    }

    public function querySelect($query) {
        $doQuery = mysqli_query($this->con, mysqli_real_escape_string($this->con, stripslashes(htmlentities($query))));
        $result = $doQuery;
        while($rows = $result->fetch_assoc()){
            $resultArray[] = $rows;
        }

        if (!empty($doQuery)) {
            return $resultArray;
        } else {
            return false;
        }
    }

    public function queryInsert($query) {
        $doQuery = mysqli_query($this->con, htmlentities($query));
        if ($doQuery) {
            return true;
        } else {
            return false;
        }
    }

    public function queryRows($query) {
        $doQuery = mysqli_query($this->con, mysqli_real_escape_string($this->con, stripslashes(htmlentities($query))));
        $doQuery = mysqli_num_rows($doQuery);
        if ($doQuery > 0) {
            return $doQuery;
        } else {
            return false;
        }
    }
}