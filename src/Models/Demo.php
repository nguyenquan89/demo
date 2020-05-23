<?php

namespace Sudo\Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    public static function demoText() {
    	return 'demo models';
    }
}
