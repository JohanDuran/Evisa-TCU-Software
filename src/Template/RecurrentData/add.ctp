<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recurrent Data'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Datasets'), ['controller' => 'Datasets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dataset'), ['controller' => 'Datasets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recurrentData form large-9 medium-8 columns content">
    <?= $this->Form->create($recurrentData) ?>
    <fieldset>
        <legend><?= __('Add Recurrent Data') ?></legend>
        <?php
            echo $this->Form->input('dataset_id', ['options' => $datasets]);
            echo $this->Form->input('sample_date');
            echo $this->Form->input('pressure_scale');
            echo $this->Form->input('anxiety');
            echo $this->Form->input('food_insecurity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
