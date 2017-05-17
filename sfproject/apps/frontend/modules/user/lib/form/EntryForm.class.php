<?php

/**
 * entry form.
 *
 * @package    incl2
 * @subpackage form
 */
class EntryForm extends AccountForm
{
    const MAIL = 'mail';
    const PASSWORD = 'password';
    const AGREEMENT_CHECK = 'agreement_check';

    public function configure()
    {
        $this->widgetSchema->setNameFormat('entry[%s]');

        $this->setWidget(self::MAIL, new sfWidgetFormInputText());
        $this->setWidget(self::PASSWORD, new sfWidgetFormInputPassword());
        $this->setWidget(self::AGREEMENT_CHECK, new sfWidgetFormInputCheckbox());

        $this->setValidator(
            self::MAIL, new sfValidatorString(
                ['required' => true],
                ['required' => '<p class="err_mes">メールアドレスを入力して下さい。</p>']
            ));
        $this->setValidator(
            self::PASSWORD, new sfValidatorString(
                ['required' => true],
                ['required' => '<p class="err_mes">パスワードを入力してください。</p>']
            ));
        $this->setValidator(
            self::AGREEMENT_CHECK, new sfValidatorBoolean(
                ['required' => true],
                ['required' => '<p class="err_mes">利用規約への同意が必要です。</p>']
            ));

        $this->useFields([self::MAIL, self::PASSWORD, self::AGREEMENT_CHECK]);

        $this->validatorSchema->setPostValidator(
            new sfValidatorCallback(['callback' => [$this, 'loginCheck']])
        );
    }

    public function loginCheck($validator, $values)
    {
      return $values;
    }
}
