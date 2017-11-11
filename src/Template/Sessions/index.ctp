<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sessions index large-9 medium-8 columns content">
    <h3><?= __('Sessions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goals') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opening') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feedback') ?></th>
                <th scope="col"><?= $this->Paginator->sort('development') ?></th>
                <th scope="col"><?= $this->Paginator->sort('check_experience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sessions as $session): ?>
            <tr>
                <td><?= $this->Number->format($session->id) ?></td>
                <td><?= $session->has('group') ? $this->Html->link($session->group->name, ['controller' => 'Groups', 'action' => 'view', $session->group->id]) : '' ?></td>
                <td><?= h($session->goals) ?></td>
                <td><?= h($session->opening) ?></td>
                <td><?= h($session->feedback) ?></td>
                <td><?= h($session->development) ?></td>
                <td><?= h($session->check_experience) ?></td>
                <td><?= h($session->address) ?></td>
                <td><?= $this->Number->format($session->duration) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?>
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
