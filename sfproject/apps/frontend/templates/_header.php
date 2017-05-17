<header>
    <div id="headmain">
        <h1 id="top">
            <span class="maintitle">
                incl
            </span>
        </h1>

        <nav>
            <ul>
                <hr />
                <li class = "headuserdiv">
                    <a href="<?php echo url_for('@user_top') ?>" class="userimgzone">
                        <div class="headimg" id="headimgid"></div>
                        <span class="usertitle">ユーザー名</span>
                        <br />
                        <div id="headusernameid" class="headusername">
                            <?php echo $account->getName(); ?>
                        </div>
                        <br />
                    </a>
                </li>
                <hr />
                <li>
                    <a href="<?php echo url_for('@contents') ?>" class="headli">マイディスプレイ</a>
                </li>
                <li>
                    <a href="<?php echo url_for('@project_top') ?>" class="headli">プロジェクト</a>
                </li>
                <li>
                    <a href="<?php echo url_for('@agreement') ?>" class="headli">利用規約</a>
                </li>
                <li>
                    <a href="<?php echo url_for('@help') ?>" class="headli">ヘルプ</a>
                </li>
                <li>
                    <a href="<?php echo url_for('@logout') ?>" class="headli">ログアウト</a>
                </li>
            </ul>
        </nav>

        <div class="lang">
            <?php if ($auth['langid']==2 && 0) { ?>
                <a href="<?php echo url_for('@logout') ?>" class="langbtn">日本語</a>
                <a href="<?php echo url_for('@logout') ?>" class="langbtn langon">English</a>
            <?php } else { ?>
                <a href="<?php echo url_for('@logout') ?>" class="langbtn langon">日本語</a>
                <a href="<?php echo url_for('@logout') ?>" class="langbtn">English</a>
            <?php } ?>
        </div>

        <address>&copy;incl All Rights Reserved.</address>
    </div>
    <div id="headbar">
    	<div id="hanicon" class="toggle_menu">
            <span class="first"></span>
            <span class="second"></span>
            <span class="third"></span>
        </div>
        <!--<span class="css-bar"></span>-->
    </div>
</header>