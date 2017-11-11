<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= h($location->province) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Canton') ?></th>
            <td><?= h($location->canton) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= h($location->district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($location->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Groups') ?></h4>
        <?php if (!empty($location->groups)): ?>
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
            <?php foreach ($location->groups as $groups): ?>
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
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($location->people)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Identification') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Second Last Name') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Birth') ?></th>
                <th scope="col"><?= __('Cellphone') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Whatsapp') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Facebook') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Medical Center') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->people as $people): ?>
            <tr>
                <td><?= h($people->id) ?></td>
                <td><?= h($people->location_id) ?></td>
                <td><?= h($people->identification) ?></td>
                <td><?= h($people->last_name) ?></td>
                <td><?= h($people->second_last_name) ?></td>
                <td><?= h($people->name) ?></td>
                <td><?= h($people->birth) ?></td>
                <td><?= h($people->cellphone) ?></td>
                <td><?= h($people->phone) ?></td>
                <td><?= h($people->whatsapp) ?></td>
                <td><?= h($people->email) ?></td>
                <td><?= h($people->facebook) ?></td>
                <td><?= h($people->address) ?></td>
                <td><?= h($people->medical_center) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
