<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['controller' => 'Sessions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['controller' => 'Sessions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $group->has('location') ? $this->Html->link($group->location->id, ['controller' => 'Locations', 'action' => 'view', $group->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= h($group->schedule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($group->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($group->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Space') ?></th>
            <td><?= $this->Number->format($group->space) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sessions') ?></h4>
        <?php if (!empty($group->sessions)): ?>
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
            <?php foreach ($group->sessions as $sessions): ?>
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
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($group->people)): ?>
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
            <?php foreach ($group->people as $people): ?>
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
