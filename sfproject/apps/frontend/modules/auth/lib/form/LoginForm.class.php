<?php

/**
 * login form.
 *
 * @package    incl2
 * @subpackage form
 */
class LoginForm extends AccountForm
{
    const MAIL = 'mail';
    const PASSWORD = 'password';

    public function configure()
    {
        $this->widgetSchema->setNameFormat('login[%s]');

        $this->setWidget(self::MAIL, new sfWidgetFormInputText());
        $this->setWidget(self::PASSWORD, new sfWidgetFormInputPassword());

        $this->setValidator(
            self::MAIL, new sfValidatorString(
                ['required' => true],
                ['required' => 'メールアドレスを入力してください']
            ));
        $this->setValidator(
            self::PASSWORD, new sfValidatorString(
                ['required' => true],
                ['required' => 'パスワードを入力してください']
            ));

        $this->useFields([self::MAIL, self::PASSWORD]);

        $this->validatorSchema->setPostValidator(
            new sfValidatorCallback(['callback' => [$this, 'loginCheck']])
        );
    }

    public function loginCheck($validator, $values)
    {
        $account = AccountQuery::create()
                    ->filterByMail($values[self::MAIL])
                    ->filterByPassword($values[self::PASSWORD])
                    ->filterByAccountStatusId(AccountStatus::ACTIVE)
                    ->findOne();

        if (!$account) {
            throw new sfValidatorErrorSchema($validator, [self::MAIL => new sfValidatorError($validator, 'メールアドレスまたはパスワードが違います')]);
        }

        sfContext::getInstance()->getUser()->setAuthenticated(true);
        sfContext::getInstance()->getUser()->addCredential('frontend');
        sfContext::getInstance()->getUser()->setAttribute('account_id', $account->getId());

        return $values;
    }
}
