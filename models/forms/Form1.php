<?php

namespace app\models\forms;

use yii\base\Model;


/**
 * Model Form1
 *
 * @author Ivanchenko Andrey <ivanchenko.andrey.d@ukr.net>
 * @since 1.0
 */
class Form1 extends Model
{
    public $formName = 'Форма 1';

    public $companyName;
    public $position;
    public $positionDescription;
    public $salary;
    public $startsAt;
    public $endsAt;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['companyName', 'position', 'positionDescription', 'salary', 'startsAt', 'endsAt', 'postAt'], 'required'],
            [['salary'], 'integer'],
            [['companyName', 'position', 'positionDescription'], 'string'],
            [['startsAt', 'endsAt', 'postAt'], 'safe']
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
            'positionDescription' => 'Описание должности',
            'salary' => 'Размер заработной платы',
            'startsAt' => 'Дата начала',
            'endsAt' => 'Дата окончания',
            'postAt' => 'Дата размещения'
        ];
    }
}