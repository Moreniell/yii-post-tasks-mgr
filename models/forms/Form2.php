<?php

namespace app\models\forms;

use yii\base\Model;


/**
 * Model Form2
 *
 * @author Ivanchenko Andrey <ivanchenko.andrey.d@ukr.net>
 * @since 1.0
 */
class Form2 extends Model
{
    public $formName = 'Форма 2';

    public $companyName;
    public $position;
    public $contactName;
    public $contactEmail;
    public $postAt;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['companyName', 'position', 'contact_name', 'contact_email', 'postAt'], 'required'],
            [['companyName', 'position', 'contact_name', 'contact_email'], 'string', 'max' => 50],
            [['postAt'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'companyName' => 'Название компании',
            'position' => 'Должность',
            'contactName' => 'Контактное имя',
            'contactEmail' => 'Контактный e-mail',
            'postAt' => 'Дата размещения'
        ];
    }
}