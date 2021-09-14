<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin-top:10px;
        }
        input::placeholder {
            color: gray;
        }
    </style>
    
</head>
<body>
    <details>
        <summary><b>Tempo de vida</b><br></summary>
        <form method="POST">
            <input type="text" name="name" placeholder="Nome" required><br>
            <input type="number" name="age" placeholder="Idade" required><br>
            <input type="submit" name="submit1">
        </form>

        <?php 
            if(isset($_POST["submit1"]))
            {
                $name = $_POST["name"];
                $age = $_POST["age"];
                $months = $age * 12;
                $days = $months * 30;
                $hours = $days * 24;
                
                echo '<p>'.$name.' você tem '.$age.' anos, '.$months.' meses, '.$days.' dias, '.$hours.' horas de vida.'.'</p>';
            }else 
            {
                echo '<p>'.'Você não digitou nada ainda.'.'</p>';
            }
        ?>
       
    </details>
    
    <details>
        <summary><b>Média de 2 números</b></summary>
            <form method="POST">
                Digite o primeiro número:<br>
                <input type="number" name="n1" placeholder="Primeiro número" required><br>
                Digite o segundo número:<br>
                <input type="number" name="n2" placeholder="Segundo número" required><br>
                <input type="submit" name="submit2">
            </form>
        
        <?php
            if(isset($_GET["submit2"]))
            {
                $n1 = $_GET["n1"];
                $n2 = $_GET["n2"];
                
                if ($n1<=10 && $n1>=0 && $n2<=10 && $n2>=0)
                {
                    $media = ($n1 + $n2) / 2;

                    echo "A média das notas é: ".$m;
                }else
                {
                    echo "O valor informado é inválido";
                }
            }else
            {
                echo "Não foi digitado nada";
            }
        ?>
    </details>

    <details>
        <summary><b>Tempo de vida do cachorro</b></summary>
    
        <form method="POST">
            <label>Nome do cacachorro</label><br>
            <input type="text" name="name" placeholder="Nome"><br>
            
            <label>Idade do cachorro</label><br>
            <input type="number" name="age" placeholder="Idade"><br>

            <input type="submit" name="submit3" id="btn"><br>
        </form>
    
        <?php
            if(isset($_POST["submit3"]))
            {
                $name = $_POST["name"];
                $age = $_POST["age"];
                $AgeDog = $age*7;
                $days = $AgeDog*365;
                $hours = $days*24;
                $months = $days/12;

                echo 
                    '<p class="content">'.
                        $name.' tem '.'<strong>'.$AgeDog.'</strong>'.' anos, '.'<strong>'.$months.'</strong>'.' meses, '.'<strong>'.$days.'</strong>'.' dias, '.'<strong>'.$hours.'</strong>'.' horas de vida.'.
                    '</p>';
            }else 
            {
                echo 'Não foi digitado nada';
            }
        ?>
    </details>

    <details>
        <summary><b>Dará sua idade daqui algumas decadas</b></summary>
        <form method="post">
            <input type="text" name="name" placeholder="Nome"><br>
            <input type="number" name="age" placeholder="Idade"><br>
            <input type="submit" name="submit4" value="Enviar"><br>
        </form>
        <?php 
            if(isset($_POST["submit4"]))
            {
                $name = $_POST["name"];
                $age = $_POST["age"];  
                $dec1 = $age + 10;
                $dec2 = $dec1 + 10;
                $dec3 = $dec2 + 10;
                $dec4 = $dec3 + 10;
                $dec5 = $dec4 + 10;

                echo $name.' você tem '.$age.' anos e terá '.$dec1.' anos daqui 1 década, '.$dec2.' anos daqui 2 décadas, '.$dec3.' anos daqui 3 décadas, '.$dec4.' anos daqui 4 décadas, '.$dec5.' anos daqui 5 décadas.';
            }else 
            {
                echo '<p>'.'Você não digitou nada ainda.'.'</p>';
            }
        ?>
    </details>

    <details>
        <summary><b>Altura máxima aproximadamente do filho</b></summary>
        <form method="POST">
            Altura do Pai<br>
            <input type="text" name="AltPai" placeholder="Somente Números"><br>

            Altura da mãe: <br>
            <input type="text" name="AltMae" placeholder="Somente Números"><br>
            <input type="submit" name="submit5" value="Enviar"><br>
        </form>
        <?php 
            if(isset($_POST["submit5"]))
            {
                $AltPai = $_POST["AltPai"];
                $AltMae = $_POST["AltMae"];
                $total = ($AltMae + $AltPai) / 2 + 0.12;
                
                echo 'A altura máxima do seu filho será de aproximadamente de: '.$total;
            }else 
            {
                echo '<p>'.'Você não digitou nada ainda.'.'</p>';
            }
        ?>
    </details>
</body>
</html>
