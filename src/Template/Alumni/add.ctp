<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Alumni'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="alumni form large-10 medium-9 columns">
    <?= $this->Form->create($alumnus) ?>
    <fieldset>
        <legend><?= __('Add Alumnus') ?></legend>
        <?php
            echo $this->Form->input('id_mhs');
            echo $this->Form->input('password');
            echo $this->Form->input('no_induk');
            echo $this->Form->input('thn_lulus');
            echo $this->Form->input('nm_tmp_kerja');
            echo $this->Form->input('alamat_kerja');
            echo $this->Form->input('date_create');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
