<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Datasets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recurrent Data'), ['controller' => 'RecurrentData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recurrent Data'), ['controller' => 'RecurrentData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datasets form large-9 medium-8 columns content">
    <?= $this->Form->create($dataset) ?>
    <fieldset>
        <legend><?= __('Add Dataset') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('year');
            echo $this->Form->input('start_medium_end');
            echo $this->Form->input('access');
            echo $this->Form->input('constancy');
            echo $this->Form->input('excercise');
            echo $this->Form->input('medicine');
            echo $this->Form->input('size');
            echo $this->Form->input('weight');
            echo $this->Form->input('bmi');
            echo $this->Form->input('clasification');
            echo $this->Form->input('cc');
            echo $this->Form->input('water');
            echo $this->Form->input('muscle_mass');
            echo $this->Form->input('bone_mass');
            echo $this->Form->input('visceral_fat');
            echo $this->Form->input('fat_mass');
            echo $this->Form->input('metabolic_age');
            echo $this->Form->input('frequency_cake');
            echo $this->Form->input('frequency_soda');
            echo $this->Form->input('frequency_salad');
            echo $this->Form->input('frequency_fruit');
            echo $this->Form->input('frequency_sausage');
            echo $this->Form->input('frequency_egg');
            echo $this->Form->input('frequency_vegetable');
            echo $this->Form->input('frequency_fast_food');
            echo $this->Form->input('appetite');
            echo $this->Form->input('breakfast');
            echo $this->Form->input('morning_break');
            echo $this->Form->input('lunch');
            echo $this->Form->input('afternon_break');
            echo $this->Form->input('dinner');
            echo $this->Form->input('night_break');
            echo $this->Form->input('smoke');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
