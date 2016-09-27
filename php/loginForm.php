<?php
class UserLogin {
	private $username;
	private $password;
	private $level;
	function __construct() {
		if (isset($_POST['submitLoginInfo'])) {
			$this->password = htmlspecialchars($_POST['userPassword']);
			$this->username = htmlspecialchars($_POST['userLogin']);
			$this->level    = htmlspecialchars($_POST['userLevel']);
		}
	}

	public function getUsername() {
		return $this->username;
	}

	public function getPassword() {
		return $this->password;
	}

	public function getLevel() {
		return $this->level;
	}

	public function print() {
		echo "Usuário: $this->username
            <br>Senha: $this->password
            <br>Nivel: $this->level
";
	}
}

$print = new UserLogin;
echo $print->getPassword();