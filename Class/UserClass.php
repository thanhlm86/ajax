<?php
include_once('ConnectionClass.php');
class Class_UserClass
{
    public $id;
    public $name;
    public $age;
    public $address;

    public function __construct()
    {
        $connect = new Class_ConnectionClass();
        $connect->connectDatabase();
    }

    public function getAllUser()
    {
        $sql = "select * from ajax order by ajax_id desc";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_object($query)) {
            $userList[] = $row;
        }
        return $userList;
    }
    public function delUser()
    {
        $sql = 'delete from ajax  where ajax_id = ' . $this->id;
        $query = mysql_query($sql);
        return $query;
    }
    public function editUser()
    {
        $sql = "update ajax set name ='".$this->name."', age = '".$this->age."', address = '".$this->address."' where ajax_id = '".$this->id."'";
        $query1 = mysql_query($sql);
    }
    public function addUser()
    {
        $sql = "insert into ajax (name, age, address) value ('$this->name', '$this->age', '$this->address')";
        $query = mysql_query($sql);

    }
}

