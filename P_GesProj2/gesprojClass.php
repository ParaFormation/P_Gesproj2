<?php
/**
 * Author: carvalhoda
 * Date: 11.04.2016
 * Summary : Class that contains all the method and getter setter for the gesproj2 project
 */
class gesprojClass
{
    /**
     * Default constructor
     */
    public function __construct() {
        $this->dbh = new PDO('mysql:host=localhost;dbname=db_gesproj2;charset=utf8',"gesproj2", "gesproj2admin",array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    /**
     * @param $username
     * @param $password
     * Method to login
     */
    public function Login($username,$password)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM t_user WHERE useUsername='$username'");
        $stmt->execute();
        $count=$stmt->rowCount();
        $dbPassword = 0;

        if($count == 1)
        {
            $result = $stmt->fetchAll();
            foreach($result as $row)
            {
                $dbPassword = $row['usePassword'];
            }

            if(password_verify($password,$dbPassword))
            {
                $_SESSION['user'] = $username;

                header("location:loginResult.php?res=0");
            }
            else
            {
                header("location:loginResult.php?res=1");

            }
        }
        else
        {
            header("location:loginResult.php?res=1");

        }
    }

    public function Logout()
    {
        if (isset($_SESSION['user']))
        {
            session_destroy();
            header("location:logoutResult.php?res=0");
        }
        else
        {
            header("location:logoutResult.php?res=1");
        }
    }

    public function Register($username,$password)
    {
        //Check if the username already exists
        $stmt = $this->dbh->prepare("SELECT * FROM t_user WHERE useUsername='$username'");
        $stmt->execute();
        $count=$stmt->rowCount();

        //If the username doesn't exixt
        if($count == 0)
        {
            $passwordEnc=password_hash($password,PASSWORD_DEFAULT);

            //Query to create a new user (username & password)
            $newUser = "INSERT INTO t_user(
                        useUsername,
                        usePassword
                        ) VALUES (
                        :useUsername,
                        :usePassword
                        )";

            //Prepare the query $newUser
            $stmt = $this->dbh->prepare($newUser);

            //Bind the parameter $useUsername & userPassword
            $stmt->bindParam(':useUsername',$username, PDO::PARAM_STR);
            $stmt->bindParam(':usePassword', $passwordEnc, PDO::PARAM_STR);

            //Execute the query
            $stmt->execute();

            //redirect to the "Success" page
            header("location:registerResult.php?res=0");

        }
        else
        {
            //Redirect to the "Failed" page
            header("location:registerResult.php?res=1");
        }

        //Kill the connection to database
        unset($this->dbh);
    }

}
?>
