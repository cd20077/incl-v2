<!--  StyleSheet記述  -->
<link rel="stylesheet" type="text/css" href="/css/./style.css" />
<link rel="stylesheet" type="text/css" href="/css/./form.css" />
<!--  /StyleSheet記述  -->

<!--  javascript記述  -->

<!--<h2 class="page_title">新規会員登録</h2>-->

<form action="/users/entry_input" novalidate="novalidate" id="UserEntryInputForm" method="post" accept-charset="utf-8">
    <div style="display:none;">
        <input type="hidden" name="_method" value="POST"/>
    </div>
    <ul id="css3form">
        <li class="fmt">メールアドレス</li>
        <li>
            <input name="data[User][mail]" class="fm" maxlength="50" type="text" value="" id="UserMail" required="required"/>
        </li>
        <li class="fmt">パスワード</li>
        <li>
            <input name="data[User][password]" value="" class="fm" type="password" id="UserPassword" required="required"/>
        </li>

        <p class="regi_kiyaku">
            <a href="/others/agreement">利用規約</a>
        </p>
        <p class="regi_agree">
            <input type="hidden" name="data[User][check]" id="UserCheck_" value="0"/>
            <input type="checkbox" name="data[User][check]"  value="1" id="UserCheck"/>
            <label for="UserCheck">規約に同意してユーザ登録をする</label>
        </p>

        <input  class="btn" type="submit" value="登録する"/>
    </ul>
</form>
