<?php
    Class Professor extends CI_Model{

        function login($username, $password){
            $this -> db -> select('*');
            $this -> db -> from('professors');
            $this -> db -> where('professor_username', $username);
            $this -> db -> where('professor_password', $password);
            $this -> db -> limit(1);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1){
                return $query->result();
            }else{
                return false;
            }
        }
    }
?>