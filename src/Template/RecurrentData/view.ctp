<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recurrent Data'), ['action' => 'edit', $recurrentData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recurrent Data'), ['action' => 'delete', $recurrentData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recurrentData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recurrent Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recurrent Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Datasets'), ['controller' => 'Datasets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dataset'), ['controller' => 'Datasets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recurrentData view large-9 medium-8 columns content">
    <h3><?= h($recurrentData->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dataset') ?></th>
            <td><?= $recurrentData->has('dataset') ? $this->Html->link($recurrentData->dataset->id, ['controller' => 'Datasets', 'action' => 'view', $recurrentData->dataset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recurrentData->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pressure Scale') ?></th>
            <td><?= $this->Number->format($recurrentData->pressure_scale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anxiety') ?></th>
            <td><?= $this->Number->format($recurrentData->anxiety) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Food Insecurity') ?></th>
            <td><?= $this->Number->format($recurrentData->food_insecurity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Date') ?></th>
            <td><?= h($recurrentData->sample_date) ?></td>
        </tr>
    </table>
</div>
