<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dataset'), ['action' => 'edit', $dataset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dataset'), ['action' => 'delete', $dataset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Datasets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dataset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recurrent Data'), ['controller' => 'RecurrentData', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recurrent Data'), ['controller' => 'RecurrentData', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="datasets view large-9 medium-8 columns content">
    <h3><?= h($dataset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $dataset->has('person') ? $this->Html->link($dataset->person->name, ['controller' => 'People', 'action' => 'view', $dataset->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Constancy') ?></th>
            <td><?= h($dataset->constancy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clasification') ?></th>
            <td><?= h($dataset->clasification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Cake') ?></th>
            <td><?= h($dataset->frequency_cake) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Soda') ?></th>
            <td><?= h($dataset->frequency_soda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Salad') ?></th>
            <td><?= h($dataset->frequency_salad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Fruit') ?></th>
            <td><?= h($dataset->frequency_fruit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Sausage') ?></th>
            <td><?= h($dataset->frequency_sausage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Egg') ?></th>
            <td><?= h($dataset->frequency_egg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Vegetable') ?></th>
            <td><?= h($dataset->frequency_vegetable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frequency Fast Food') ?></th>
            <td><?= h($dataset->frequency_fast_food) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Appetite') ?></th>
            <td><?= h($dataset->appetite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dataset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Medium End') ?></th>
            <td><?= $this->Number->format($dataset->start_medium_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $this->Number->format($dataset->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($dataset->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bmi') ?></th>
            <td><?= $this->Number->format($dataset->bmi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cc') ?></th>
            <td><?= $this->Number->format($dataset->cc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Water') ?></th>
            <td><?= $this->Number->format($dataset->water) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Muscle Mass') ?></th>
            <td><?= $this->Number->format($dataset->muscle_mass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bone Mass') ?></th>
            <td><?= $this->Number->format($dataset->bone_mass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visceral Fat') ?></th>
            <td><?= $this->Number->format($dataset->visceral_fat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fat Mass') ?></th>
            <td><?= $this->Number->format($dataset->fat_mass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metabolic Age') ?></th>
            <td><?= $this->Number->format($dataset->metabolic_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access') ?></th>
            <td><?= $dataset->access ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Excercise') ?></th>
            <td><?= $dataset->excercise ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medicine') ?></th>
            <td><?= $dataset->medicine ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breakfast') ?></th>
            <td><?= $dataset->breakfast ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Morning Break') ?></th>
            <td><?= $dataset->morning_break ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lunch') ?></th>
            <td><?= $dataset->lunch ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Afternon Break') ?></th>
            <td><?= $dataset->afternon_break ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dinner') ?></th>
            <td><?= $dataset->dinner ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Night Break') ?></th>
            <td><?= $dataset->night_break ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smoke') ?></th>
            <td><?= $dataset->smoke ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Year') ?></h4>
        <?= $this->Text->autoParagraph(h($dataset->year)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Recurrent Data') ?></h4>
        <?php if (!empty($dataset->recurrent_data)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Dataset Id') ?></th>
                <th scope="col"><?= __('Sample Date') ?></th>
                <th scope="col"><?= __('Pressure Scale') ?></th>
                <th scope="col"><?= __('Anxiety') ?></th>
                <th scope="col"><?= __('Food Insecurity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dataset->recurrent_data as $recurrentData): ?>
            <tr>
                <td><?= h($recurrentData->id) ?></td>
                <td><?= h($recurrentData->dataset_id) ?></td>
                <td><?= h($recurrentData->sample_date) ?></td>
                <td><?= h($recurrentData->pressure_scale) ?></td>
                <td><?= h($recurrentData->anxiety) ?></td>
                <td><?= h($recurrentData->food_insecurity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RecurrentData', 'action' => 'view', $recurrentData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RecurrentData', 'action' => 'edit', $recurrentData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RecurrentData', 'action' => 'delete', $recurrentData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recurrentData->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
