<?php
    // informações do banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "db_contato"; // nome do banco de  dados

    // cria a conexão com o banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_errno)
    {
        echo "Não foi possível conectar ao banco de dados";
    }
    else
    {
        
        if(isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['data']) && isset($_POST['email']) && isset($_POST['password']) )
        {
            
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $data = $_POST['data'];
            $email = $_POST['email'];
            $senha = $_POST['password'];

            
            $sql = "INSERT INTO usuarios (nome, telefone, data, email, senha) 
            VALUES ('$nome', '$telefone', '$data', '$email', '$senha')";

            if($conexao->query($sql))
            {
                echo "<span style='color:green'>Cadastrado com sucesso!</span>";
            }
            else
            {
                echo "Houve um erro ao cadastrar" . $conexao->error;
            }
        }
        else
        {
            echo "";
        }
    }
?>

