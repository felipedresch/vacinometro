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
            <h2 class="subtitulo">Rio Grande do Sul - Vale do Caí </h2>
            <!-- <img class="rs" src="rs.png"> -->
        </div>

        <div class="geral">
            <div id="menu" class="menu">
                <h3>Selecione a cidade:</h3>
                <form action="processa.php" method="POST">
                    <select name="cidades">
                        <option value="1" class="cidades">Alto Feliz</option>
                        <option value="2" class="cidades">Barão</option>
                        <option value="3" class="cidades">Bom Princípio</option>
                        <option value="4" class="cidades">Brochier</option>
                        <option value="5" class="cidades">Capela de Santana</option>
                        <option value="6" class="cidades">Feliz</option>
                        <option value="7" class="cidades">Harmonia</option>
                        <option value="8" class="cidades">Linha Nova</option>
                        <option value="9" class="cidades">Maratá</option>
                        <option value="10" class="cidades">Montenegro</option>
                        <option value="11" class="cidades">Pareci Novo</option>
                        <option value="12" class="cidades">Salvador do Sul</option>
                        <option value="13" class="cidades">São José do Hortêncio</option>
                        <option value="14" class="cidades">São Pedro da Serra</option>
                        <option value="15" class="cidades">São Sebastião do Caí</option>
                        <option value="16" class="cidades">São Vendelino</option>
                        <option value="17" class="cidades">Tupandi</option>
                        <option value="18" class="cidades">Vale Real</option>
                    </select>
                    <button class="pesquisar" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
        <div class="rodape">
            <p>Última atualização 04 de agosto de 2021</p>
        </div>
        <img class="zeGotinha " src="zeGotinha.png">
    </div>
</body>

</html>