<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Datasets'), ['controller' => 'Datasets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dataset'), ['controller' => 'Datasets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="people view large-9 medium-8 columns content">
    <h3><?= h($person->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $person->has('location') ? $this->Html->link($person->location->id, ['controller' => 'Locations', 'action' => 'view', $person->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identification') ?></th>
            <td><?= h($person->identification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($person->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Second Last Name') ?></th>
            <td><?= h($person->second_last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($person->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cellphone') ?></th>
            <td><?= h($person->cellphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($person->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($person->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($person->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medical Center') ?></th>
            <td><?= h($person->medical_center) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth') ?></th>
            <td><?= h($person->birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Whatsapp') ?></th>
            <td><?= $person->whatsapp ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Datasets') ?></h4>
        <?php if (!empty($person->datasets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Start Medium End') ?></th>
                <th scope="col"><?= __('Access') ?></th>
                <th scope="col"><?= __('Constancy') ?></th>
                <th scope="col"><?= __('Excercise') ?></th>
                <th scope="col"><?= __('Medicine') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Bmi') ?></th>
                <th scope="col"><?= __('Clasification') ?></th>
                <th scope="col"><?= __('Cc') ?></th>
                <th scope="col"><?= __('Water') ?></th>
                <th scope="col"><?= __('Muscle Mass') ?></th>
                <th scope="col"><?= __('Bone Mass') ?></th>
                <th scope="col"><?= __('Visceral Fat') ?></th>
                <th scope="col"><?= __('Fat Mass') ?></th>
                <th scope="col"><?= __('Metabolic Age') ?></th>
                <th scope="col"><?= __('Frequency Cake') ?></th>
                <th scope="col"><?= __('Frequency Soda') ?></th>
                <th scope="col"><?= __('Frequency Salad') ?></th>
                <th scope="col"><?= __('Frequency Fruit') ?></th>
                <th scope="col"><?= __('Frequency Sausage') ?></th>
                <th scope="col"><?= __('Frequency Egg') ?></th>
                <th scope="col"><?= __('Frequency Vegetable') ?></th>
                <th scope="col"><?= __('Frequency Fast Food') ?></th>
                <th scope="col"><?= __('Appetite') ?></th>
                <th scope="col"><?= __('Breakfast') ?></th>
                <th scope="col"><?= __('Morning Break') ?></th>
                <th scope="col"><?= __('Lunch') ?></th>
                <th scope="col"><?= __('Afternon Break') ?></th>
                <th scope="col"><?= __('Dinner') ?></th>
                <th scope="col"><?= __('Night Break') ?></th>
                <th scope="col"><?= __('Smoke') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->datasets as $datasets): ?>
            <tr>
                <td><?= h($datasets->id) ?></td>
                <td><?= h($datasets->person_id) ?></td>
                <td><?= h($datasets->year) ?></td>
                <td><?= h($datasets->start_medium_end) ?></td>
                <td><?= h($datasets->access) ?></td>
                <td><?= h($datasets->constancy) ?></td>
                <td><?= h($datasets->excercise) ?></td>
                <td><?= h($datasets->medicine) ?></td>
                <td><?= h($datasets->size) ?></td>
                <td><?= h($datasets->weight) ?></td>
                <td><?= h($datasets->bmi) ?></td>
                <td><?= h($datasets->clasification) ?></td>
                <td><?= h($datasets->cc) ?></td>
                <td><?= h($datasets->water) ?></td>
                <td><?= h($datasets->muscle_mass) ?></td>
                <td><?= h($datasets->bone_mass) ?></td>
                <td><?= h($datasets->visceral_fat) ?></td>
                <td><?= h($datasets->fat_mass) ?></td>
                <td><?= h($datasets->metabolic_age) ?></td>
                <td><?= h($datasets->frequency_cake) ?></td>
                <td><?= h($datasets->frequency_soda) ?></td>
                <td><?= h($datasets->frequency_salad) ?></td>
                <td><?= h($datasets->frequency_fruit) ?></td>
                <td><?= h($datasets->frequency_sausage) ?></td>
                <td><?= h($datasets->frequency_egg) ?></td>
                <td><?= h($datasets->frequency_vegetable) ?></td>
                <td><?= h($datasets->frequency_fast_food) ?></td>
                <td><?= h($datasets->appetite) ?></td>
                <td><?= h($datasets->breakfast) ?></td>
                <td><?= h($datasets->morning_break) ?></td>
                <td><?= h($datasets->lunch) ?></td>
                <td><?= h($datasets->afternon_break) ?></td>
                <td><?= h($datasets->dinner) ?></td>
                <td><?= h($datasets->night_break) ?></td>
                <td><?= h($datasets->smoke) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Datasets', 'action' => 'view', $datasets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Datasets', 'action' => 'edit', $datasets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Datasets', 'action' => 'delete', $datasets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datasets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Groups') ?></h4>
        <?php if (!empty($person->groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Schedule') ?></th>
                <th scope="col"><?= __('Space') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->groups as $groups): ?>
            <tr>
                <td><?= h($groups->id) ?></td>
                <td><?= h($groups->location_id) ?></td>
                <td><?= h($groups->name) ?></td>
                <td><?= h($groups->year) ?></td>
                <td><?= h($groups->schedule) ?></td>
                <td><?= h($groups->space) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sessions') ?></h4>
        <?php if (!empty($person->sessions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Goals') ?></th>
                <th scope="col"><?= __('Opening') ?></th>
                <th scope="col"><?= __('Feedback') ?></th>
                <th scope="col"><?= __('Development') ?></th>
                <th scope="col"><?= __('Check Experience') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->sessions as $sessions): ?>
            <tr>
                <td><?= h($sessions->id) ?></td>
                <td><?= h($sessions->group_id) ?></td>
                <td><?= h($sessions->goals) ?></td>
                <td><?= h($sessions->opening) ?></td>
                <td><?= h($sessions->feedback) ?></td>
                <td><?= h($sessions->development) ?></td>
                <td><?= h($sessions->check_experience) ?></td>
                <td><?= h($sessions->address) ?></td>
                <td><?= h($sessions->duration) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sessions', 'action' => 'view', $sessions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sessions', 'action' => 'edit', $sessions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sessions', 'action' => 'delete', $sessions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sessions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
