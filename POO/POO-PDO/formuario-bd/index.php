<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login:</title>

<style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
        .horizontal div{
            padding: 40px;
            border: 3px solid lightgrey;
            justify-content: center;
        
        }
    </style>
    
</head>
<body>
    <div class="horizontal"> <div>

        <h1>Formulario:</h1>

            <form action="insertion.php" name="cadastro" method="post">
                <label for="sl" class="titulo" >Sistema de login:</label> <br><br>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required="required" autofocus> <br><br>

                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" required="required" autofocus><br><br>


                <!--Botao-->
                <input type="submit" name="enviar" value="ENVIAR" id="enviar">
                <input type="reset" name="resetar"><br><br>

            </form>

           
            <?php
                include_once('connection.php');
                
            ?>
        

</body>
</html>