<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dataset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recurrent Data'), ['controller' => 'RecurrentData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recurrent Data'), ['controller' => 'RecurrentData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datasets index large-9 medium-8 columns content">
    <h3><?= __('Datasets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_medium_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access') ?></th>
                <th scope="col"><?= $this->Paginator->sort('constancy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('excercise') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medicine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bmi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clasification') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('water') ?></th>
                <th scope="col"><?= $this->Paginator->sort('muscle_mass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bone_mass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visceral_fat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fat_mass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metabolic_age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_cake') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_soda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_salad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_fruit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_sausage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_egg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_vegetable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frequency_fast_food') ?></th>
                <th scope="col"><?= $this->Paginator->sort('appetite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breakfast') ?></th>
                <th scope="col"><?= $this->Paginator->sort('morning_break') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lunch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('afternon_break') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dinner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('night_break') ?></th>
                <th scope="col"><?= $this->Paginator->sort('smoke') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datasets as $dataset): ?>
            <tr>
                <td><?= $this->Number->format($dataset->id) ?></td>
                <td><?= $dataset->has('person') ? $this->Html->link($dataset->person->name, ['controller' => 'People', 'action' => 'view', $dataset->person->id]) : '' ?></td>
                <td><?= $this->Number->format($dataset->start_medium_end) ?></td>
                <td><?= h($dataset->access) ?></td>
                <td><?= h($dataset->constancy) ?></td>
                <td><?= h($dataset->excercise) ?></td>
                <td><?= h($dataset->medicine) ?></td>
                <td><?= $this->Number->format($dataset->size) ?></td>
                <td><?= $this->Number->format($dataset->weight) ?></td>
                <td><?= $this->Number->format($dataset->bmi) ?></td>
                <td><?= h($dataset->clasification) ?></td>
                <td><?= $this->Number->format($dataset->cc) ?></td>
                <td><?= $this->Number->format($dataset->water) ?></td>
                <td><?= $this->Number->format($dataset->muscle_mass) ?></td>
                <td><?= $this->Number->format($dataset->bone_mass) ?></td>
                <td><?= $this->Number->format($dataset->visceral_fat) ?></td>
                <td><?= $this->Number->format($dataset->fat_mass) ?></td>
                <td><?= $this->Number->format($dataset->metabolic_age) ?></td>
                <td><?= h($dataset->frequency_cake) ?></td>
                <td><?= h($dataset->frequency_soda) ?></td>
                <td><?= h($dataset->frequency_salad) ?></td>
                <td><?= h($dataset->frequency_fruit) ?></td>
                <td><?= h($dataset->frequency_sausage) ?></td>
                <td><?= h($dataset->frequency_egg) ?></td>
                <td><?= h($dataset->frequency_vegetable) ?></td>
                <td><?= h($dataset->frequency_fast_food) ?></td>
                <td><?= h($dataset->appetite) ?></td>
                <td><?= h($dataset->breakfast) ?></td>
                <td><?= h($dataset->morning_break) ?></td>
                <td><?= h($dataset->lunch) ?></td>
                <td><?= h($dataset->afternon_break) ?></td>
                <td><?= h($dataset->dinner) ?></td>
                <td><?= h($dataset->night_break) ?></td>
                <td><?= h($dataset->smoke) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dataset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataset->id)]) ?>
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
