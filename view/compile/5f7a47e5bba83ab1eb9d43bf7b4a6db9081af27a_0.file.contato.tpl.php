<?php
/* Smarty version 3.1.33, created on 2019-07-28 04:55:51
  from 'C:\xampp\htdocs\loja\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3d0eb7227245_77889343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7a47e5bba83ab1eb9d43bf7b4a6db9081af27a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\contato.tpl',
      1 => 1564282547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3d0eb7227245_77889343 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">

    <form class="form-horizontal" id="frmcontatoazul" action="/envio.php" method="get">
      <fieldset>

        <!-- Form Name -->
        <legend>Contato</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
          <div class="col-md-8">
            <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
            <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
          <div class="col-md-8">
            <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
            <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputarea">Mensagem</label>
          <div class="col-md-8">                     
            <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputarea" placeholder="Digite sua Pergunta"></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg" type="submit">Enviar</button>

          </div>
        </div>

        
      </fieldset>
    </form>
    <?php echo '<?php
      ';?>var_dump(_GET);
    <?php echo '?>';?> 
  </div>
</div><?php }
}
