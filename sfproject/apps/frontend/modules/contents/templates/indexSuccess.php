
<?php //echo $this->Html->script('jquery-ui.min', array('inline' => false)); ?>
<?php //echo $this->Html->script('jquery.colorbox-min', array('inline' => false)); ?>
<?php //if($auth['langid']==2){ ?>
    <?php //echo $this->Html->script('deskeng', array('inline' => false)); ?>
<?php //}else{ ?>
    <?php //echo $this->Html->script('desk', array('inline' => false)); ?>
<?php //} ?>

<?php //echo $this->Html->script('jquery.halocontext', array('inline' => false)); ?>
<?php //echo $this->Html->css( 'colorbox', array('inline' => false)); ?>
<?php //echo $this->Html->css( 'jquery-ui.min', array('inline' => false)); ?>
<?php //echo $this->Html->css( 'form', array('inline' => false)); ?>
<?php //echo $this->Html->css( 'rclick', array('inline' => false)); ?>

<div id="container">

    <!-- ▼メインここから -->
    <main>
        <article id="dropzone" class="sortable-list">
            <?php //echo $this->Session->flash(); ?>

            <?php $i=0; ?>
            <?php foreach ($dir as $dir1): ?>
            	<?php if($i == 0){ ?>
                    <?php foreach ($dir1 as $dir2): ?>
                        <?php //if($i != 0){ ?>
                        <div id="<?php echo h($dir2); ?>" data-dirname="" data-fname="<?php echo h($dir2); ?>" class="folderdiv outfdiv">
                            <span class="folderd"><p><?php echo h($dir2); ?></p></span>
                        </div>
                    <?php endforeach; ?>
                <?php }else{ ?>
                    <?php foreach ($dir1 as $dir2): ?>
                        <?php //if($i != 0){ ?>
                        <div id="<?php echo h($dir2); ?>" data-dirname="" data-fname="<?php echo h($dir2); ?>" class="filediv outfdiv">
                            <span class="file"><p><?php echo h($dir2); ?></p></span>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
            	<?php $i++; ?>
            <?php endforeach; ?>
            <!-- ▼フッターここから -->
            <?php echo $this->element('footer')?>
            <!-- ▲フッターここまで -->
        </article>

    </main>
    <!-- ▲メインここまで -->

    <!-- ▼ヘッダーここから -->
    <?php include_partial('global/header', ['account' =>$account]); ?>
    <!-- ▲ヘッダーここまで -->

<!-- / #container --></div>
<script>
$(function(){
    headimgset2('<?php echo $account->getAccountimg(); ?>');
    backset('<?php echo $account->getBackimg(); ?>');
});
</script>