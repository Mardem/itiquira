<?php

namespace App\Models\Hotpark;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable = ['type', 'start', 'end', 'title', 'allDay'];
    protected $appends = ['overlap', 'rendering', 'color', 'className'];

    public function getTypeFormattedAttribute() // type_formatted
    {
        if ($this->getAttribute('type') == 0) {
            $type = 'Baixa temporada';
        } else if ($this->getAttribute('type') == 1) {
            $type = 'Média temporada';
        } else if($this->getAttribute('type') == 2) {
            $type = 'Alta temporada';
        } else {
            $type = 'Em manutenção';
        }
        return $type;
    }

    public function getColorAttribute() // className
    {
        if ($this->getAttribute('type') == 0) {
            $color = '#B0C800';
        } else if ($this->getAttribute('type') == 1) {
            $color = '#009bdd';
        } else if($this->getAttribute('type') == 2) {
            $color = '#ec8600';
        } else {
            $color = '#82f2ff';
        }
        return $color;
    }
    public function getClassNameAttribute() // className
    {
        if ($this->getAttribute('type') == 0) {
            $type = 'baixaTemporada';
        } else if ($this->getAttribute('type') == 1) {
            $type = 'mediaTemporada';
        } else {
            $type = 'altaTemporada';
        }
        return $type;
    }

    public function getOverlapAttribute() // className
    {
        return true;
    }
    public function getRenderingAttribute() // className
    {
        return "background";
    }

    public function getDateAttribute()
    {
        return $this->getAttribute('day');
    }

    public function getStartFormattedAttribute() // start_formatted
    {
        try {
            $date = new Carbon($this->getAttribute('start'));
            return $date->format('d/m/Y');
        } catch (Exception $e) {
            return "Não foi possível formatar essa data";
        }
    }

    public function getEndFormattedAttribute() // end_formatted
    {
        try {
            $date = new Carbon($this->getAttribute('end'));
            return $date->format('d/m/Y');
        } catch (Exception $e) {
            return "Não foi possível formatar essa data";
        }
    }
}
