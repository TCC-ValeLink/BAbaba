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

        <button class='btnPost' name="btnPost" id="Post" value="0" onclick="funcaoAbrir()">Criar
            postagem</button>
    </div>
</div>
<div id="container-geral" class="container-create-post">
    <button class="btnClose" id="btnClose"><i class="bi bi-x" style="color: lightgreen; font-size: 30px;"></i>
        </button>
        <form action="../controller/funcao-create-post.php" method="POST" enctype="multipart/form-data">
            <div class="top-create-post">
                <div class="foto-profile"></div>
                <div class="nome-profile">Nome</div>
                
            </div>

            <textarea rows="4" columns="50" name="conteudo-postagem" placeholder="O que está planejando?"
                class="conteudo-postagem"></textarea>

            <div class="footer-create-post">
                <label for="file-upload" class="midia-post-create" id="arquivo" name="arquivo">
                    <i class="bi bi-image " style="color: lightgreen; font-size: 24px;"></i>
                </label>
                <input type="file" id="file-upload" class="hidden-input" name="arquivo">
                <button class='postar' name='btnPostar' type='submit'>Postar</button>
            </div>
        </form>
    </div>
    
    <script src="abrir.js"></script>
    <?php include("blades/menuEmp.php") ?>
    <?php include("blades/footercomp.php") ?>