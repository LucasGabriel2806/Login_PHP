<?php
//Iniciando minha sessão, sempre que formos trabalhar com sessões, precisamos escrever:
    session_start();


/**
 * Neste arquivo vamos conseguir manipular toda a lógica php
 * pra ver se existe o registro com esse email e senha no bd
 * Se existir ele inicia uma sessão e acessa o sistema, se não,
 * ele retorna para o login e não deixa acessar o nosso sistema
 * 
 */

//print_r na request que são os parametros que estão vindo lá do formulario do meu login
//var_dump($_REQUEST);


//verificação pra ver se foi submitado ou nao o meu formulario e se existe email e senha
//se enviarmos os dados do login, podemos acessar a pagina(inclusive pela url testLogin)
//se não, voltamos pra pagina de login
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //acessa o sistema
    include 'config.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r("Email: " . $email . "<br /> Senha: " . $senha);

    //Verificando se existe um email e senha iguais da tela de login
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    //executando no bd, result tem o resultado
    $result = $conexao->query($sql);

    //print_r($sql);   
    //var_dump($result);

    
    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');    
    }else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
    

}else 
{
    //não acessa
    header('Location: login.php');
}







