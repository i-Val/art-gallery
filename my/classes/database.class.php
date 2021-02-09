<?php
/**
*
*
*/

/*Database CLASS has the following methods*/
//Connect
//Insert
//Delete
//Clear
//Select
//Select all

class Database
{

    /*INITIALIZE ALL THE VARIABLES NEEDED FOR DB CONNECTION
    */
    public function __construct($hst, $usrnm, $pass, $db) {
        $this->host = $hst;
        $this->username = $usrnm;
        $this->password = $pass;
        $this->database = $db;
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        //$this->conn;
    }
    /*connect method*/
    function connect () {

        if ($this->conn) {
            echo "Suceess!!!!!";
        } else {
            echo "erooroo";
        }
    }
    /*Select method(select all)*/
    function select_all($table) {
        $this->table = $table;
        $conns = $this->conn;
        $sql = $conns->query("SELECT * FROM ".$this->table.";");
        while ($res = mysqli_fetch_assoc($sql)) {
            echo $res["name"];
            echo "<br>";
        }

    }
    /*Select one row*/
    function select_one($table, $title, $value) {
        $this->table = $table;
        $this->title = $title;
        $this->value = $value;

        $conns = $this->conn;
        $sql = $conns->query("SELECT * FROM ".$this->table." WHERE ".$this->title." = '".$this->value."'");
        return  $sql;


    }
    /*select one row and print one value*/
    function login($table, $title, $value) {
        $this->table = $table;
        $this->user = $title;
        $this->password = $value;

        $conns = $this->conn;
        $sql = "SELECT * FROM $this->table WHERE username = '$this->user' AND password = '$this->password'";
        $res = mysqli_query($conns, $sql);
        $row = mysqli_fetch_assoc($res);
        $pass2 = $row ['password'];
        if (preg_match("/^".$pass2."$/", $this->password)) {
            return 1;
        } else {

            return 0;
            //$row = mysqli_num_rows($res);

            //return $row;
        }

    }

    function logout () {
        #Check if submit button was clicked
        if (isset($_POST["submit"])) {

            #Set session to an empty array thus clearing it
            session_start();
            $_SESSION = array();

            #redirect the user to the home page
            header("Location: ../index.php");

            #logout message
            $welcome = "You are now logged out!";

        } else {
            echo "failed!";
        }
    }
    /*select one row and print one value*/
    function select_one_index($table, $title, $value, $index) {
        $this->table = $table;
        $this->title = $title;
        $this->value = $value;
        $this->index = $index;

        $sql = $this->conn->query("SELECT * FROM$this->table WHERE $this->title = '$this->value';");

        if ($sql) {
            echo "sql worked!";
        } else {
            echo "sql failed! ";
        }

        while ($res = mysqli_fetch_assoc($sql)) {
            echo "SELECT ONE";
            echo $res["$this->index"];
            echo "<br>";
        }


    }
    /*select all row and print one value each*/
    function select_all_index($table, $index) {
        $this->table = $table;
        $this->index = $index;

        $conns = $this->conn;
        $sql = $conns->query("SELECT * FROM$this->table");
        while ($res = mysqli_fetch_assoc($sql)) {
            echo "SELECT ONE";
            echo $res["$this->index"];
            echo "<br>";
        }

    }

    /* Insert method*/
    function insert_into($table, $n, $sn, $un, $pw) {
        $this->table = $table;
        $this->name = $n;
        $this->surname = $sn;
        $this->username = $un;
        $this->password = $pw;


        $sql = "INSERT INTO ".$this->table."(name, surname, username, password)
VALUES ('".$this->name."', '".$this->surname."', '".$this->username."','".$this->password. "')";
        $conns = $this->conn;
        #Check for any error in query
        if ($conns->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    /*update method*/
    function update($table, $index, $value, $old_value) {
        $this->table = $table;
        $this->index = $index;
        $this->value = $value;
        $this->old_value = $old_value;
        $conns = $this->conn;
        $sql = "UPDATE $this->table SET $this->index='$this->value'
 WHERE $this->index='$this->old_value'";
        if ($conns->query($sql) === TRUE) {
            echo "row updated!";
        } else {
            echo "Error: " . $sql . "<br>" . $conns->error;
        }

    }

    /*Delete row*/
    function delete_row($table, $title, $value) {
        $this->table = $table;
        $this->title = $title;
        $this->value = $value;
        $conns = $this->conn;
        $sql = $conns->query("DELETE  FROM$this->table WHERE $this->title = '$this->value';");
        if (!$sql) {
            echo $conns->error;
            echo "<br>";
        } else {
            echo "delete successful! ";
        }
    }

    /*Clear table*/
    function delete_all($table) {
        $this->table = $table;
        $conns = $this->conn;
        $sql = $conns->query("DELETE FROM$this->table WHERE name='bile' OR 1=1;");
        if (!$sql) {
            echo $conns->error;
            echo "<br>";
        } else {
            echo "delete successful! ";
        }
        //Method end
    }

    //CLASS END
}

//instantiate class
$database = new Database("localhost", "root", "", "valpoint");

?>