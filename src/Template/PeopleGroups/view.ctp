<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Group'), ['action' => 'edit', $peopleGroup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Group'), ['action' => 'delete', $peopleGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleGroup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleGroups view large-9 medium-8 columns content">
    <h3><?= h($peopleGroup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $peopleGroup->has('person') ? $this->Html->link($peopleGroup->person->name, ['controller' => 'People', 'action' => 'view', $peopleGroup->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $peopleGroup->has('group') ? $this->Html->link($peopleGroup->group->name, ['controller' => 'Groups', 'action' => 'view', $peopleGroup->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleGroup->id) ?></td>
        </tr>
    </table>
</div>
