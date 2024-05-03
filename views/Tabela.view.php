<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor de Rede WiFi</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="icon" href="images/favicon.ico">
</head>

<body>
    <header>
        <h1>
            <img class="logo" src="images/logo.png" alt="Sinal Logo">
            Monitor de Rede WIFI
        </h1>
        <div class=" header-menu">
            <a class="headerbutton active" href="tabela.html">Tabela</a>
            <a class="headerbutton" href="grafico.html">Gráficos</a>
            <a class="headerbutton" href="mapa.html">Mapa de Calor</a>
        </div>
    </header>
    <hr>

    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <p id="confirmationMessage"></p>
            <div>
                <button id="confirmYes">SIM</button>
                <button id="confirmNo">NÃO</button>
            </div>
        </div>
    </div>

    <button id="btnModal" class="botao-azul addComodo">ADICIONAR cômodo</button>
    <div id="modalForm" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modal-title">Adicionar Cômodo</h2>
            <div id="errorDiv" style="display: none;">
                <p id="errorMessage">
                </p>
            </div>
            <form onsubmit="adicionarComodo(event)">
                <div>
                    <label for="local">Nome do Ambiente: *</label>
                    <input id="local" type="text" required>
                </div>
                <div>
                    <label for="nivel2">Nível 2,4GHZ (DBM): *</label>
                    <input id="nivel2" type="number" step="0.01">
                </div>
                <div>
                    <label for="nivel5">Nível 5GHZ (DBM):</label>
                    <input id="nivel5" type="number" step="0.01">
                </div>
                <div>
                    <label for="velocidade2">Velocidade 2,4GHZ (Mbps): *</label>
                    <input id="velocidade2" type="number" step="0.01">
                </div>
                <div>
                    <label for="velocidade5">Velocidade 5GHZ (Mbps):</label>
                    <input id="velocidade5" type="number" step="0.01">
                </div>
                <div>
                    <label for="interferencia">Interferência:</label>
                    <input id="interferencia" type="number" step="0.01">
                </div>
                <span class="information">* Campos obrigatórios <br>
                    Caso os campos de nível e velocidade 5G não sejam preenchidos, será considerado que a rede não possui esse sinal.</span>
                <input type="hidden" id="editIndex">
                <button class="botao-azul add">SALVAR CÔMODO</button>
        </div>
    </div>
    <table id="comodosTable">
        <thead>
            <tr>
                <th scope="col">Local</th>
                <th scope="col">Nível 2,4GHZ (DBM)</th>
                <th scope="col">Nível 5GHZ (DBM)</th>
                <th scope="col">Velocidade 2,4GHZ (Mbps)</th>
                <th scope="col">Velocidade 5GHZ (Mbps)</th>
                <th scope="col">Interferência</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script src="js/tabela.js"></script>
</body>