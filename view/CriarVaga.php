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

        <button type="submit" class='btnPost' name="btnPost" id="Post" value="0" onclick="funcaoVaga()">Criar
            Vaga</button>
    </div>
</div>
<div id="container-create-vagas" class="container-create-vagas">
        <form action="../controller/funcao-create-vaga.php" method="POST" enctype="multipart/form-data">

            <label for="descricao_vagas" class="desclbl">Descrição:</label>
            <textarea name="descricao" id="descricao_vagas"></textarea>

            <label for="requisitos" class="reqlbl">Pré-requisitos:</label>
            <input type="text" id="requisitos" class="inputCV"></input>

            <label for="carga" class="carlbl">Carga Horária:</label>
            <input type="text" id="carga" class="inputCV2"></input>

            <label for="bene" class="benelbl">Benefícios:</label>
            <input type="text" id="bene" class="inputCV3"></input>

            <label for="tip" class="tiplbl">Tipo de vaga:</label>
            <input type="text" id="tip" class="inputCV4"></input>

            <label for="temp" class="templbl">Tempo de Contrato:</label>
            <input type="text" id="temp" class="inputCV5"></input>

            <label for="salah" class="sallbl">Salário:</label>
            <input type="text" id="salah" class="inputCV6"></input>
        </form>
    </div>
    
<script>
    function funcaoVaga() {
        document.getElementById("container-create-vagas").style.display = "block";
    }

    function closeModal() {
        document.getElementById("container-create-vagas").style.display = "none";
    }

    // Fecha o modal ao clicar fora dele
    window.onclick = function (event) {
        const modal = document.getElementById("btnClose");
        if (event.target == modal) {
            closeModal();
        }
    }
</script>

    <?php include("blades/menuEmp.php") ?>
    <?php include("blades/footercomp.php") ?>