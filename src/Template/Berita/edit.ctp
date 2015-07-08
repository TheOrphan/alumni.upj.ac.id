<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $beritum->id_berita],
                ['confirm' => __('Are you sure you want to delete # {0}?', $beritum->id_berita)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Berita'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="berita form large-10 medium-9 columns">
    <?= $this->Form->create($beritum) ?>
    <fieldset>
        <legend><?= __('Edit Beritum') ?></legend>
        <?php
            echo $this->Form->input('no_induk');
            echo $this->Form->input('nm_berita');
            echo $this->Form->input('lingkup');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
