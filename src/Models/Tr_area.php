<?php

namespace Keling\City\Models;

use Illuminate\Database\Eloquent\Model;

class Tr_area extends Model{

    protected $table = 'tr_area';
	protected $fillable = [
        'pid',
        'shortname',
        'name',
        'merger_name',
        'level',
        'pinyin',
        'code',
        'zip_code',
        'first',
        'lng',
        'lat',
    ];
}

?>