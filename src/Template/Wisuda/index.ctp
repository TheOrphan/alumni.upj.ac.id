<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Wisuda'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="wisuda index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_wisuda') ?></th>
            <th><?= $this->Paginator->sort('no_induk') ?></th>
            <th><?= $this->Paginator->sort('no_reg') ?></th>
            <th><?= $this->Paginator->sort('biaya') ?></th>
            <th><?= $this->Paginator->sort('tagihan') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('date_create') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($wisuda as $wisuda): ?>
        <tr>
            <td><?= $this->Number->format($wisuda->id_wisuda) ?></td>
            <td><?= $this->Number->format($wisuda->no_induk) ?></td>
            <td><?= $this->Number->format($wisuda->no_reg) ?></td>
            <td><?= $this->Number->format($wisuda->biaya) ?></td>
            <td><?= $this->Number->format($wisuda->tagihan) ?></td>
            <td><?= h($wisuda->status) ?></td>
            <td><?= h($wisuda->date_create) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $wisuda->id_wisuda]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wisuda->id_wisuda]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wisuda->id_wisuda], ['confirm' => __('Are you sure you want to delete # {0}?', $wisuda->id_wisuda)]) ?>
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
