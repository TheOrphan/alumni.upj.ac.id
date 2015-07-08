<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Iluniprodi'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="iluniprodi index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_prodi') ?></th>
            <th><?= $this->Paginator->sort('nm_prodi') ?></th>
            <th><?= $this->Paginator->sort('nm_ketua') ?></th>
            <th><?= $this->Paginator->sort('tlpn') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($iluniprodi as $iluniprodi): ?>
        <tr>
            <td><?= $this->Number->format($iluniprodi->id_prodi) ?></td>
            <td><?= h($iluniprodi->nm_prodi) ?></td>
            <td><?= h($iluniprodi->nm_ketua) ?></td>
            <td><?= $this->Number->format($iluniprodi->tlpn) ?></td>
            <td><?= h($iluniprodi->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $iluniprodi->id_prodi]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iluniprodi->id_prodi]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iluniprodi->id_prodi], ['confirm' => __('Are you sure you want to delete # {0}?', $iluniprodi->id_prodi)]) ?>
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
