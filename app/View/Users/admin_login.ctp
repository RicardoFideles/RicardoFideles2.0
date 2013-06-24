<?php echo $this->Form->create('User', array('id'=> 'login','inputDefaults' => array('div' => false, 'label' => false))) ?>
    <p>
        <?php echo $this->Form->label('username', 'Usuario' , array('class' => 'bebas')) ?>
        <?php echo $this->Form->input('username', array('id' => 'username', 'class' => 'radius2','type' => 'text', 'placeholder' => 'Digite o seu login')) ?>
    </p>
    <p>
        <?php echo $this->Form->label('password', 'Senha', array('class' => 'bebas')) ?>
        <?php echo $this->Form->input('password', array('type'=> 'password' ,'id' => 'password', 'class' => 'radius2','placeholder' => 'Digite sua senha')) ?>
    </p>
    <p>
        <?php echo $this->Form->submit('Entrar', array('class' => 'enviar radius3 bebas', 'div' => false)) ?> 
    </p>

<?php echo $this->Form->end() ?>

    