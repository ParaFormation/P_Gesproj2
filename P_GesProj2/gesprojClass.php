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
    public $qualifications;
    public $email;
    public $phone;
	public $formationList;	
	public $valQ1;
    public $valQ2;
    public $valQ3;
    public $valQ4;
    public $valQ5;
    public $valQ6;
    public $valQ7;
    public $valQ8;
    public $valQ9;
    public $valQ10;
    public $valQ11;
    public $comment;
    public $formationID;

    /**
     * @return mixed
     */
    public function getValQ1()
    {
        return $this->valQ1;
    }

    /**
     * @param mixed $valQ1
     */
    public function setValQ1($valQ1)
    {
        $this->valQ1 = $valQ1;
    }

    /**
     * @return mixed
     */
    public function getValQ2()
    {
        return $this->valQ2;
    }

    /**
     * @param mixed $valQ2
     */
    public function setValQ2($valQ2)
    {
        $this->valQ2 = $valQ2;
    }

    /**
     * @return mixed
     */
    public function getValQ3()
    {
        return $this->valQ3;
    }

    /**
     * @param mixed $valQ3
     */
    public function setValQ3($valQ3)
    {
        $this->valQ3 = $valQ3;
    }

    /**
     * @return mixed
     */
    public function getValQ4()
    {
        return $this->valQ4;
    }

    /**
     * @param mixed $valQ4
     */
    public function setValQ4($valQ4)
    {
        $this->valQ4 = $valQ4;
    }

    /**
     * @return mixed
     */
    public function getValQ5()
    {
        return $this->valQ5;
    }

    /**
     * @param mixed $valQ5
     */
    public function setValQ5($valQ5)
    {
        $this->valQ5 = $valQ5;
    }

    /**
     * @return mixed
     */
    public function getValQ6()
    {
        return $this->valQ6;
    }

    /**
     * @param mixed $valQ6
     */
    public function setValQ6($valQ6)
    {
        $this->valQ6 = $valQ6;
    }

    /**
     * @return mixed
     */
    public function getValQ7()
    {
        return $this->valQ7;
    }

    /**
     * @param mixed $valQ7
     */
    public function setValQ7($valQ7)
    {
        $this->valQ7 = $valQ7;
    }

    /**
     * @return mixed
     */
    public function getValQ8()
    {
        return $this->valQ8;
    }

    /**
     * @param mixed $valQ8
     */
    public function setValQ8($valQ8)
    {
        $this->valQ8 = $valQ8;
    }

    /**
     * @return mixed
     */
    public function getValQ9()
    {
        return $this->valQ9;
    }

    /**
     * @param mixed $valQ9
     */
    public function setValQ9($valQ9)
    {
        $this->valQ9 = $valQ9;
    }

    /**
     * @return mixed
     */
    public function getValQ10()
    {
        return $this->valQ10;
    }

    /**
     * @param mixed $valQ10
     */
    public function setValQ10($valQ10)
    {
        $this->valQ10 = $valQ10;
    }

    /**
     * @return mixed
     */
    public function getValQ11()
    {
        return $this->valQ11;
    }

    /**
     * @param mixed $valQ11
     */
    public function setValQ11($valQ11)
    {
        $this->valQ11 = $valQ11;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getFormationID()
    {
        return $this->formationID;
    }

    /**
     * @param mixed $formationID
     */
    public function setFormationID($formationID)
    {
        $this->formationID = $formationID;
    }

    /**
     * @return mixed
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * @param mixed $qualifications
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


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
    public function getAllTrainersWithFormation()
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
     * Display trainers in the html
     */
    public function getAllTrainers()
    {
        //Prepare the select request
        $stmt = $this->dbh->prepare('SELECT idformer, forFirstname, forLastname, forAddress, forEmail, forPhone, forQualifications, fkUser FROM t_former GROUP BY idFormer');

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
        $firstname = $this->getFirstname();
        $lastname = $this->getLastname();
        $address = $this->getAddress();
        $email = $this->getEmail();
        $phone = $this->getPhone();
        $qual = $this->getQualifications();
        $id = $this->getSessionID();

        #If a student is asked
        if($whatType == 0) {


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

                header("location:../index.php");
            }
        }
        else {
            //If a teacher is asked
            if ($whatType == 1) {
                //Check if the id is not null
                if ($id != null) {
                    //Query to create a new user (username & password)
                    $newFormer = "INSERT INTO t_former(
                        forFirstname,
                        forLastname,
                        forAddress,
						forEmail,
						forPhone,
						forQualifications,
                        fkUser
                        ) VALUES (
                        :forFirstname,
                        :forLastname,
                        :forAddress,
						:forEmail,
						:forPhone,
						:forQualifications,
						:fkUser
                        )";

                    //Prepare the query $newFormer
                    $stmt = $this->dbh->prepare($newFormer);

                    //Bind the parameter $useUsername & userPassword
                    $stmt->bindParam(':forFirstname', $firstname, PDO::PARAM_STR);
                    $stmt->bindParam(':forLastname', $lastname, PDO::PARAM_STR);
                    $stmt->bindParam(':forAddress', $address, PDO::PARAM_STR);
                    $stmt->bindParam(':forEmail', $email, PDO::PARAM_STR);
                    $stmt->bindParam(':forPhone', $phone, PDO::PARAM_STR);
                    $stmt->bindParam(':forQualifications', $qual, PDO::PARAM_STR);
                    $stmt->bindParam(':fkUser', $id, PDO::PARAM_INT);

                    //Execute the query
                    $stmt->execute();

                    header("location:../index.php?need_confirmation");
                }
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
     * @param $isRegistered
     * @return bool
     * Method to check if a teacher/student has already been configured
     */
    public function checkAlreadyRegistered($isRegistered)
    {
        //Check if the user is logged in
        if (isset($_SESSION['user'])) {
            $id = $this->getSessionID();

            //CHECK FOR STUDENT
            if ($isRegistered == 1) {
                $sql2 = ('SELECT idStudent FROM t_student WHERE fkUser = ?');
                $stmt = $this->dbh->prepare($sql2);
                $stmt->bindParam(1,$id);

                $stmt->execute();
                $count = $stmt->rowCount();

                if ($count == 0) {
                    return false;
                } else {
                    return true;
                }

            }

            //CHECK FOR TEACHER
            if ($isRegistered == 2) {
                $sql3 = ('SELECT idFormer FROM t_former WHERE fkUser = ?');
                $stmt = $this->dbh->prepare($sql3);
                $stmt->bindParam(1,$id);

                $stmt->execute();
                $count = $stmt->rowCount();

                if ($count == 0) {
                    return false;
                } else {
                    return true;
                }

            }
        }
        return null;
    }

    /*
	*	Change the password of a user
	*	param1 : ID of the user
	*	param2 : new password
	*/
    public function ChangePassword($userID, $newPassword)
    {
        if($userID != null && $newPassword != null)
        {
            //Hash the password with sha1
            $encPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Query to update the password
            $updateQuery = ("UPDATE t_user SET usePassword = :password WHERE idUser = :ID");

            //Prepare the query
            $stmt = $this->dbh->prepare($updateQuery);

            //Bind the parameters
            $stmt->bindParam(':password', $encPassword, PDO::PARAM_STR);
            $stmt->bindParam(':ID', $userID, PDO::PARAM_INT);

            //Execute the query
            $stmt->execute();


            //Redirect to the index
            header('location: ../index.php?password_changed');
        }
        else
        {
            //Redirect to the form page
            header('location: ../addTeacherInfos.php?post_error');
        }

        //Kill the connection
        unset($this->dbh);
    }

    /**
     * Display former in the html
     */
    public function getFormerToConfirm()
    {
        //Prepare the select request
        $stmt = $this->dbh->prepare('SELECT forLastName,forFirstName,forEmail,forPhone,forQualifications,idFormer,fkUser FROM t_former,t_user WHERE fkUser = idUser AND isTeacherValidated = 0');

        //Execute the request
        $stmt->execute();

        //Get the result of the request in an array
        $FormerToConfirm = $stmt->fetchAll();

        //return formers
        return $FormerToConfirm;
    }

    /**
     * @param $ID
     * delete former
     */
    public function DeleteFormer($ID)
    {
        $deleteQuery = $this->dbh->prepare('DELETE FROM t_user WHERE idUser = '. $ID . '');
        $deleteQuery->execute();

        header('location:./trainers.php');
    }

    /**
     * @param $ID
     * confirm former
     */
    public function ConfirmFormer($ID)
    {
        $updateQuery = $this->dbh->prepare('UPDATE t_user SET isTeacherValidated = 1 WHERE idUser ='. $ID . '');
        $updateQuery->execute();

    }

    /**
     * Register a student to a training
     * @param $id: The id of the training
     * @param $user: The id of user
     */
    public function registerStudentToTraining($id, $user)
    {
        $stmt = $this->dbh->prepare("INSERT INTO t_inscription (insDate, fkStudent, fkTraining) VALUES (?, ?, ?)");
        $stmt->execute(array(date('Y-m-d H:i:s'), $user, $id));
    }

    /**
     * @param $name: the name of the connected user
     * @return array: the result of th query
     */
    public function getStudent($name)
    {
        $sql = ('SELECT idStudent FROM t_student, t_user WHERE useUsername = ? AND fkUser = idUser');
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
	
	/*
	*	Get all the teachers in t_former
	*/
	public function getAllTeachers()
	{
		//Query to get all the teacher's name / lastname
		$stmt = $this->dbh->prepare('SELECT forFirstName, forLastName FROM t_former ORDER BY idFormer');
		
		//Execute the query
		$stmt->execute();
		
		//Set all the infos into an array
		$teachers = $stmt->fetchAll();
		
		//Return the array
		return $teachers;
	}
	
	/*
	*	Add a new survey result in t_survey
	*/
	public function addSurveyResult()
	{
		$date = date('Y-m-d H:i:s');
		$Q1 = $this->getValQ1();
		$Q2 = $this->getValQ2();
		$Q3 = $this->getValQ3();
		$Q4 = $this->getValQ4();
		$Q5 = $this->getValQ5();
		$Q6 = $this->getValQ6();
		$Q7 = $this->getValQ7();
		$Q8 = $this->getValQ8();
		$Q9 = $this->getValQ9();
		$Q10 = $this->getValQ10();
		$Q11 = $this->getValQ11();
		$comment = $this->getComment();
		$fkTraining = $this->getFormationID();
		

		//Query to create a new survey
		$query = "INSERT INTO t_survey(
					surDate,
					surQuestion1Note,
					surQuestion2Note,
					surQuestion3Note,
					surQuestion4Note,
					surQuestion5Note,
					surQuestion6Note,
					surComment,
					fkTraining,
					surQuestion7Note,
					surQuestion8Note,
					surQuestion9Note,
					surQuestion10Note,
					surQuestion11Note
					) 
					VALUES 
					(
					:surDate,
					:surQuestion1Note,
					:surQuestion2Note,
					:surQuestion3Note,
					:surQuestion4Note,
					:surQuestion5Note,
					:surQuestion6Note,
					:surComment,
					:fkTraining,
					:surQuestion7Note,
					:surQuestion8Note,
					:surQuestion9Note,
					:surQuestion10Note,
					:surQuestion11Note
					)";

			//Prepare the query $newSurvey
			$stmt = $this->dbh->prepare($query);


			//Bind the parameters
			$stmt->bindParam(':surDate',$date,PDO::PARAM_STR);
			$stmt->bindParam(':surQuestion1Note',$Q1, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion2Note',$Q2, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion3Note',$Q3, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion4Note',$Q4, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion5Note',$Q5, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion6Note',$Q6, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion7Note',$Q7, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion8Note',$Q8, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion9Note',$Q9, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion10Note',$Q10, PDO::PARAM_INT);
			$stmt->bindParam(':surQuestion11Note',$Q11, PDO::PARAM_INT);
			$stmt->bindParam(':surComment', $comment, PDO::PARAM_STR);
			$stmt->bindParam(':fkTraining', $fkTraining, PDO::PARAM_INT);

			//Execute the query
			$stmt->execute();

			header("location: ./index.php?success_survey");
		
			
	}

    /**
     * Display formation in the html
     */
    public function getTrainerFormations($userName)
    {
        //Prepare the select request
        $stmt = $this->dbh->prepare('SELECT forLastName AS former1, fkFormer2 AS form2,idTraining,traName,traDescription,traStartDate,traEndDate,traPeriodicity,traPrice,traLocality,traMinParticipants,traMaxParticipants FROM t_former,t_training, t_user WHERE fkFormer1 = idFormer AND useUsername=? AND idUser=fkUser ORDER BY idTraining');
        //Execute the request
        $stmt->execute(array($userName));
        //Get the result of the request in an array
        $formations = $stmt->fetchAll();
        //return formations
        return $formations;
    }
    /**
     * Display number of registered participants
     */
    public function registeredParticipants($idTraining){
        //Prepare the select request
        $stmt = $this->dbh->prepare("SELECT count(fkStudent) AS Students FROM t_inscription WHERE fkTraining=?");
        //Execute the request
        $stmt->execute(array($idTraining));
        //Get the result of the request in an array
        $partcipants = $stmt->fetch();
        //return formations
        return $partcipants;
    }
}
?>
