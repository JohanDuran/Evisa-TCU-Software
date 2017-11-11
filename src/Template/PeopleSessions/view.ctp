<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Session'), ['action' => 'edit', $peopleSession->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Session'), ['action' => 'delete', $peopleSession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleSession->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Sessions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Session'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleSessions view large-9 medium-8 columns content">
    <h3><?= h($peopleSession->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Session') ?></th>
            <td><?= $peopleSession->has('session') ? $this->Html->link($peopleSession->session->id, ['controller' => 'Sessions', 'action' => 'view', $peopleSession->session->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $peopleSession->has('person') ? $this->Html->link($peopleSession->person->name, ['controller' => 'People', 'action' => 'view', $peopleSession->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleSession->id) ?></td>
        </tr>
    </table>
</div>
