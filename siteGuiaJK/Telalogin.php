<?php
include_once("conexao.php");
if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result)< 1){
       
    }else{
       
        header("location: home.php");
    }
   
}else{

}

?>
 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <title>Tela de Login</title>
</head>
<body>
    <form action="TelaLogin.php" method="post">
    
        <h1>LOGIN</h1>
        <label for="email"></label><br>
        <input type="text" name="email" placeholder="Insira o seu E-mail"><img id="imgEmail" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAlRJREFUSEvt1j2IE0EYBuD32yRmN4eQzM6FaxRRsTiQE6zsVBC0sFAObAQV9AQR7A5BS0UOOxX8ac5KBVEQBAsLrbQQRAW9SvxDCCSzCehl11yyn26Sg3iXZGY14Szcdt55n53d2R/CCh20Qi5iw8xs+Z43ScB4dNIMvHOEuEtEHGcRseCqUtsIuAlg0xJkLmQ+NCLlC1PcGPZLpZ0gegRgVY/yeQZ2ZVz3uQluBHOhMBKkUp8BCE3pF1uIjURU0+FGsK/UMQA3dGXtez6Zcd17uqwpfA3AcV1ZNE7ARdt1p3VZU/g6gCldWXOc+aoj5Qld1gwulc6A6JyurOkSnc4IMaPLGsE/lBoPgbe6suZjnUhscLLZD7qsERyV+ErNAjjcr5CBSxnXPaVD23vBJBbdOk77SkVvqL09ZszaQhwlotCk0XjFrX3DFCh1kIj2MXPrmSYqWMy301I+MAEXM7HgOMW67L8NV5VaYwH7GdgMYB2Yk7+tiKj+a+N9JObXIXA/I+XXv1pxrVyeaIThBQB7dEWd48z8MAFMp6Wc6zWv56UOPG+Kma8ASMVBO7I1EB1xhLjVbX5XuKrUAQLu/CHYOS0kYLftuo+Xdi2DvxUK+WQq9QmAPQA4qvDshYW1NDY239m3DK563mViPjkgtFXDfNaR8nxf2FeqCEAOEiail7YQW3vCQaWynhuN94NEF7vsRmM15fPfu7652j9zz4YBW0QTaSHedIX9YnE7LOvJMGCE4Q5ndPRpV7hcLmften3LMOAgmXyVy+Uq/z8Sw7i6fTt/AuAwuh+/dV6LAAAAAElFTkSuQmCC"/><br>
        <label for="password"></label><br>
        <input type="password" name="senha" placeholder="Insira sua Senha"> 
        <img id="imgSenha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAfdJREFUSEvtlkFr1FAUhc9JpmPSgSmTl1QRFFEQt1bdKdRF3dUfIIJbcaHQhaC4EroUdSUuRfoDBEEEQWldFoo7FwoKhZZJXuyibYI1uZqhhUHTyZuO0EUnu8c793z33vdyE2KfHu4TF32DRaS2qfVZ27LOFUlnWbY46vtLJLN+ijAGiwhTre8JeZfAWDeEwI8ceDiq1BNTuDE4iaKXIK/3Mv6T0GNHqRkTuBE4ieNrEJnbNvwuIjO/6vX5Yl3b2pok8AjA8WJNkSnH999Vwc3AWn8FcLJo6c+RkdPNZjPqNl5vt4/Ytv0FQAPAR1epSwOD07W1U5JlhSkg8sD1/dky0ySOZyFyH0DuZNkYx8fXK46ld26bcXyRIgudNpLTjue9LotIw/CqWNarYi/P8wuNIFgcCJyE4SQs633HJM8vu0HwobRiQ91ObOUZHxzwRhhO0LavUOQMgBvbLXoB4NsuZ3eiWyfkZyHfNlqtpTJ9aatTre8IYDyFel4i8qbjec//1pSCkyhqgwyq3kXD/WVXqWNmYK3F0NRI5ir1T4HlFQ/BRg3dXTRsdWful87d4eU6CJdrFcDhAQvdCV9xlTpqNDLTKLot5NP/ASZ5y/G8Z0bgQrQRhuctcgrkob0kIGRaI9/UW61Pxp/FvYD6jan89enX0FT/GwfD2h9sTumdAAAAAElFTkSuQmCC"/>
        <br>
        <p><a href="https://www.seusite.com">Esqueceu sua senha?</a></p>
        <input type="submit" name="submit" value="Login">

        <div class="register-link">
            <p>Não tem uma conta? <a href="TelaCadastro.php">cadastre-se</a></p>
        </div>

    
    </form>
</body>
</html>


