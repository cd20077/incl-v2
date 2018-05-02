<!--  StyleSheet記述  -->
<link rel="stylesheet" type="text/css" href="/css/./style.css" />
<link rel="stylesheet" type="text/css" href="/css/./form.css" />
<!--  /StyleSheet記述  -->

<!--  javascript記述  -->

<!--<h2 class="page_title">新規会員登録</h2>-->

<form action="<?php echo url_for('@entry') ?>" novalidate="novalidate" id="UserEntryInputForm" method="post" accept-charset="utf-8">
    <?php echo $form->renderHiddenFields() ?>
    <ul id="css3form">
        <li class="fmt">
            <?php echo $form[EntryForm::MAIL]->renderLabel('メールアドレス') ?>
        </li>
        <li>
            <?php echo $form[EntryForm::MAIL]->renderError() ?>
            <?php echo $form[EntryForm::MAIL]->render([
                'placeholder' => 'MailAddress',
                'required' => 'required',
                'maxlength' => '50',
                'class' => 'fm']) ?>
        </li>
        <li class="fmt">
            <?php echo $form[EntryForm::PASSWORD]->renderLabel('パスワード') ?>
        </li>
        <li>
            <?php echo $form[EntryForm::PASSWORD]->renderError() ?>
            <?php echo $form[EntryForm::PASSWORD]->render([
                'placeholder' => 'Password',
                'required' => 'required',
                'class' => 'fm']) ?>
        </li>

        <p class="regi_kiyaku">
            <a href="/others/agreement">利用規約</a>
        </p>
        <p class="regi_agree">
            <?php echo $form[EntryForm::AGREEMENT_CHECK]->renderError() ?>
            <?php echo $form[EntryForm::AGREEMENT_CHECK]->render() ?>
            <?php echo $form[EntryForm::AGREEMENT_CHECK]->renderLabel('規約に同意してユーザ登録をする') ?>
        </p>

        <input  class="btn" type="submit" value="登録する"/>
    </ul>
</form>