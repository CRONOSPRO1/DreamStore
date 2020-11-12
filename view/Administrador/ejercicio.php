<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        text-align: center;
    }

    * {
        margin: 0;
        padding: 0;
    }

    p {
        font-size: 10em;
        color: white;
    }

    .comprobar {
        margin: 10px;
        margin-right: 20%;
        margin-left: 20%;
        padding: 10px;
        text-align: center;
        background-color: blue;
        padding-top: 7%;
        padding-bottom: 7%;
        box-shadow: 1px;

    }

    #com {
        width: 20%;
        padding: 5px;
    }

    label {
        font-size: 25px;
        color: blue;
    }

    .boton {
        color: white;
        font-weight: bold;
        background-color: blue;
        padding: 5px;
        font-size: 14px;
        border-color: none;
        border: none;
    }

    .si {
        color: green;
    }

    .no {
        color: red;
    }
</style>

<body>
    <div class="comprobar">
        <div class="valor">
            <?php
            $caracteres = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-.#!/¿{}+';
            for ($x = 0; $x < 10; $x++) {
                $valor = substr(str_shuffle($caracteres), 0, 8);
            }
            ?>
            <p><?= $valor; ?></p>
        </div>
    </div>
    <div class="resultado">
        <label>Comprueba que no eres un robot</label>
        <br><br>
        <form action="" method="POST">
            <input type="text" name="texto" id="com">
            <input type="submit" class="boton" value="Comprobar">
            <input type="hidden" name="codigo" value="<?= $valor ?>">
        </form>

    </div>
    <?php
    if (isset($_POST['texto']) and !empty($_POST['texto'])) {

        if ($_POST['texto'] == $_POST['codigo']) {
            echo "<span class='si'>Muy bien ,no eres un robot</span>";
            $_POST['texto'] = "";
            $_POST['codigo'] = "";
        } else {
            echo "<span class='no'>Eres un robot</span>";
        }
    }
    ?>
</body>

</html>