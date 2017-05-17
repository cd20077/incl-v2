<!--  StyleSheet記述  -->
<link rel="stylesheet" type="text/css" href="/css/form.css" />
<!--  /StyleSheet記述  --><div id="container">
    <!-- ▼メインここから -->
    <main>
        <div id="userart">
            <div id="userdiv" class = "cf">
                <div class="h2box">
                    <h2 class="h2inbox"><?php echo 'プロジェクト';?></h2>
                </div>
                <div id="topdiv">
                    <div id="" class="promenubox">
                        <div class="inner">
                        	<div class="intitle">
                            	<?php echo '参加プロジェクト';?>
                            </div>
                        	<div id="inpronum" class="innum">
                            	<?php echo count($projects); ?>
                            </div>
                        </div>
                    </div>
                    <div id="" class="promenubox">
                        <div class="inner">
                            <div class="intitle">
                            <?php echo 'リーダープロジェクト';?>
                            </div>
                            <div id="adpronum" class="innum">
                                <?php
                                if (isset($admincnt[0]['admincnt'])) {
                                    echo $admincnt[0]['admincnt'];
                                } else {
                                    echo 0;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="newproject" class="promenubox2">
                        <div class="inner">
                            <div class="intitle">
                            <?php echo '新規プロジェクト';?>
                            </div>
                        	<div class="newpro"></div>
                        	<div class="newprounder">
                            	<?php echo '残り';?>
                                <span id="atikt">
                            	<?php
                                if(isset($admincnt[0]['admincnt'])){
//                                        echo MAX_PROJECT_NUM - $admincnt[0]['admincnt'];
                                }else{
//                                        echo MAX_PROJECT_NUM;
                                }
                                ?>
                                </span>
                                <?php echo 'つまで作成可能';?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div id="underdiv">
                    <?php // echo $this->Session->flash(); ?>

                    <?php //echo $this->Html->link('詳細へ', array('controller' => 'GroupMembers', 'action' => 'groupdetail'), array( 'escape'=>false,'class'=>'tableatag')); ?>
                    <div id="tabledivbox" class="probox">
                        <table id="hor-minimalist2" summary="">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo 'プロジェクト名';?></th>
                                    <th scope="col"><?php echo 'リーダー';?></th>
                                    <th scope="col"><?php echo '最終更新日時';?></th>
                                    <th scope="col"><?php echo '加入日時';?></th>
                                </tr>
                            </thead>
                            <tbody id="protbody">

                                <?php
                                if(!$projects->count()){
                                    print '<tr><td colspan="4">'.'現在参加しているプロジェクトはありません'.'</td></tr>';
                                }else{
                                ?>
                                    <?php foreach ($projects as $project): ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo url_for('@project_detail', $project->getRandid()) ?>" class="tableatag">
                                                <?php echo $project->getName(); ?>
                                            </a>
                                            <?php //echo $this->Html->link(h($groupMember['GroupList']['name']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo url_for('@project_detail', $project->getRandid()) ?>" class="tableatag">
                                                <div class="adminimg" style="background-image: url('<?php echo $project->getAccount()->getAccountimg(); ?>');"></div>
                                                <?php echo $project->getAccountId(); ?>
                                            </a>
                                        <?php //echo $this->Html->link(h($groupMember['GroupList']['User']['name']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo url_for('@project_detail', $project->getRandid()) ?>" class="tableatag">
                                                <?php echo $project->getUpdatedAt(); ?>
                                            </a>
                                        <?php //echo $this->Html->link(h($groupMember['GroupList']['modified']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo url_for('@project_detail', $project->getRandid()) ?>" class="tableatag">
                                                <?php echo $project->getCreatedAt(); ?>
                                            </a>
                                        <?php //echo $this->Html->link(h($groupMember['GroupList']['modified']), array('controller' => 'GroupMembers', 'action' => 'groupdetail', $groupMember['GroupList']['ranid']), array( 'escape'=>false,'class'=>'tableatag')); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <!-- ▲メインここまで -->

    <!-- ▼ヘッダーここから -->
    <?php include_partial('global/header', ['account' =>$account]); ?>
    <!-- ▲ヘッダーここまで -->

<!-- / #wrap --></div>
<script>
$(function(){
    headimgset('<?php echo $account->getAccountimg(); ?>');
    topbackset('<?php echo $account->getBackimg(); ?>');
});
</script>