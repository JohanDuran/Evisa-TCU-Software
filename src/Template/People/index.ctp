<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Indentificación') ?></th>
                <th><?= $this->Paginator->sort('Apellido') ?></th>
                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Celular') ?></th>
                <th><?= $this->Paginator->sort('Teléfono') ?></th>
                <th><?= $this->Paginator->sort('Correo') ?></th>
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
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $person->id],['class'=>'btn btn-info btn-sm']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $person->id],['class'=>'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id),'class'=>'btn btn-danger btn-sm']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?=$this->element('Paginator/paginator')?>
</div>
