<?php
/**
 * A class for Connecting to MySql
 * 
 * @author John May
 * @copyright John May 2018
 * @version 1.0.0
 */
class createCon
{
    ########################################################################
    # Properties. public, protected, and private                           #
    ########################################################################
    /**
     * Property _host is the database host
     *
     * @var string
     */
    protected  $_host;

    /**
     * Property _user is the database user
     *
     * @var string
     */
    protected  $_user;

    /**
     * Property _pass is the database user password
     *
     * @var string
     */
    protected  $_pass;

    /**
     * Property _db is the database name
     *
     * @var string
     */
    protected  $_db;

    /**
     * Property myconn is the database connection
     *
     * @var object
     */
    public  $myconn;

    ########################################################################
    # Constructor                                                          #
    ########################################################################
    
    public function __construct()
    {

    }

    ########################################################################
    # METHODS                                                              #
    ########################################################################

    public function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            echo 'Connection established!';}
        return $this->myconn;
    }

    public function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }

}

