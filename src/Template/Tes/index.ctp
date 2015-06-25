<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Te'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="tes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tes') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tes as $te): ?>
        <tr>
            <td><?= $this->Number->format($te->id) ?></td>
            <td><?= h($te->tes) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $te->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $te->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $te->id], ['confirm' => __('Are you sure you want to delete # {0}?', $te->id)]) ?>
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
