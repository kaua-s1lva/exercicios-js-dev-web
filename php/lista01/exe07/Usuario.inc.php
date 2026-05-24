<?php 
class Usuario {
    private DateTime $dataLogin;

    public function __construct(
        public String $nome,
        public String $login,
        public String $senha
    ) {}

    public function validarSenha(String $senha):bool {
        if (strlen($senha) == 6 || isset($senha)) return true;
        return false;
    }

    public function validarLogin(String $login):bool {
        if (str_contains($login, "@") && str_ends_with($login, ".br")) return true;
        return false;
    }

    public function efetuarLogin(String $login, String $senha): bool {

        $this->validarLogin($login);
        $this->validarSenha($senha);

        if($login == $this->login && $senha == $this->senha) {
            $this->dataLogin = new DateTime();
            return true;   
        }
            
        return false;
    }

    public function getDataLogin():DateTime {
        return $this->dataLogin;
    }
}

?>