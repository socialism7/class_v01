<?php
class Login_model extends CI_Model{
    //cek username dan password admin & co admin
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek username dan password researcher
    function auth_researcher($username,$password){
        $query=$this->db->query("SELECT * FROM researcher WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
}