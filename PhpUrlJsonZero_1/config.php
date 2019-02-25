<?php

session_start();

class Usuario {

    private $user;

    public function Consulta() {
        $url = "https://jsonplaceholder.typicode.com/users";
        $json = file_get_contents($url);
        $this->user = json_decode($json);
    }

    public function Verificar($usuario) {

        foreach ($this->user as $chave) {
            
            if ($chave->username == $usuario) {

                $_SESSION['email'] = $chave->email;
            }
        }
        return $_SESSION['email'];
    }

    
    
    
    
    public function VerificarWebSites() {

        foreach ($this->user as $chave) {

            echo $_SESSION['website'] = $chave->website, "<br/>";            
        }
        return $_SESSION['website'];
    }
    
    

    public function VerificarHemisferioSul() {

        $quantidadeSul = 0;
        foreach ($this->user as $chave) {

            if ($chave->address->geo->lat < 0) {
                            
                $quantidadeSul++;
            }
        }
        return $quantidadeSul;
    }

}
