<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "descriptive_post".
 *
 * @property int $post_id
 * @property string $position_description
 * @property int $salary
 * @property string $starts_at
 * @property string $ends_at
 *
 * @property Post $post
 */
class DescriptivePost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'descriptive_post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'position_description', 'salary', 'starts_at', 'ends_at'], 'required'],
            [['post_id', 'salary'], 'integer'],
            [['position_description'], 'string'],
            [['starts_at', 'ends_at'], 'safe'],
            [['post_id'], 'unique'],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'position_description' => 'Position Description',
            'salary' => 'Salary',
            'starts_at' => 'Starts At',
            'ends_at' => 'Ends At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }
}
