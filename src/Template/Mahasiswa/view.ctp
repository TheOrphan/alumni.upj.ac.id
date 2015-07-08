<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Mahasiswa'), ['action' => 'edit', $mahasiswa->id_mhs]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mahasiswa'), ['action' => 'delete', $mahasiswa->id_mhs], ['confirm' => __('Are you sure you want to delete # {0}?', $mahasiswa->id_mhs)]) ?> </li>
        <li><?= $this->Html->link(__('List Mahasiswa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mahasiswa'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="mahasiswa view large-10 medium-9 columns">
    <h2><?= h($mahasiswa->id_mhs) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($mahasiswa->password) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($mahasiswa->role) ?></p>
            <h6 class="subheader"><?= __('Nama') ?></h6>
            <p><?= h($mahasiswa->nama) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($mahasiswa->email) ?></p>
            <h6 class="subheader"><?= __('Prodi') ?></h6>
            <p><?= h($mahasiswa->prodi) ?></p>
            <h6 class="subheader"><?= __('Foto') ?></h6>
            <p><?= h($mahasiswa->foto) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Mhs') ?></h6>
            <p><?= $this->Number->format($mahasiswa->id_mhs) ?></p>
            <h6 class="subheader"><?= __('No Induk') ?></h6>
            <p><?= $this->Number->format($mahasiswa->no_induk) ?></p>
            <h6 class="subheader"><?= __('Tlpn') ?></h6>
            <p><?= $this->Number->format($mahasiswa->tlpn) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Create') ?></h6>
            <p><?= h($mahasiswa->date_create) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($mahasiswa->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Alamat') ?></h6>
            <?= $this->Text->autoParagraph(h($mahasiswa->alamat)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Thn Masuk') ?></h6>
            <?= $this->Text->autoParagraph(h($mahasiswa->thn_masuk)) ?>
        </div>
    </div>
</div>
