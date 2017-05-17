<!--  StyleSheet記述  -->
<link rel="stylesheet" type="text/css" href="/css/./style.css" />
<link rel="stylesheet" type="text/css" href="/css/./form.css" />
<!--  /StyleSheet記述  -->

<form action="<?php echo url_for('@login') ?>" id="AuthLoginForm" method="post" accept-charset="utf-8">
    <?php echo $form->renderHiddenFields() ?>
    <ul id="css3form">
        <li class="fmt">
            <?php echo $form[LoginForm::MAIL]->renderLabel('メールアドレス') ?>
        </li>
        <li>
            <?php echo $form[LoginForm::MAIL]->renderError() ?>
            <?php echo $form[LoginForm::MAIL]->render([
                'placeholder' => 'MailAddress',
                'required' => 'required',
                'maxlength' => '50',
                'class' => 'fm']) ?>
        </li>
        <li class="fmt">
            <?php echo $form[LoginForm::PASSWORD]->renderLabel('パスワード') ?>
        </li>
        <li>
            <?php echo $form[LoginForm::PASSWORD]->renderError() ?>
            <?php echo $form[LoginForm::PASSWORD]->render([
                'placeholder' => 'Password',
                'required' => 'required',
                'class' => 'fm']) ?>
        </li>
        <input  class="btn" type="submit" value="ログインする"/>
        <p class="login_forget">
            <a href="/Users/pass_reset" class="">パスワードを忘れた方はこちら</a>
        </p>
    </ul>
</form>