<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Session'), ['action' => 'edit', $session->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Session'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sessions view large-9 medium-8 columns content">
    <h3><?= h($session->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $session->has('group') ? $this->Html->link($session->group->name, ['controller' => 'Groups', 'action' => 'view', $session->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Goals') ?></th>
            <td><?= h($session->goals) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opening') ?></th>
            <td><?= h($session->opening) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feedback') ?></th>
            <td><?= h($session->feedback) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Development') ?></th>
            <td><?= h($session->development) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Check Experience') ?></th>
            <td><?= h($session->check_experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($session->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($session->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= $this->Number->format($session->duration) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($session->people)): ?>
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
            <?php foreach ($session->people as $people): ?>
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
