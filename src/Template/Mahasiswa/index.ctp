<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Mahasiswa'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="mahasiswa index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_mhs') ?></th>
            <th><?= $this->Paginator->sort('no_induk') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th><?= $this->Paginator->sort('role') ?></th>
            <th><?= $this->Paginator->sort('nama') ?></th>
            <th><?= $this->Paginator->sort('tlpn') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($mahasiswa as $mahasiswa): ?>
        <tr>
            <td><?= $this->Number->format($mahasiswa->id_mhs) ?></td>
            <td><?= $this->Number->format($mahasiswa->no_induk) ?></td>
            <td><?= h($mahasiswa->password) ?></td>
            <td><?= h($mahasiswa->role) ?></td>
            <td><?= h($mahasiswa->nama) ?></td>
            <td><?= $this->Number->format($mahasiswa->tlpn) ?></td>
            <td><?= h($mahasiswa->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $mahasiswa->id_mhs]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mahasiswa->id_mhs]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mahasiswa->id_mhs], ['confirm' => __('Are you sure you want to delete # {0}?', $mahasiswa->id_mhs)]) ?>
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
