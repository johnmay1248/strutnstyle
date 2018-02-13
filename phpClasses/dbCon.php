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
    # Properties. getters and setters                                      #
    ########################################################################

    /**
     * Get property _host is the database host
     *
     * @return  string
     */ 
    public function get_host()
    {
        return $this->_host;
    }

    /**
     * Set property _host is the database host
     *
     * @param  string  $_host  Property _host is the database host
     *
     * @return  self
     */ 
    public function set_host(string $_host)
    {
        $this->_host = $_host;

        return $this;
    }

    /**
     * Get property _user is the database user
     *
     * @return  string
     */ 
    public function get_user()
    {
        return $this->_user;
    }

    /**
     * Set property _user is the database user
     *
     * @param  string  $_user  Property _user is the database user
     *
     * @return  self
     */ 
    public function set_user(string $_user)
    {
        $this->_user = $_user;

        return $this;
    }

    /**
     * Get property _pass no getter for password
     *
     * 
     */ 


    /**
     * Set property _pass is the database user password
     *
     * @param  string  $_pass  Property _pass is the database user password
     *
     * @return  self
     */ 
    public function set_pass(string $_pass)
    {
        $this->_pass = $_pass;

        return $this;
    }

    /**
     * Get property _db is the database name
     *
     * @return  string
     */ 
    public function get_db()
    {
        return $this->_db;
    }

    /**
     * Set property _db is the database name
     *
     * @param  string  $_db  Property _db is the database name
     *
     * @return  self
     */ 
    public function set_db(string $_db)
    {
        $this->_db = $_db;

        return $this;
    }

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
        #return $this->myconn;
    }

    public function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }

}

