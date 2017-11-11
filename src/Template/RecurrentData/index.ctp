<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recurrent Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Datasets'), ['controller' => 'Datasets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dataset'), ['controller' => 'Datasets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recurrentData index large-9 medium-8 columns content">
    <h3><?= __('Recurrent Data') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataset_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pressure_scale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anxiety') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_insecurity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recurrentData as $recurrentData): ?>
            <tr>
                <td><?= $this->Number->format($recurrentData->id) ?></td>
                <td><?= $recurrentData->has('dataset') ? $this->Html->link($recurrentData->dataset->id, ['controller' => 'Datasets', 'action' => 'view', $recurrentData->dataset->id]) : '' ?></td>
                <td><?= h($recurrentData->sample_date) ?></td>
                <td><?= $this->Number->format($recurrentData->pressure_scale) ?></td>
                <td><?= $this->Number->format($recurrentData->anxiety) ?></td>
                <td><?= $this->Number->format($recurrentData->food_insecurity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recurrentData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recurrentData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recurrentData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recurrentData->id)]) ?>
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
