<?php
/**
 * Author: carvalhoda
 * Date: 11.04.2016
 * Summary : Class that contains all the method and getter setter for the gesproj2 project
 */
class gesprojClass
{
    public $lastname;
    public $address;
    public $firstname;

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Default constructor
     */
    public function __construct() {
        $this->dbh = new PDO('mysql:host=localhost;dbname=db_gesproj2;charset=utf8',"gesproj2", "gesproj2admin",array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    /**
     * Destructor auto
     */
    public function __destruct()
    {
        $this->dbh = null;
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

                header("location:index.php?resON=0");
            }
            else
            {
                header("location:index.php?resON=1");

            }
        }
        else
        {
            header("location:index.php?resON=2");

        }
    }

    public function Logout()
    {
        if (isset($_SESSION['user']))
        {
            session_destroy();
            header("location:index.php?resOFF=0");
        }
        else
        {
            header("location:index.php?resOFF=1");
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
            header("location:index.php?resINS=0");

        }
        else
        {
            //Redirect to the "Failed" page
            header("location:register.php?resINS=1");
        }

        //Kill the connection to database
        unset($this->dbh);
    }

    /**
     * Display formation in the html
     */
    public function getAllFormations()
    {
        //Prepare the select request
        $stmt = $this->dbh->prepare('SELECT forLastName AS former1, fkFormer2 AS form2,idTraining,traName,traDescription,traStartDate,traEndDate,traPeriodicity,traPrice,traLocality,traMinParticipants,traMaxParticipants FROM t_former,t_training WHERE fkFormer1 = idFormer ORDER BY idTraining');

        //Execute the request
        $stmt->execute();

        //Get the result of the request in an array
        $formations = $stmt->fetchAll();

        //return formations
        return $formations;
    }

    /**
     * Display trainers in the html
     */
    public function getAllTrainers()
    {
        //Prepare the select request
        $stmt = $this->dbh->prepare('SELECT traName,forLastName,forFirstName,forEmail,forPhone,forQualifications,idFormer,idTraining FROM t_former,t_training WHERE idFormer = fkFormer1 GROUP BY idFormer ORDER BY idTraining');

        //Execute the request
        $stmt->execute();

        //Get the result of the request in an array
        $formers = $stmt->fetchAll();

        //Return the list
        return $formers;
    }

    /**
     * @param $whatType
     * Method to configure a new student or teacher
     */
    public function newStudForm($whatType)
    {
        #If a student is asked
        if($whatType == 0) {
            $firstname = $this->getFirstname();
            $lastname = $this->getLastname();
            $address = $this->getAddress();
            $id = $this->getSessionID();

            //Check if the id is not null
            if ($id != null) {
                //Query to create a new user (username & password)
                $newStudent = "INSERT INTO t_student(
                        stuFirstname,
                        stuLastname,
                        stuAddress,
                        fkUser
                        ) VALUES (
                        :stuFirstname,
                        :stuLastname,
                        :stuAddress,
                        :fkUser
                        )";

                //Prepare the query $newUser
                $stmt = $this->dbh->prepare($newStudent);

                //Bind the parameter $useUsername & userPassword
                $stmt->bindParam(':stuFirstname', $firstname, PDO::PARAM_STR);
                $stmt->bindParam(':stuLastname', $lastname, PDO::PARAM_STR);
                $stmt->bindParam(':stuAddress', $address, PDO::PARAM_STR);
                $stmt->bindParam(':fkUser', $id, PDO::PARAM_INT);

                //Execute the query
                $stmt->execute();


                //Validate the acc
                $isStudent = 1;
                $validateStudent = "UPDATE t_user SET isStudent = '$isStudent' WHERE idUser = '$id'";

                $stmt = $this->dbh->prepare($validateStudent);

                $stmt->execute();

                header("location:index.php");
            }
        }
    }

    /**
     * @return null
     * Method to get the id of the session
     */
    public function getSessionID()
    {
        $username = $_SESSION['user'];

        //Prepare the select request
        $stmt = $this->dbh->prepare('SELECT idUser FROM t_user WHERE useUsername = ?');
        $stmt->bindParam(1,$username);
        //Execute the request
        $stmt->execute();

        $count = $stmt->rowCount();
           if($count != 0)
            {
                //Get the result of the request in an array
                $result = $stmt->fetchAll();

                $id = $result[0][0];

                return $id;
            }
        return null;
    }

    /**
     * @param $isStudent
     * @return bool
     * Method to check if a teacher/student has already been configured
     */
    public function checkAlreadyRegistered($isStudent)
    {
        //Check if the user is logged in
        if (isset($_SESSION['user'])) {
            $id = $this->getSessionID();

            //CHECK FOR STUDENT
            if ($isStudent == 1) {
                $sql2 = "SELECT idStudent FROM t_student WHERE fkUser = '$id'";
                $stmt = $this->dbh->prepare($sql2);
                $stmt->execute();
                $count = $stmt->rowCount();

                if ($count == 0) {
                    return false;
                } else {
                    return true;
                }

            }

            //CHECK FOR TEACHER


            //CHECK FOR BOTH
            if ($isStudent == 3) {
                $sql2 = "SELECT idStudent FROM t_student WHERE fkUser = '$id'";
                $stmt = $this->dbh->prepare($sql2);
                $stmt->execute();
                $count = $stmt->rowCount();

                if ($count == 0)
                {
                    $sql3 = "SELECT idFormer FROM t_former WHERE fkUser = '$id'";
                    $stmt = $this->dbh->prepare($sql3);
                    $stmt->execute();
                    $count = $stmt->rowCount();

                    if($count == 0)
                    {
                        return false;
                    }
                }

                else
                {
                    return true;
                }

            } else {
                echo 'Pas connecté !';
            }
        }
        return null;
    }
}
?>
