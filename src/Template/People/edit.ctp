<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $person->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Datasets'), ['controller' => 'Datasets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dataset'), ['controller' => 'Datasets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="people form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->input('location_id', ['options' => $locations]);
            echo $this->Form->input('identification');
            echo $this->Form->input('last_name');
            echo $this->Form->input('second_last_name');
            echo $this->Form->input('name');
            echo $this->Form->input('birth');
            echo $this->Form->input('cellphone');
            echo $this->Form->input('phone');
            echo $this->Form->input('whatsapp');
            echo $this->Form->input('email');
            echo $this->Form->input('facebook');
            echo $this->Form->input('address');
            echo $this->Form->input('medical_center');
            echo $this->Form->input('groups._ids', ['options' => $groups]);
            echo $this->Form->input('sessions._ids', ['options' => $sessions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
