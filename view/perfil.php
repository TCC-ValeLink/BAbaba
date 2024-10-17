<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>
    <div class="body-home">
    <?php include("../controller/funcao-select-user.php") ?>
    <nav class="nav-user">
        <a onclick="showTab('pessoal-info')">Informações Pessoais</a>
        <a onclick="showTab('pessoal-ende')">Endereço</a>
        <a href="#">Outros Dados</a>
        <a href="#">Curriculo</a>
        <span></span>
    </nav>

   <div class="user-update tab" id="pessoal-info">
            <form action="" method="POST">
               <p id="lblus1">Nome Completo</p>
               <input type="text" class="inputnameus" name="nome">
               <p id="lblus2">Data de Nascimento</p>
               <input type="date" class="inputdataus" name="data">


               <p id="lblus3">RG</p>
               <input type="text" class="inputrgus" name="RG">
               <p id="lblus4">CPF</p>
               <input type="text" class="inputcpfus" name="CPF">
               <p id="lblus5">Estado Cívil</p>
               <select class="cmbbxus1" name="Estado_civil">
                    <option value="S">Solteiro</option>
                    <option value="C">Casado</option>
                    <option value="V">Viúvo</option>
                    <option value="SP">Separado</option>
                    <option value="D">Divorciado</option>
                </select>

               <p id="lblus6">Possui algum tipo de deficiência?</p>
               <select class="cmbbxus2" name="def">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
               </select>
               <p id="lblus7">Especifique</p>
               <input type="text" class="inputespecus" name="espec">

               <p id="lblus8">Sexo</p>
               <input type="radio" name="sex" id="Mas" value="Masculino" class="radious">
               <label for="Mas" class="txt_rd_us">Masculino</label>  
               <input type="radio" name="sex" id="Fem" value="Feminino" class="radio2us">
               <label for="Fem" class="txt_rd2_us">Feminino</label>
               <input type="radio" name="sex" id="Out" value="Outro" class="radio3us">
               <label for="Out" class="txt_rd3_us">Outro</label>
               <input type="radio" name="sex" id="Pre" value="Prefiro não dizer" class="radio4us">
               <label for="Pre" class="txt_rd4_us">Prefiro não dizer</label><br>

               <button type="submit" name="btnCadastro" class="btnus" style="    
               background-color:#01E581; 
               color: #fff;
               width:15rem;
               height: 3rem; 
               border-radius:8px; 
               font-size: 2rem; 
               display: flex;
               align-items:center;
               justify-content: center; 
               margin-top:26rem;
               margin-left: 50rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Alterar</button>
            </form>
   </div>

   <div class="tab" id="pessoal-ende">
        <form action="" method="POST">
               <p id="lblus21">Cidade</p>
               <input type="text" class="inputcidUS" name="CID">
               <p id="lblus22">Rua</p>
               <input type="text" class="inputruaUS" name="RUA">

               <p id="lblus23">Bairro</p>
               <input type="text" class="inputbrUS" name="BAI">
               <p id="lblus24">Número</p>
               <input type="text" class="inputnumUS" name="NUM">
               <p id="lblus25">CEP</p>
               <input type="text" class="inputcepUS" name="CEP">

               <p id="lblus26">Ponto de referencia</p>
               <input type="text" class="inputrefUS" name="REF">
               <p id="lblus27">Tempo de residencia no municipio</p>   
               <input type="text" class="inputtempUS" name="TEM">

               <p id="lblus28">Valor da Residencia(R$)</p>
               <input type="text" class="inputvlrUS" name="VLR">
               <p id="lblus29">Tipo de Residencia</p>
               <input type="text" class="inputtipUS" name="TPR">

               <button type="submit" name="btnCadastro2" class="btncd2" style="    
               background-color:#01E581; 
               color: #fff;
               width:15rem;
               height: 3rem; 
               border-radius:8px; 
               font-size: 2rem; 
               display: flex;
               align-items:center;
               justify-content: center; 
               margin-top:26rem;
               margin-left: 50rem;
               border: 0.8px solid  rgba(0,0,0,0.3)"
               >Alterar</button>
        </form>
   </div>

   <script>
            function showTab(tabId) {
            // Oculta todas as abas
            const tabs = document.querySelectorAll('.tab');
            tabs.forEach(tab => tab.classList.remove('user-update'));

            // Mostra a aba selecionada
            const selectedTab = document.getElementById(tabId);
            selectedTab.classList.add('user-update');
        }
;
</script>
</div>
<?php Include("blades/followemp.php")?>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>