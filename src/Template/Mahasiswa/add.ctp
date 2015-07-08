<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Mahasiswa'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="mahasiswa form large-10 medium-9 columns">
    <?= $this->Form->create($mahasiswa) ?>
    <fieldset>
        <legend><?= __('Add Mahasiswa') ?></legend>
        <?php
            echo $this->Form->input('no_induk');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
            echo $this->Form->input('nama');
            echo $this->Form->input('alamat');
            echo $this->Form->input('tlpn');
            echo $this->Form->input('email');
            echo $this->Form->input('prodi');
            echo $this->Form->input('thn_masuk');
            echo $this->Form->input('foto');
            echo $this->Form->input('date_create');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
