<div class="header radius3">
    <div class="headerinner">
        <a href="<?php echo $this->Html->url('/admin'); ?>">
            <img src="<?php echo $this->Html->url('/images/admin/starlight_admin_template_logo_small.png'); ?>" alt="" />
        </a>
        <div class="headright">
            <div class="headercolumn">&nbsp;</div>
            <div id="userPanel" class="headercolumn">
                <a  class="userinfo radius2">
                    <img src="<?php echo $this->Html->url('/images/admin/avatar.png'); ?>" alt="" class="radius2" />
                    <span><strong><?php echo AuthComponent::user('name'); ?></strong></span>
                </a>
                <div class="userdrop">
                    <ul>
                       <li><?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>