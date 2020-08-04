<?php

namespace App\Models\Hotpark;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['_token', 'created_at', 'updated_at'];

    public function getStepFormattedAttribute() // step_formatted
    {
        if ($this->getAttribute('step') == 0) {
            $step = "Ingressos";
        } else if ($this->getAttribute('step') == 1) {
            $step = "Refeição";
        } else if ($this->getAttribute('step') == 2) {
            $step = "Lazeres";
        } else {
            $step = "Extras";
        }
        return $step;
    }

    public function getValueLowPercentAttribute() // value_low_percent
    {
        $percent = ($this->getAttribute('p_low') / 100) * $this->getAttribute('price');
        return $percent + $this->getAttribute('price');
    }

    public function getValueMediumPercentAttribute() // value_medium_percent
    {
        $percent = ($this->getAttribute('p_medium') / 100) * $this->getAttribute('price');
        return $percent + $this->getAttribute('price');
    }

    public function getValueHighPercentAttribute() // value_high_percent
    {
        $percent = ($this->getAttribute('p_high') / 100) * $this->getAttribute('price');
        return $percent + $this->getAttribute('price');
    }
}
