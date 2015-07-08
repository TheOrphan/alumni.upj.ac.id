<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Info Wisuda'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="infoWisuda index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_informasi') ?></th>
            <th><?= $this->Paginator->sort('no_induk') ?></th>
            <th><?= $this->Paginator->sort('judul') ?></th>
            <th><?= $this->Paginator->sort('date_create') ?></th>
            <th><?= $this->Paginator->sort('kontent') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($infoWisuda as $infoWisuda): ?>
        <tr>
            <td><?= $this->Number->format($infoWisuda->id_informasi) ?></td>
            <td><?= $this->Number->format($infoWisuda->no_induk) ?></td>
            <td><?= h($infoWisuda->judul) ?></td>
            <td><?= h($infoWisuda->date_create) ?></td>
            <td><?= h($infoWisuda->kontent) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $infoWisuda->id_informasi]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $infoWisuda->id_informasi]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $infoWisuda->id_informasi], ['confirm' => __('Are you sure you want to delete # {0}?', $infoWisuda->id_informasi)]) ?>
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
