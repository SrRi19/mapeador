<script type="text/javascript" src="modulos/conexao/js.js"></script>
<div class="form" id="conexao">
      <div class="tab-content">
         <div id="login">   
          <h1>Conexão</h1>
          <form action="" method="post">
          
		  <div class="field-wrap">
            <label>
              Usuário<span class="req">*</span>
            </label>
            <input type="text" id="usuario" name="usuario" required autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Senha<span class="req"></span>
            </label>
            <input type="password" id="senha" name="senha" autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Nome do banco <span class="req">*</span>
            </label>
            <input type="text" id="banco" name="banco" required autocomplete="off"/>
          </div> 
		  
		  <div class="field-wrap">
            <label>
              Caminho do banco <span class="req">*</span>
            </label>
            <input type="text" name="caminho" id="caminho" required autocomplete="off"/>
          </div>
          
		  <input type="submit" value="Log In" class="button button-block"/>
          
		  </form>

        </div>
      </div>
	</div>