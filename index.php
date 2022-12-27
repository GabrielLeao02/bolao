<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolão Banrisul</title>
    <style>
        .item {
            width: 20%;
            height: 2.5rem;
            border-radius: 4px;
            margin-bottom: 4px;
            border: 0px solid transparent;
        }

        .container-inputs {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        label{
            margin-right: 3px;
            color: #FFF;
        }
        h1, h2{
            color: #FFF;
            margin-left: 65px;  
        }
    </style>
</head>

<body style="display: flex; justify-content: center;margin: 0; padding: 0; height: 100vh;  background-color: #3226CD;
    background-image: linear-gradient(193.26deg, #79DAC5 5.64%, #4B82ED 31.55%, #3226CD 79.9%, #823EB8 96.51% );">

    <form action="index.php" style="display: flex; flex-direction: column; width: 80%; height: 100%; justify-content: center; align-items: center;">
        <h1>Bolão Mega da Virada</h1>
        <h2>Conferência de numeros</h2>

        <div class="container-inputs">
            <label for="primeiro_numero">
                1º numero
            </label>
            <input class="item" type="text" name="primeiro_numero" ">
        </div>

        <div class="container-inputs">
            <label for="segundo_numero">
                2º numero
            </label>
            <input class="item" type="text" name="segundo_numero">
        </div>

        <div class="container-inputs">
            <label for="terceiro_numero">3º numero</label>
            <input class="item" type="text" name="terceiro_numero">
        </div>

        <div class="container-inputs">
            <label for="quarto_numero">4º numero</label>
            <input class="item" type="text" name="quarto_numero">
        </div>

        <div class="container-inputs">
            <label for="quinto_numero">5º numero</label>
            <input class="item" type="text" name="quinto_numero">
        </div>

        <div class="container-inputs">
            <label for="sexto_numero">6º numero</label>
            <input class="item" type="text" name="sexto_numero">
        </div>

        <div class="container-inputs" style="margin-left: 65px;">
            <input class="item" type="file" name="file">
        </div>

        <div class="container-inputs" style="margin-left: 65px;">
            <label for=""></label><input class="item" type="submit" value="Enviar">
        </div>

    </form>
    <?php if(!empty($_GET['primeiro_numero'])){
        require_once('path/to/PDFlib.php');
    }
    ?>
</body>

</html>