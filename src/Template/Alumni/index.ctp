<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Alumnus'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="alumni index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_alumni') ?></th>
            <th><?= $this->Paginator->sort('id_mhs') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th><?= $this->Paginator->sort('no_induk') ?></th>
            <th><?= $this->Paginator->sort('thn_lulus') ?></th>
            <th><?= $this->Paginator->sort('nm_tmp_kerja') ?></th>
            <th><?= $this->Paginator->sort('alamat_kerja') ?></th>
            <th><?= $this->Paginator->sort('date_create') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alumni as $alumnus): ?>
        <tr>
            <td><?= $this->Number->format($alumnus->id_alumni) ?></td>
            <td><?= $this->Number->format($alumnus->id_mhs) ?></td>
            <td><?= h($alumnus->password) ?></td>
            <td><?= $this->Number->format($alumnus->no_induk) ?></td>
            <td><?= h($alumnus->thn_lulus) ?></td>
            <td><?= h($alumnus->nm_tmp_kerja) ?></td>
            <td><?= h($alumnus->alamat_kerja) ?></td>
            <td><?= h($alumnus->date_create) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $alumnus->id_alumni]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnus->id_alumni]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnus->id_alumni], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnus->id_alumni)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
