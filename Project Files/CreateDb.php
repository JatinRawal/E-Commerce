<?php

class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )

    {   //Initialising

$this->dbname=$dbname;
        $this->tablename=$tablename;
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;

        //create connection
        $this->con=mysqli_connect($servername,$username,$password);

        //check connection

        if(!$this->con){
            die("Connection failed:".mysqli_connect_error());
        }

        //query
        $sql="CREATE DATABASE IF NOT EXISTS $dbname";

        //execute query (once database $dbname is created then we can specify this to as connection property)
        if(mysqli_query($this->con,$sql)){
            $this->con = mysqli_connect($servername,$username,$password,$dbname);

            //sql to create new table
            $sql="CREATE TABLE IF NOT EXISTS $tablename
            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name VARCHAR(25) NOT NULL,
            product_price FLOAT,
            product_image VARCHAR(100),
            product_desc VARCHAR(200)
            );";
            //if failed to create an upper query then will load message as:ERROR creating table
            if(!mysqli_query($this->con,$sql)){
                echo "ERROR creating table:".mysqli_error($this->con);
            }
            }else{
                return false;
        }
    }
    //get product from the datbase
    public function getData(){
        $sql="SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con,$sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

}