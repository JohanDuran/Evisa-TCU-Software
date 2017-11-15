<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('identification') ?></th>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('cellphone') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
            <tr>
                <td><?= h($person->identification) ?></td>
                <td><?= h($person->last_name) ?></td>
                <td><?= h($person->name) ?></td>
                <td><?= h($person->cellphone) ?></td>
                <td><?= h($person->phone) ?></td>
                <td><?= h($person->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->id],['class'=>'btn btn-info btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id],['class'=>'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id),'class'=>'btn btn-danger btn-sm']) ?>
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
