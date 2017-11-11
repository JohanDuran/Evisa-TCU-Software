<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?></li>
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
<div class="people index large-9 medium-8 columns content">
    <h3><?= __('People') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('second_last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cellphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('whatsapp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medical_center') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
            <tr>
                <td><?= $this->Number->format($person->id) ?></td>
                <td><?= $person->has('location') ? $this->Html->link($person->location->id, ['controller' => 'Locations', 'action' => 'view', $person->location->id]) : '' ?></td>
                <td><?= h($person->identification) ?></td>
                <td><?= h($person->last_name) ?></td>
                <td><?= h($person->second_last_name) ?></td>
                <td><?= h($person->name) ?></td>
                <td><?= h($person->birth) ?></td>
                <td><?= h($person->cellphone) ?></td>
                <td><?= h($person->phone) ?></td>
                <td><?= h($person->whatsapp) ?></td>
                <td><?= h($person->email) ?></td>
                <td><?= h($person->facebook) ?></td>
                <td><?= h($person->address) ?></td>
                <td><?= h($person->medical_center) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
