<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CalculateInteger extends Model {
    public $value;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['value'], 'required'],
            // [['value'], 'integer', 'max' <= 8],
        ];
    }

    public function calculate() {
        if ($this->validate()) {

            $map = array('M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1
            );
            $roman_value = '';
            $number = $this->value;
            while ($number > 0) {
                foreach ($map as $roman => $int) {
                    if($number >= $int) {
                        $number -= $int;
                        $roman_value .= $roman;
                        break;
                    }
                }
            }
            return $roman_value;

        }
    }
}