<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kuesioner->id_kuesioner],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kuesioner->id_kuesioner)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kuesioner'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="kuesioner form large-10 medium-9 columns">
    <?= $this->Form->create($kuesioner) ?>
    <fieldset>
        <legend><?= __('Edit Kuesioner') ?></legend>
        <?php
            echo $this->Form->input('no_induk');
            echo $this->Form->input('file');
            echo $this->Form->input('nama');
            echo $this->Form->input('date_create');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
