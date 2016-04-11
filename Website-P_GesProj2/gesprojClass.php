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



}
?>
