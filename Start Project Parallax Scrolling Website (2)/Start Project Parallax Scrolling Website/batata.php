<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inserção</title>
    </style>
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: #001f27;
            min-height: 100vh;
            overflow-x: hidden;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form {
            background: rgba(0, 20, 26, 0.95);
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            max-width: 600px;
            width: 100%;
        }
        form h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            background: #081b29;
            color: #fff;
        }
        input[type="submit"] {
            background: #48ffdd;
            border: 2px solid #48ffdd;
            border-radius: 8px;
            color: #081b29;
            font-size: 16px;
            font-weight: 600;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #359381;
            border-color: #359381;
        }
        select {
            appearance: none;
        }
        select::-ms-expand {
            display: none;
        }
    </style>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>INSIRA OS DADOS:</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br>

        <label for="cargo">Cargo:</label><br>
        <input type="text" id="cargo" name="cargo"><br>

        <label for="formato_rosto">Formato do Rosto:</label><br>
        <select id="formato_rosto" name="formato_rosto">
            <option value="Oval (D)">Oval</option>
            <option value="Quadrado (R)">Quadrado</option>
        </select><br>

        <label for="sardas">Sardas:</label><br>
        <select id="sardas" name="sardas">
            <option value="Sim (D)">Sim</option>
            <option value="Não (R)">Não</option>
        </select><br>

        <label for="polidatico">Polidático:</label><br>
        <select id="polidatico" name="polidatico">
            <option value="Sim (D)">Sim</option>
            <option value="Não (R)">Não</option>
        </select><br>

        <label for="lateralidade">Lateralidade</label><br>
        <select id="lateralidade" name="lateralidade">
            <option value="Destro (D)">Destro</option>
            <option value="Canhoto (R)">Canhoto</option>
        </select><br>

        <label for="lodulo_orelha">Lóbulo da Orelha:</label><br>
        <select id="lodulo_orelha" name="lodulo_orelha">
            <option value="Colado (D)">Colado</option>
            <option value="Descolado (R)">Descolado</option>
        </select><br>
            
        <label for="enrolar_lingua">Enrolar a Língua:</label><br>
        <select id="enrolar_lingua" name="enrolar_lingua">
            <option value="Sim (D)">Sim</option>
            <option value="Não (R)">Não</option>
        </select><br>

        <label for="polegar">Polegar:</label><br>
        <select id="polegar" name="polegar">
            <option value="Reto (D)">Reto</option>
            <option value="Carombiro (R)">Carombiro</option>
        </select><br>


        <label for="cruzar_maos">Cruzar as Mãos:</label><br>
        <select id="cruzar_maos" name="cruzar_maos">
            <option value="Direita (D)">Direita</option>
            <option value="Esquerda (R)">Esquerda</option>
        </select><br>

        <label for="cruzar_bracos">Cruzar os Braços:</label><br>
            <select id="cruzar_bracos" name="cruzar_bracos">
                <option value="Direita (D)">Direita</option>
                <option value="Esquerda (R)">Esquerda</option>
            </select><br>


        <label for="cor_cabelo">Cor do Cabelo:</label><br>
        <select id="cor_cabelo" name="cor_cabelo">
            <option value="Escuro (D)">Escuro</option>
            <option value="Claro (R)">Claro</option>
        </select><br>

        <label for="textura_cabelo">Textura do Cabelo:</label><br>
        <select id="textura_cabelo" name="textura_cabelo">
            <option value="Enrolado (D)">Enrolado</option>
            <option value="Liso (R)">Liso</option>
        </select><br>

        <label for="cor_olhos">Cor dos Olhos:</label><br>
        <select id="cor_olhos" name="cor_olhos">
            <option value="Escuro (D)">Escuro</option>
            <option value="Claro (R)">Claro</option>
        </select><br>


        <label for="nariz">Nariz:</label><br>
        <select id="nariz" name="nariz">
            <option value="Equilino (D)">Equilino</option>
            <option value="Empinado (R)">Empinado</option>
        </select><br>

        <label for="queixo_furo">Queixo Com Furo:</label><br>
            <select id="queixo_furo" name="queixo_furo">
                <option value="Sim (D)">Sim</option>
                <option value="Não (R)">Não</option>
            </select><br>

        <label for="covinha">Covinha:</label><br>
            <select id="covinha" name="covinha">
                 <option value="Sim (D)">Sim</option>
                 <option value="Não (R)">Não</option>
            </select><br>

        <label for="tipo_sangue">Tipo Sanguíneo:</label><br>
            <select id="tipo_sangue" name="tipo_sangue">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
            </select><br><br>

        <input type="submit" value="Enviar"> 

            </form>
        </div>
    </div>

    <div class="right-side">
        
    </div>

    <?php
    // Se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conexão com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "BD_BIO";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Extrair os dados do formulário
            $nome = $_POST['nome'];
            $sexo = $_POST['sexo'];
            $cargo = $_POST['cargo'];
            $formato_rosto = $_POST['formato_rosto'];
            $sardas = $_POST['sardas'];
            $polidatico = $_POST['polidatico'];
            $lodulo_orelha = $_POST['lodulo_orelha'];
            $enrolar_lingua = $_POST['enrolar_lingua'];
            $polegar = $_POST['polegar'];
            $cruzar_maos = $_POST['cruzar_maos'];
            $cruzar_bracos = $_POST['cruzar_bracos'];
            $cor_cabelo = $_POST['cor_cabelo'];
            $textura_cabelo = $_POST['textura_cabelo'];
            $cor_olhos = $_POST['cor_olhos'];
            $nariz = $_POST['nariz'];
            $queixo_furo = $_POST['queixo_furo'];
            $covinha = $_POST['covinha'];
            $tipo_sangue = $_POST['tipo_sangue'];
            $lateralidade = $_POST['lateralidade'];

            // Preparar e executar a consulta SQL para inserir os dados
            $sql = "INSERT INTO ATRIBUTOS (NOME, SEXO, CARGO, FORMATO_ROSTO, SARDAS, POLIDATICO, LODULO_ORELHA, ENROLAR_LINGUA, POLEGAR, CRUZAR_MÃOS, CRUZAR_BRAÇOS, COR_CABELO, TEXTURA_CABELO, COR_OLHOS, NARIZ, QUEIXO_FURO, COVINHA, TIPO_SANGUE, LATERALIDADE) VALUES (:nome, :sexo, :cargo, :formato_rosto, :sardas, :polidatico, :lodulo_orelha, :enrolar_lingua, :polegar, :cruzar_maos, :cruzar_bracos, :cor_cabelo, :textura_cabelo, :cor_olhos, :nariz, :queixo_furo, :covinha, :tipo_sangue, :lateralidade )";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sexo', $sexo);
            $stmt->bindParam(':cargo', $cargo);
            $stmt->bindParam(':formato_rosto', $formato_rosto);
            $stmt->bindParam(':sardas', $sardas);
            $stmt->bindParam(':polidatico', $polidatico);
            $stmt->bindParam(':lateralidade', $lateralidade);
            $stmt->bindParam(':lodulo_orelha', $lodulo_orelha);
            $stmt->bindParam(':enrolar_lingua', $enrolar_lingua);
            $stmt->bindParam(':polegar', $polegar);
            $stmt->bindParam(':cruzar_maos', $cruzar_maos);
            $stmt->bindParam(':cruzar_bracos', $cruzar_bracos);
            $stmt->bindParam(':cor_cabelo', $cor_cabelo);
            $stmt->bindParam(':textura_cabelo', $textura_cabelo);
            $stmt->bindParam(':cor_olhos', $cor_olhos);
            $stmt->bindParam(':nariz', $nariz);
            $stmt->bindParam(':queixo_furo', $queixo_furo);
            $stmt->bindParam(':covinha', $covinha);
            $stmt->bindParam(':tipo_sangue', $tipo_sangue);
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        // Fechar conexão
        $conn = null;
    }
    ?>
</body>
</html>
