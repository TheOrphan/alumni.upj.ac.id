<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Beritum'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="berita index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_berita') ?></th>
            <th><?= $this->Paginator->sort('no_induk') ?></th>
            <th><?= $this->Paginator->sort('nm_berita') ?></th>
            <th><?= $this->Paginator->sort('lingkup') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($berita as $beritum): ?>
        <tr>
            <td><?= $this->Number->format($beritum->id_berita) ?></td>
            <td><?= $this->Number->format($beritum->no_induk) ?></td>
            <td><?= h($beritum->nm_berita) ?></td>
            <td><?= h($beritum->lingkup) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $beritum->id_berita]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $beritum->id_berita]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $beritum->id_berita], ['confirm' => __('Are you sure you want to delete # {0}?', $beritum->id_berita)]) ?>
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
