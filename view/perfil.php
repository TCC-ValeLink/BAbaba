<?php include("blades/top.php") ?>
<?php include("blades/src.php") ?>
<div class="body-home">
    <button type="submit" class="btnCreateCur" onclick="funcaoAbrir()">Criar currículo</button>
    <?php include("../controller/funcao-select-user.php")?>
    
    
    <div id="container-geral" class="container-create-curriculo">
        <form action="../controller/create-curriculo.php" method="POST">
            <button type="submit" class="btnCloseCur bi bi-x" id="btnClose"
            style="color: lightgreen; font-size: 30px;"></button>
            
            <?php include("../controller/select-top-curriculo.php") ?>

            <label for="objetivo">
                <h2>Objetivo:</h2>
            </label><br>
            <textarea id="objetivo" class="conteudo-curriculo" name="objetivo" required></textarea><br><br>

            <label for="historico" class='cur'>
                <h2>Histórico Profissional:</h2>
            </label><br>
            <textarea id="historico" class="conteudo-curriculo" name="historico" required></textarea><br><br>

            <label for="formacao" class='cur'>
                <h2>Formação Acadêmica:</h2>
            </label><br>
            <textarea id="formacao" class="conteudo-curriculo" name="formacao" required></textarea><br><br>

            <label for="habilidades" class='cur'>
                <h2>Habilidades/Competências:</h2>
            </label><br>
            <textarea id="habilidades" name="habilidades" class="conteudo-curriculo" required></textarea><br><br>
            <input type="submit" class="btnCurriculo" value="Criar Currículo">
        </form>
    </div>
</div>
<?php include("blades/followemp.php") ?>
<script src="abrir.js"></script>
<?php include("blades/menu.php") ?>
<?php include("blades/footercomp.php") ?>