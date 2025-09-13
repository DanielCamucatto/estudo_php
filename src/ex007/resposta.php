<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Número Aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <p>
            <?php
            // 1. Define a data: usa a data de ontem para garantir que a cotação já existe na API.
            $dataIni = date('m-d-Y', strtotime('-7 days'));
            $dataFim = date('m-d-Y');

            // 2. Monta a URL da API com a data no formato correto.
            //    O parâmetro `dataCotacao` vai dentro da função `CotacaoDolarDia()`.
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataIni . '\'&@dataFinalCotacao=\'' . $dataFim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // 3. Faz a requisição para a API e suprime os warnings.
            $dadosAPI = json_decode(file_get_contents($url));
            #var_dump($dadosAPI); // Para depuração, pode ser removido depois.

            // 4. Verifica se a requisição falhou (retornou false).
            if ($dadosAPI === false) {
                echo "Erro: Cotação indisponível para o dia selecionado.";
                exit;
            }

            // 6. Verifica se o valor da cotação existe antes de usá-lo.
            if (isset($dadosAPI->value[0]->cotacaoCompra)) {
                $dollar = $dadosAPI->value[0]->cotacaoCompra;
            } else {
                echo "Erro: Não foi possível obter o valor da cotação.";
                exit;
            }

            // 7. Pega o valor do formulário e realiza a conversão.
            $real = $_GET['valor'] ?? 0;
            $conversor = $real / $dollar;

            // 8. Exibe o resultado.
            echo "<h3>Resultado da Conversão:</h3>";
            echo "<p>Cotação utilizada: R$ " . number_format($dollar, 2, ',', '.') . "</p>";
            echo "<p>O valor de R$ " . number_format($real, 2, ',', '.') . " em dólares é: <strong>US$ " . number_format($conversor, 2, ',', '.') . "</strong></p>";
            ?>

        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>