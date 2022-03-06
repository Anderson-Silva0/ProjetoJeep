<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeep-Commander</title>
    <link rel="stylesheet" type="text/css" href="estiloo.css">
    <link rel="stylesheet" type="text/css" href="faleconosco.css">
</head>
<body >




    
    <div id="principal">

        <header>
        <nav id="menu">

            <div id="simbolo-carro">

                <img id="foto" src="./imagens/fale-conosco.png">

            </div>


            <ul>
                <a href="index.php" onmousemove="mudaFoto('imagens/commander.png')" onmouseout="mudaFoto('imagens/fale-conosco.png')"><li>Commander</li> </a>
                <a href="renegade.php" onmousemove="mudaFoto('imagens/jeep_renegade.png')" onmouseout="mudaFoto('imagens/fale-conosco.png')"> <li>Renegade</li> </a>
                <a href="wrangler.php" onmousemove="mudaFoto('imagens/wrangler.png')" onmouseout="mudaFoto('imagens/fale-conosco.png')"> <li>Wrangler</li> </a>
                <a href="faleconosco.php" onmousemove="mudafoto('imagens/fale-conosco.png')"> <li>Fale conosco</li> </a>
            </ul>

        </nav>
        </header>

        <hgroup>
            <h1>A revolução em jeeps</h1>
            <h2>Jeep e suas modalidades inovações</h2>
        </hgroup>

        <!-- Início do formulário -->
        
        <div id="formulario">

        <h1 id="titulo">Contato</h1>
        <h2>ATENÇÃO:<br> <i>Após preencher o formulário e enviar, confirme lá em baixo se seus dados estarão corretos.</i></h2>   
        
            
            <form action="" method="POST">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome"><br><br>
    
                <label for="email">E-mail:</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="telefone">Telefone:</label><br>
                <input type="text" id="email" name="email" placeholder="E-mail">&emsp;
                <input type="text" id="telefone" name="telefone" placeholder="Telefone"><br><br>
    
                <label for="assunto">Assunto:</label><br>
                <input type="text" id="assunto" name="assunto" placeholder="Digite seu assunto"><br><br>
    
                <label for="mensagem">Mensagem:</label><br>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea> <br><br>

                <input type="checkbox" id="concordo">
                <label for="concordo" id="concordo">Concordo com os termos de privacidade</label><br><br>
    
                <button id="botao">ENVIAR</button>
            </form>
            
        </div>
    <aside id="laterall">

    Endereços<br><br>

    AV ANTONIO DE GOES, 869 <br>
    PINA, RECIFE - PE<br>
    51110000 <br>
    (81) 3454-1080 <br><br><br>

    AV MAL MASCARENHAS DE MORAES 1801 <br>
    IMBIRIBEIRA, RECIFE - PE <br>
    51170000 <br>
    (81) 3015-7070 <br><br><br>

    RUA JOAO IVO DA SILVA, 220 <br>
    PRADO, RECIFE - PE <br>
    50720155 <br>
    (81) 8712-5819 <br><br><br>

    AV GOV AGAMENON MAG, 2939<br>
    ESPINHEIRO, RECIFE - PE<br>
    52020000<br>
    (81) 4020-4050

    </aside>


    
    <?php
    
    if(isset($_POST['nome']) && !empty($_POST['nome'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);
    
    echo("Seu Nome: ".$nome."<br><br><br>");
    echo("Seu E-mail: ".$email."<br><br><br>");
    echo("Seu Telefone: ".$telefone."<br><br><br>");
    echo("Seu Assunto: ".$assunto."<br><br><br>");
    echo("Sua Mensagem: ".$mensagem);

    }
    
    ?>

    
    <footer id="rodape">

    <a href="https://www.facebook.com" target="_blank">Facebook</a> &nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="https://www.twitter.com" target="_blank">Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="https://www.jeep.com.br" target="_blank">Jeep</a>

    </footer>

    </div>

    <script src="javascript.js"></script>
</body>
</html>