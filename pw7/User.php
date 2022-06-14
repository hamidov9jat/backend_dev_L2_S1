<?php

//include_once "connect_db.php";
//include_once "cud.inc";
//global $link;

class User
{
    // Properties
    protected string $username;
    protected string $surname;
    protected ?int $age = NULL;

    protected static mysqli|false|null $link;

    // Constructor
    public function __construct($username, $surname)
    {
        echo 'One object of class "' . __CLASS__ . '" was initiated!<br>';

        $this->setName($username);
        $this->setSurname($surname);

        self::$link = self::get_db_connect();


        $query = "INSERT into `users` (Name, Surname)
                     VALUES ('$username', '$surname')";

//        run the query
        mysqli_query(self::$link, $query) or die(mysqli_error(self::$link));

//        connect_to_database();
//
//        add_user($query);
//
//        $res = mysqli_query($link, $query) or die(mysqli_error());


    }

    public static function get_db_connect(){
        // you can change to your host if you want to see changes
        ini_set("display_errors", 1);
        $host = "mysql-nijat-hamidov.alwaysdata.net";
        $user = "214864_l2s2";
        $passwd = "vt0roy_semester2021";
        $bd = "nijat-hamidov_pw7";

        $link = mysqli_connect($host, $user, $passwd, $bd) or die("Couldn't connect");
//        $link = mysqli_connect("host","username","password","database") or die("Couldn't connect");

        //if mysqli_connect_errno
        if (mysqli_connect_errno()) {
            echo "Error No :" . mysqli_connect_errno() . " , Msg : " . mysqli_connect_error() . "<br>";
            exit();
        }
        return $link;
    }

    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     * @return int|null
     */
    public function setAge(?int $age): ?int
    {
        return $this->age = $age;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->username = $name;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }


    /**
     * @return mixed
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname(mixed $surname)
    {
        $this->surname = $surname;
    }

}