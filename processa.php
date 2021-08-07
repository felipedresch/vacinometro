<?php
include_once getcwd() . "\db\Configuracao.inc.php";
$indice = $_POST['cidades'];
$query = "SELECT * FROM `vacinometro` WHERE vacinometro.id='$indice'";
$resultado = mysqli_query($conn, $query);
$exibe = mysqli_fetch_assoc($resultado);
echo $exibe['dose1'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Imunização Covid-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <div class="corpo">
        <div class="titulo">
            <h1 class="tituloEscrito">Imunização Covid-19</h1>
            <h2 class="subtitulo">Rio Grande do Sul - Vale do Caí</h2>
        </div>
        <button class="voltar"><a href="index.php">Voltar</a></button>
        <div class="geral">
            
            <p id="nome" class="valores cidadeTitulo"></p>
            <?php
            echo "<h2>".$exibe["nomeCid"]."</h2>";
            ?>
            <table>
                <tr>
                    <th>1ª Dose</th>
                    <th>2ª Dose</th>
                    <th>Dose Única</th>
                    <th>População Total</th>
                </tr>
                <?php
                include_once getcwd() . "\db\Configuracao.inc.php";
                $indice = $_POST['cidades'];
                $query = "SELECT * FROM `vacinometro` WHERE vacinometro.id='$indice'";
                $resultado = mysqli_query($conn, $query);
                $exibe = mysqli_fetch_assoc($resultado);

                echo '<tr>';
                echo '<td id="dose1" class="valores">' . $exibe["dose1"] . '</td>';
                echo '<td id="dose2" class="valores">' . $exibe["dose2"] . '</td>';
                echo '<td id="doseU" class="valores">' . $exibe["doseU"] . '</td>';
                echo '<td id="populacao" class="valores">' . $exibe["populacao"] . '</td>';
                echo '</tr>';
                ?>
            </table>
        </div>
        <div class="rodape">
                    <p>Última atualização 04 de agosto de 2021</p>
                </div>
    </div>
    
</body>

</html>