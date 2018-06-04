<?php
    session_start(); //inicializa o uso de  sessão
    $_SESSION['erro'] = " ";
    $erro = 100;

    if($_SERVER['REQUEST_METHOD']=='POST'){
        // caso tiver sido enviado  ele sai do  erro  100,  começa  a verificar  tudo de novo
        $erro = 0;
        
            
        if(isset($_POST['enviar'])){ // se os campos  foram preenchidos
            
            if(isset($_POST['name'])){
                $name =  $_POST['name']; 
            }else {
                $erro = 1;
                $_SESSION['erro'] .= "Campo nome não preencido" ;
            }
            if(isset($_POST['tipo_cliente'])){
                $tipo_cliente=   $_POST['tipo_cliente']; 
            }else{
                $erro = 2;
                $_SESSION['erro'] .= "Tipo de  cliente não selecionado" ;
            }

            if(isset($_POST['email'])){
                $email =   $_POST['email']; 
                $sql = "select *s from cliente  where Email = '".$email."'";
                $resultado = mysqli_query($mysqli, $sql); 
                
                //$cont = mysql_num_rows($resultado);
                if(!$resultado){
                    echo "E-mail já existe";
                    $_SESSION['erro'] =  "Email já cadastrdo";
                    exit();                   

                }      
            
          
            }else $erro = 3;
                $_SESSION['erro'] .= "Campo de  Email não preenchido" ;
            
            if(isset($_POST['cpf'])){
                $cpf_cnpj =  $_POST['cpf']; 
            }else $erro = 4;
                $_SESSION['erro'] .= "CPF ou CNPJ não informado;" ;
            
            if(isset($_POST['senha'])){
                $senha =   $_POST['senha']; 
                $senha = md5($senha);
            }else $erro = 5;
                $_SESSION['erro'] .= "É preciso fornecer uma senha para validar  seu cadastro" ;
            
            if(isset($_POST['endereco'])){
                $endereco =   $_POST['endereco']; 
            }else $erro = 6;
                $_SESSION['erro'] .= "Campo nome não preencido" ;
            
            if(isset($_POST['descricao'])){
                $descricao =   $_POST['descricao']; 
            }else{
                $descricao= '';
            }
        
            if($erro == 0){
                include('conecta_db.php');
                $sql = "INSERT INTO cliente( IdClassCliente, Name, Email, CPF_CNPJ, Password, Endereco, Descricao, Enable) VALUES
                ('".$tipo_cliente."','".$name."','".$email."','".$cpf_cnpj."','".$senha."','". $endereco."','".$descricao."', 1)";
                echo "SQL: ".$sql;
                $query = mysqli_query($mysqli, $sql);
                if($query){
                    header('Location:cliente.php?sucess=yes'); // redireciona para o  Iindex

                }else{
                    echo " ERRO CATASTROFICO";
                }
                
            }
            
        }


    }else{
        echo("Nennhum formulário foi enviado<br>");
        header('Location:cliente.php?error='.$erro); // redireciona para o  Iindex
    }


?>