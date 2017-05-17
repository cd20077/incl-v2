<div id="container">

    <!-- ▼メインここから -->
    <main>
        <section class="cf">
            <div id="topleft">
            	<table>

                    <tr>
                        <td>
                            <a href="<?php echo url_for('@entry') ?>" class="loga" target="">
                                <div id="logdiv">新規会員登録</div>
                            </a>
                        </td>
                    </tr>
                	<tr>
                        <td>
                            <a href="<?php echo url_for('auth/login') ?>" id="myElement" class="loga" target="">
                                <div id="newdiv">ログイン</div>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="topright">
            	<p>
                より直感的に、<br />
                使いやすいクラウドサービス
            	</p>
            </div>

        </section>

    </main>
    <!-- ▲メインここまで -->

    <hr />

    <footer role="contentinfo" id="footdiv">
        <address>&copy;incl All Rights Reserved.</address>
    </footer>

    <header>
        <div id="headmain">
            <h1 id="top">
            	<span class="maintitle">incl</span>
            </h1>
        </div>
    </header>
<!-- / #wrap --></div>

<?php if ($entryMes) { ?>
<script>
$(function(){
    modelEntrySuccess();
});
</script>
<?php } ?>