<div class="content">
	<ul class="buttonlist">
		<li>
			<li><a href="<?php
				$link = array('controller' => 'users', 'action' => 'index');
				echo $this->Html->url($link); ?>" class="btn btn_book"><span>Listar Usuários</span></a></li>
		</li>
	</ul>
	 <div class="contenttitle">
    	<h2 class="form"><span>Novo Usuário</span></h2>
    </div>
    
     <br />
    
    <?php echo $this->Form->create('User', array('type' => 'file','id' => 'form2', 'class' => 'stdform stdform2',  'inputDefaults' => array('label' => false, 'div' => false)));?>
	    <p class="primeiro">
	    	<label>Nome</label>
	        <span class="field"><?php echo $this->Form->input('name'); ?></span>
	    </p>
	    <p>
	    	<label>Login</label>
	        <span class="field"><?php echo $this->Form->input('username'); ?></span>
	    </p>
	    <p>
	    	<label>Senha : </label>
	        <span class="field"><?php echo $this->Form->input('password'); ?></span>
	    </p>
	    <p class="stdformbutton">
            <button class="submit radius2">Enviar</button>
        </p>
    <?php echo $this->Form->end();?>

</div>

