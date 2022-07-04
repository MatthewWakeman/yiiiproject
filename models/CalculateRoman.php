<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CalculateRoman extends Model {
    public $value;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['value'], 'required']
        ];
    }

    public function calculate() {
        if ($this->validate()) {
            $this->value += 1;
            return $this->value;
        }
    }
}