<?php
class Baza {
    private $polaczenie; 
    public function __construct($serwer, $user, $pass, $baza)
    {
        $this->polaczenie = new mysqli($serwer, $user, $pass, $baza);
        if ($this->polaczenie->connect_errno) 
        {
            echo "Błąd połączenia z bazą danych: ".$this->polaczenie->connect_errno;
            exit();
        }
    }
    public function insert($sql) {
        if( $this->polaczenie->query($sql) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function check_username_email($UserName,$Email)
    {
        $istnieje=true;
        $sql="SELECT * FROM users WHERE UserName='$UserName' OR Email='$Email'";
        if($rezultat=$this->polaczenie->query($sql))
        {
            $ile_rezultatow=$rezultat->num_rows;
            if($ile_rezultatow==1)
            {
               $istnieje=false;
            }
        }
        return $istnieje;
        
    }
    public function check_email($Email)
    {
        $istnieje=false;
        $sql="SELECT * FROM users WHERE Email='$Email'";
        if($rezultat=$this->polaczenie->query($sql))
        {
            $ile_rezultatow=$rezultat->num_rows;
            if($ile_rezultatow==1)
            {
               $istnieje=true;
            }
        }
        return $istnieje;
        
    }
    public function check_user($UserName,$HashPassword)
    {
        $istnieje=false;
        $sql="SELECT * FROM users WHERE UserName='$UserName' AND HashPassword='$HashPassword'";
        if($rezultat=$this->polaczenie->query($sql))
        {
            $ile_rezultatow=$rezultat->num_rows;
            if($ile_rezultatow==1)
            {
               $istnieje=true;
            }
        }
        return $istnieje;
    }
    public function delete($sql) 
    {
        if( $this->polaczenie->query($sql) )
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function select($sql,$pole)
    {
        $tresc = "";
        if ($result = $this->polaczenie->query($sql)) {
        $ilepol = count($pole); 
        while ($row = $result->fetch_object()) {
            for ($i = 0; $i < $ilepol; $i++) {
                $p = $pole[$i];
                $tresc.= $row->$p;
            }
        }
        $result->close(); 
        }
    return $tresc;
    }
}
?>
