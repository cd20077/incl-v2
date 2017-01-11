<!--  StyleSheet記述  -->
<link rel="stylesheet" type="text/css" href="/css/./style.css" />
<link rel="stylesheet" type="text/css" href="/css/./form.css" />
<!--  /StyleSheet記述  -->

<form action="/auths/login" id="AuthLoginForm" method="post" accept-charset="utf-8">
    <div style="display:none;">
        <input type="hidden" name="_method" value="POST"/>
    </div>
    <ul id="css3form">
        <li class="fmt">メールアドレス</li>
        <li>
            <input name="data[Auth][login_mail]" class="fm" type="text" value="" id="AuthLoginMail"/>
        </li>
        <li class="fmt">パスワード</li>
        <li>
            <input name="data[Auth][login_pw]" value="" class="fm" type="password" id="AuthLoginPw"/>
        </li>
        <input  class="btn" type="submit" value="ログインする"/>
        <p class="login_forget">
            <a href="/Users/pass_reset" class="">パスワードを忘れた方はこちら</a>
        </p>
    </ul>
</form>