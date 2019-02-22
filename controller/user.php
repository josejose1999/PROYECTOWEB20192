<?php
include 'model/db.php';
class User extends DB{
    private $nombre;
    private $username;
    public function userExists($user, $pass,$tipo){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass   AND id_tipo = :tipo ' );
        $query->execute(['user' => $user, 'pass' => $md5pass , 'tipo' => $tipo]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['username'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }
}
?>