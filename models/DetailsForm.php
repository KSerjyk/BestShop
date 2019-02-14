<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Html;

/**
 * ContactForm is the model behind the contact form.
 */
class DetailsForm extends Model
{
    public $comment;
    public $verifyCode;
    public $quantity;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['comment'], 'required',
                'message' => 'Поле "{attribute}" не може бути порожнім'],
           // ['verifyCode', 'required', 'message' => 'Невірна каптча'],
            // name, email, subject and body are required
            [['comment'], 'required'],
            // verifyCode needs to be entered correctly
           // ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'comment' => 'Повідомлення',
            'verifyCode' => 'Каптча',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @return bool whether the model passes validation
     */
    public function leaveComment()
    {
        if ($this->validate()) {
            $leaveComment = new Comment();
            $leaveComment->comment = $this->comment;
            $leaveComment->prod_id = Yii::$app->request->get('productId');
            $leaveComment->user_id = Yii::$app->user->id;
            $leaveComment->save();
            return true;
        }
        return false;
    }
}
