<?php include("blades/top.php") ?>
<?php include("blades/srcEmp.php") ?>
<div class="body-home">
    <div class="topemp">
        <img src="../img/fundoemp.png" class="capaemp">
        <img src="../img/imageemp.png" class="perfilemp">
        <p class="nomeemp">Nome da Empresa</p>
        <div class="funcaoicon"><i class="bi bi-code-slash"></i></div>
        <p class="funcaoemp">Tipo de Empresa</p>

        <div class="editemp"><i class="bi bi-pencil-square"></i></div>
        <p class="editemptxt">Uma breve descrição sobre a empresa</p>

        <button type="submit" class='btnPost' name="btnPost" id="Post" value="0" onclick="funcaoAbrir()">Criar
            Vaga</button>
    </div>
</div>
<div id="container-geral" class="container-create-vagas">
    <button class="btnClose bi bi-x" id="btnClose" style="color: lightgreen; font-size: 45px;"></button>

    <form action="../controller/funcao-create-vagas.php" method="POST">



        <label for="descricao" class="desclbl">Descrição:</label>
        <textarea name="sobre_vagas" id="descricao_vagas"
            style="resize: none; outline: none; overflow:hidden"></textarea>

        <label for="requisitos" class="reqlbl">Pré-requisitos:</label>
        <input type="text" name="pre_requisitos_vagas" class="inputCV"></input>

        <label for="carga" class="carlbl">Carga Horária:</label>
        <input type="text" name="carga_horaria_vagas" class="inputCV2"></input>

        <label for="bene" class="benelbl">Benefícios:</label>
        <input type="text" name="beneficios_vagas" class="inputCV3"></input>

        <label for="tip" class="tiplbl">Tipo de vaga:</label>
        <input type="text" name="tipos_vagas" class="inputCV4"></input>

        <label for="temp" class="templbl">Tempo de Contrato:</label>
        <input type="text" name="tempo_contrato_vagas" class="inputCV5"></input>

        <label for="salah" class="sallbl">Salário:</label>
        <input type="text" name="salario_vagas" class="inputCV6"></input>

        <label for="area" class="arealbl">Área:</label>
        <input type="text" placeholder="Design, Mecânica, Marketing, etc." name="area_vagas" class="inputCV7"></input>

        <button class='postar2' name='btnPostar' type='submit'>Postar</button>
    </form>
</div>


<script src="abrir.js"></script>
<?php include("blades/menuEmp.php") ?>
<?php include("blades/footercomp.php") ?>