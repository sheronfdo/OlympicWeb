<?php
final class dbConnect
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "Jamith@5000";
    public $dbName = "olympic";
    public $conn = null;
    // Create connection


    public function checkDb()
    {
        if (is_null($this->conn)) {
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
        }
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection()
    {
        $this->checkDb();
        return $this->conn;
    }

    public function insertIntoDb($query)
    {
        $this->checkDb();
        if (!mysqli_query($this->conn, $query)) {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->conn);
        }
    }

    public function getfromdb($query)
    {
        $this->checkDb();
        if ($result = mysqli_query($this->conn, $query)) {
            return $result;
        } else {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($this->conn);
        }
    }
}
