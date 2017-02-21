<?php
/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Date: 02/11/16
 * Time: 01:47
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\template\models;


/**
 * @property mixed message
 * @property mixed title
 * @property mixed placeholders
 */
class Template extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%template}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'message'], 'required'],
            [['message'], 'string'],
            [['title', 'placeholders'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'placeholders' => 'Плейсхолдеры',
            'message' => 'Сообщение',
        ];
    }

    /**
     * Get placeholders
     * @return array|mixed
     */
    public function getPlaceholderList()
    {
        $data = json_decode($this->placeholders);
        if ($data) {
            $data = array_map(function ($e) {
                return '{' . $e . '}';
            }, $data);
            return $data;
        }
        return [];
    }

    /**
     * Replace text with placeholders
     * 
     * @param $templateId
     * @param $params
     * @return mixed
     */
    public static function replace($templateId, $params)
    {
        /** @var Template $template */
        $template = Template::findOne($templateId);

        if($template){
            $message = $template->message;
            foreach ($params as $param => $value) {
                $param = '{' . $param . '}';
                $message = str_replace($param, $value, $message);
            }
        }
        else{
            $message = 'Template '.$templateId .' not found';
        }

        
        return $message;
    }
}