<?php
    include 'scripts.php';
    $hideVar = "";
    $notHideVar = "hide";

    if (isset($_POST['nome']) 
        && isset($_POST['email'])
        && isset($_POST['telefone'])) {
            
        $hideVar = "hide";
        $notHideVar = "";
        $inputName = $_POST['nome'];
        $inputEmail = $_POST['email'];
        $inputTelf = $_POST['telefone'];
        
        $queryInsert = 
            "INSERT INTO usuario VALUES ('$inputName', '$inputEmail', '$inputTelf')";

        mysqli_query($bdcon, $queryInsert) or die ("Erro " . mysqli_error($bdcon));
        
        mysqli_close($bdcon);
    }
?>

<!DOCTYPE html>
<html lang="en" class="flex">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <title>Landing page</title>
</head>
<body class="flex">
    <header>
        <nav class="flex">
            <p class="item">O que e</p>
            <img src="logo.png">
            <p class="item">Participe</p>
        </nav>
        <section class="concursoPage grid">
            <img class="banner" src="banner.png">
            <div>
                <h1 class="item-left">Concurso natural</h1>
                <p class="item-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et 
                    viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque 
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam 
                    fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed 
                    rhoncus sapien nunc eget.
                </p>
                <button class="participate">Participe</button>
            </div>
        </section>
    </header>
    
    <main class="flex">
        <div>
            <h1 class="item-left">Participe agora mesmo</h1>
            <p class="item-left">Preencha os dados abaixo e particpe da promoçlão especial!</p>
            <p class="item-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aenean euismod bibendum laoreet. Proin gravida dolor sit
                amet lacusLorem ipsum dolor sit amet, consectetur 
                adipiscing elit. Aenean euismod bibendum laoreet. Proin 
                gravida dolor sit amet lacusLorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Aenean euismod bibendum 
                laoreet. Proin gravida dolor sit amet lacusLorem ipsum 
                dolor sit amet, consectetur adipiscing elit. Aenean 
                euismod bibendum laoreet. Proin gravida dolor sit amet 
                lacusLorem ipsum dolor sit amet, consectetur adipiscing 
                elit. Aenean euismod bibendum laoreet. Proin gravida 
                dolor sit amet lacus
            </p>
        </div>
        <div class="">
            <form method="POST" action="" class="form float <?php echo($hideVar) ?>">
                <input type="hidden" name="showInfo" value="ok">
                Nome<input required type="text" name="nome"> <br>
                Email<input required type="text" name="email"> <br>
                Telefone<input required type="text" name="telefone"> <br>
                <span class="grid">
                    <p class="hide">Insira todos os valores</p>
                    <button type="submit" name="submitButton" class="">Enviar</button>
                </span>
            </form>
            <div class="afterSend <?php echo($notHideVar) ?>">
                <h1>Obrigado por participar</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Aenean euismod bibendum laoreet. Proin gravida dolor sit
                    amet lacusLorem ipsum dolor sit amet, consectetur 
                    adipiscing elit. Aenean euismod bibendum laoreet. Proin 
                    gravida dolor sit amet lacusLorem ipsum dolor sit amet, 
                    consectetur adipiscing elit.
                </p>
            </div>
        </div>
        
    </main>

    <footer>

    </footer>
<script src="script.js"></script>
</body>
</html>