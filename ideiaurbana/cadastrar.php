<?php
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$flag = false;
			$nome = trim($_POST['nome']);
			$snome = trim($_POST['sobreNome']);
			$email = trim($_POST['email']);
			$pass = trim($_POST['password']);
			$cpass = trim($_POST['confirmPassword']);

			$servidor = "localhost";
			$usuario = "root";
			// Computador do Siqueira
			$senha = "";
			// Computador do Guilherme
			// $senha = "guilherme123";
			$bddnome = "cadideia";

			// Conexão MySQL e confirmação
			$conexao = mysqli_connect($servidor,$usuario,$senha,$bddnome);
			if(!$conexao){
				echo "Sem conexao";
			}

			// Verficação de nome
			if ($nome == ''){
				$flag = true;
			}
			if ($snome == ""){
				$flag = true;
			}
			if (filter_var($email,FILTER_VALIDATE_EMAIL) == false){
				$flag = true;
			}
			if ($pass == '' and strlen($pass) >= 5 and strlen($pass) <= 20){
				$flag = true;
			}
			if ($cpass == '' and strlen($pass) >= 5 and strlen($pass) <= 20) {
				$flag = true;
			}

			// Verificação de senha, verficação de banco
			if($pass == $cpass){
				$select = mysqli_query ($conexao,'SELECT * FROM cadastro');

				// Sem erro
				if($flag == false){
					$linha = mysqli_fetch_array($select);
					$pass = hash("sha512",$pass);
					$sql ="INSERT INTO cadastro(email,nome,sobrenome,senha) VALUES ('$email','$nome','$snome','$pass')";
					if(mysqli_query($conexao, $sql)){
						header ("Location: index.html");
					}
					else{
						echo "Erro!";?><br><?php
						echo "Conta $email já está cadastrada!";
					}
				}
			}
			else{
				echo "Confirmacao de senha incorreta";
			}

		}
	?>
