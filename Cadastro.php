<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Cacalcss/Cadastro.css">
    </head>
    <h1 style="color:black;">Anitakus </h1>
    <body background="http://infoteam.com.br/wp-content/uploads/2017/08/Montagem-e-Manuten%C3%A7%C3%A3o-de-Computadores.jpg">
        <form action="conCadastro.php" method="POST">
            <br>
            <br>
    
        <table align="left" border="0">
       
            <tr>
                <br>
                <td>
                <center><h2>Cadastro</h2></center>
                    Nome: <input type="text" name="nome" placeholder="nome" size="20">
                </td>
            </tr>
            <br>
            <tr>
                <td>
                  <br>  E-mail:<input type="text" name="email" placeholder="nome@provedor.com" size="20">       <br>
                </td>
            </tr>
                   <br>
            <tr>
                <td>
                  <br>  Senha: <input type="password" name="senha" placeholder="No minimo 8 caracteres"maxlength="8" >       <br>
                </td>
            </tr>
            
             <tr>
                <td>
                  <br>  Nome da mãe: <input type="password" name="senha" placeholder="Nome da mãe"maxlength="8" >       <br>
                </td>
             </tr>
            <tr>
                <br>
                <br>
                <td align="center">
                    <br>
                    <input type="submit" name="enviar" value="Cadastrar">
                    <input type="reset" name="limpar" value="Apagar">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>

