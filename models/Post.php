<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $type 0 - Descriptive, 1 - Contact
 * @property string $company_name
 * @property string $position
 *
 * @property ContactPost $contactPost
 * @property DescriptivePost $descriptivePost
 * @property PostQueue[] $postQueues
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'company_name', 'position'], 'required'],
            [['type'], 'integer'],
            [['company_name', 'position'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'company_name' => 'Company Name',
            'position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactPost()
    {
        return $this->hasOne(ContactPost::className(), ['post_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDescriptivePost()
    {
        return $this->hasOne(DescriptivePost::className(), ['post_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostQueues()
    {
        return $this->hasMany(PostQueue::className(), ['post_id' => 'id']);
    }
}
