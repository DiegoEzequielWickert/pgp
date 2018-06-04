<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<!--

  estrutura da  tabela cliente



IdCliente` int(11) NOT NULL,<br>
  `IdClassCliente` int(11) NOT NULL,<br>
  `Name` varchar(50) NOT NULL,<br>
  `Email` varchar(50) NOT NULL,<br>
  `CPF_CNPJ` varchar(19) NOT NULL,<br>
  `Password` varchar(50) NOT NULL,<br>
  `Endereco` varchar(100) NOT NULL,<br>
  `Descricao` varchar(100) NOT NULL,<br>
  `Enable` tinyint(1) NOT NULL<br>

-->

---------------------------------------------
<br><br>
    <div class="row">
      <form class="col s12 m6 l6" action="verifica_usuario.php" method="POST">
        <div class="row">
          <div class="input-field col l12 m12 s12">
            <input placeholder= "Nome Completo" name="name" type="text" class="validate" required="required">
            <label for="name">Nome Completo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="email" type="email" required class="validate">
            <label for="email">E-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input  placeholder="CPF ou CNPJ" name="cpf" type="number" required="required" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})" class="validate">
            <label for="cpf">CPF/CNPJ</label>
          </div>
        </div>


        <div class="row">
          <div class="col l12">
            <label>Perfil Cliente</label>
          <select class="browser-default" name='tipo_cliente' required="required">
              <option value="0" selected>Selecione uma opção</option>
              <option value="1">Cliente - Somente Comprar Produtos</option>
              <option value="2">Vendedor - Somente Vender Produtos</option>
              <option value="3">Cliente/Vendedor - Comprar e Vender Produtos</option>
          </select>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col m6 l6 s6">
            <input name="senha" type="password" class="validate" required="Senha Inválida" placeholdeder="Sua Senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            <label for="senha">Senha</label>
          </div>
          <div class="input-field col m6 l6 s6">
            <input name="repassword" type="password" class="validate" placeholdeder="Sua Senha" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            <label for="repassword">Repita sua Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col l12 m12 s12">
            <input placeholder= "Endereço Completo" name="endereco" type="text" class="validate" required>  
            <label for="endereco">Endereço Completo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col l12 m12 s12">
          <textarea name="descricao" class="materialize-textarea"></textarea>
          <label for="descricao">Descrição</label>
          </div>
        </div>
        
        
        <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
    


 


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $('select').formSelect();
      </script>
    </body>
  </html>