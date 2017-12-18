
<div id="container">
    <!-- ▼メインここから -->
    <main>
        <div id="userart">
            <div id="userdiv" class = "cf">
                <div class="h2box">
                    <h2 class="h2inbox"><?php echo '個人設定';?></h2>
                </div>
                <div id="firstdiv" class = "cf">
                    <div class = "topuserbox1">
                    	<div id="topimgbox">
                            <div id="userimgid"></div>
                        </div>
                    	<div id="topimgund">
                            <span id="chanimg" class="chanposi" onClick="$('#inputfile1').click();"><?php echo 'ユーザーイメージ変更';?></span>
                            <input type="file" id="inputfile1" accept="image/*" style="display:none;" />
                        </div>
                    </div>
                    <div class = "topuserbox2">
                    	<div id="topname">
                            <div class="a"><h3 class="h3cl"><?php echo 'ユーザー名';?></h3></div>

                            <div class="topptag">
                            	<span id="nameid"><?php echo $account->getName(); ?></span>
                                <input id="nameid-edit" class="fm" name="nameid" style="display:none;" required maxlength="16" />
                            </div>

                            <span id="channame" class="chanposi"><?php echo 'ユーザー名変更';?></span>
                        </div>
                    	<div id="topmail">
                            <div class="a"><h3 class="h3cl"><?php echo '登録メールアドレス';?></h3></div>

                            <div class="topptag">
                            	<?php echo $account->getMail(); ?>
                            </div>

                        </div>

                    </div>

                    <div class = "topuserbox2">
                        <div class="a"><h3 class="h3cl"><?php echo '使用領域';?></h3></div>
                    	<div id = "dataleft">
                            <span class="chart" data-percent="<?php echo ceil($account->getPrecapa() / $account->getMaxcapa() * 100);?>">
                                <span class="percent"></span>
                            </span>
                        </div>
                    	<div id = "dataright">
                        	<table>
                                <tr>
                                    <th class="">
                                    	<span><?php echo '現在サイズ';?> / <?php echo '最大サイズ';?></span>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="nowbytespan"><?php echo $account->getPrecapa();?></span>
                                    	<span class="sumbytespan"> / <?php echo $account->getMaxcapa()?> <?php echo 'バイト';?></span>
                                    </td>
                                </tr>
                            </table>
                            <span class="chanposi"><?php echo 'サイズ拡張';?></span>
                        </div>
                    </div>
                </div>

                <hr />

                <div id="seconddiv" class = "cf">

                    <div class = "topuserbox3">
                        <div class="a">
                            <h3 class="h3cl">
                                <a href="<?php echo url_for('user/group') ?>" class="h3aclass">プロジェクト</a>
                            </h3>
                        </div>
                        <table id="hor-minimalist" summary="">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo 'プロジェクト名';?></th>
                                    <th scope="col"><?php echo 'リーダー';?></th>
                                    <th scope="col"><?php echo '最終更新日時';?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!$projects->count()) {
                                    print '<tr><td colspan="3">'.'現在参加しているプロジェクトはありません'.'</td></tr>';
                                } else { ?>
                                    <?php foreach ($projects as $project): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo url_for('@user_top') ?>" class="tableatag">
                                                <?php echo $project->getName(); ?>
                                            </a>
                                            <?php //echo $this->Html->link(h($groupMember['GroupList']['name']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo url_for('@user_top') ?>" class="tableatag">
                                                <?php echo $project->getAccountId(); ?>
                                            </a>
                                        <?php //echo $this->Html->link(h($groupMember['GroupList']['User']['name']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo url_for('@user_top') ?>" class="tableatag">
                                                <?php echo $project->getUpdatedAt(); ?>
                                            </a>
                                        <?php //echo $this->Html->link(h($groupMember['GroupList']['modified']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "topuserbox3">
                        <div class="a">
                            <h3 class="h3cl">
                                <?php echo '更新履歴';?>
                            </h3>
                        </div>
                    	<div id="information">
                            <ul>
                                <?php foreach ($accountLogs as $accountLog): ?>
                                <li>
                                    <a href="<?php echo url_for('@user_top') ?>" class="tableatag">
                                        <span><?php echo $accountLog->getUpdatedAt(); ?></span>
                                        <?php echo $accountLog->getTitle(); ?>
                                    </a>
                                    <?php // echo $this->Html->link(
//                                        '<span>'.h($news['News']['modified']).'</span>'.h($news['News']['title'])
//                                        , array('controller' => 'Filetops', 'action' => 'index')
//                                        , array('escape'=>false,'class'=>'tableatag')); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <span class="chanposi"><?php echo '以前の更新情報へ'; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ▲メインここまで -->

    <!-- ▼ヘッダーここから -->
    <?php include_partial('global/header', ['account' => $sf_user->getAccount()]); ?>
    <!-- ▲ヘッダーここまで -->

<!-- / #wrap --></div>
<script>
$(function(){
    headimgset('<?php echo $account->getAccountimg(); ?>');
    topbackset('<?php echo $account->getBackimg(); ?>');
    topuserimgset('<?php echo $account->getAccountimg(); ?>');
});
</script>