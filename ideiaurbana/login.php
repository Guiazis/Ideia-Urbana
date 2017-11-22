	<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$flag = false;
			$email = $_POST['email'];
			$passw = $_POST['password'];

			$usuario = "root";
			$senha = "";

			// senha linux
			//$senha = "guilherme123";

			$servidor = "localhost";
			$bd = "cadideia";

			header('Content-Type: text/html, charset-utf-8');

			$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);

			if(!$conexao){
				echo "Sem conexao";
				$flag = true;
			}
			$select = mysqli_query ($conexao,'SELECT * FROM cadastro');
			$passw = hash("sha512",$passw);

				while($linha = mysqli_fetch_array($select)){
					if($linha["email"] == $email && $linha["senha"] == $passw){
						$id = $linha["email"];
						$nome = $linha["nome"];
						break;
					}
				}
				if($flag == false){

					if(isset($_SESSION['usuario'])){
            			session_destroy();
						session_start();
						$_SESSION['id'] = $id;
						print_r($_SESSION['usuario[1]']);
					}
					else{
						session_start();
						$_SESSION['id'] = $id;
					}
            		header ("Location: home.php");
            		
				}
				else{
					echo"erro ao logar";
				}
		}
    ?>
