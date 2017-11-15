<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="">
        <div class="navbar-header"> <?= $this->Html->link('EVISA', ['controller' => 'Pages', 'action' => 'display', 'home' ], ['class' => 'brand_name navbar-brand']) ?>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
              <li><?= $this->Html->link('Personas', ['controller' => 'People', 'action' => 'index']) ?> </li>
              <li><?= $this->Html->link('Ubicaciones', ['controller' => 'Locations', 'action' => 'index']) ?> </li>
              <li class='active'><?= $this->Html->link('Grupos', ['controller' => 'Groups', 'action' => 'index']) ?> </li>
              <li><?= $this->Html->link('Sesiones', ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
            </ul>
        </div>
    </div>
</div>
