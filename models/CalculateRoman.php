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
            [['value'], 'required'],
            // [['value'], 'string', 'max' <= 9]
        ];
    }

    public function calculate() {
        if ($this->validate()) {
            
            $roman_values = array(
                'I' => 1,
                'V' => 5,
                'X' => 10,
                'L' => 50,
                'C' => 100,
                'D' => 500,
                'M' => 1000,
            );
            $roman = $this->value;
            $integer = 0;
            $prev = null;
            for ($n = strlen($roman) - 1; $n >= 0; --$n) {
                $curr = $roman[$n];
                if ( is_null($prev) ) {
                    $integer += $roman_values[$roman[$n]];
                } else {
                    $integer += $roman_values[$prev] > $roman_values[$curr] ? -$roman_values[$curr] : +$roman_values[$curr];
                }
                $prev = $curr;
            }

            return $integer;
        }
    }
}