
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<?php if ($account->getLanguageId() === 2) { ?>
    <script type="text/javascript" src="/js/deskeng.js"></script>
<?php } else { ?>
    <script type="text/javascript" src="/js/desk.js"></script>
<?php } ?>

<script type="text/javascript" src="/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/js/jquery.halocontext.js"></script>


<!--  StyleSheet記述  -->
<link rel="stylesheet" type="text/css" href="/css/colorbox.css" />
<link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/css/form.css" />
<link rel="stylesheet" type="text/css" href="/css/rclick.css" />
<!--  /StyleSheet記述  -->

<div id="container">

    <!-- ▼メインここから -->
    <main>
        <article id="dropzone" class="sortable-list">
            <?php //echo $this->Session->flash(); ?>

            <?php foreach ($contens as $content): ?>
            	<?php if ($content->getContentType() === 2) { ?>
                    <div id="<?php echo $content->getEncryptName(); ?>" data-dirname="" data-fname="<?php echo $content->getEncryptName(); ?>" class="folderdiv outfdiv">
                        <span class="folderd"><p><?php echo $content->getOriginName(); ?></p></span>
                    </div>
                <?php } else { ?>
                    <div id="<?php echo $content->getEncryptName(); ?>" data-dirname="" data-fname="<?php echo $content->getEncryptName(); ?>" class="filediv outfdiv">
                        <span class="file"><p><?php echo $content->getOriginName(); ?></p></span>
                    </div>
                <?php } ?>
            <?php endforeach; ?>

            <!-- ▼フッターここから -->
            <?php include_partial('global/footer'); ?>
            <!-- ▲フッターここまで -->
        </article>

    </main>
    <!-- ▲メインここまで -->

    <!-- ▼ヘッダーここから -->
    <?php include_partial('global/header', ['account' => $sf_user->getAccount()]); ?>
    <!-- ▲ヘッダーここまで -->

<!-- / #container --></div>
<script>
$(function(){
    headimgset2('<?php echo $account->getAccountimg(); ?>');
    backset('<?php echo $account->getBackimg(); ?>');
});
</script>