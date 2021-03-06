<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "org".
 *
 * @property int $id
 * @property string $title
 * @property string $reporter
 * @property string $people
 * @property string $remark
 */
class OrgSearch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'org';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['title', 'reporter', 'people', 'remark'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'reporter' => 'Reporter',
            'people' => 'People',
            'remark' => 'Remark',
        ];
    }
}
