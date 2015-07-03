<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Kuesioner'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="kuesioner index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_kuesioner') ?></th>
            <th><?= $this->Paginator->sort('no_induk') ?></th>
            <th><?= $this->Paginator->sort('file') ?></th>
            <th><?= $this->Paginator->sort('nama') ?></th>
            <th><?= $this->Paginator->sort('date_create') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($kuesioner as $kuesioner): ?>
        <tr>
            <td><?= $this->Number->format($kuesioner->id_kuesioner) ?></td>
            <td><?= $this->Number->format($kuesioner->no_induk) ?></td>
            <td><?= h($kuesioner->file) ?></td>
            <td><?= h($kuesioner->nama) ?></td>
            <td><?= h($kuesioner->date_create) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $kuesioner->id_kuesioner]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kuesioner->id_kuesioner]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kuesioner->id_kuesioner], ['confirm' => __('Are you sure you want to delete # {0}?', $kuesioner->id_kuesioner)]) ?>
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
