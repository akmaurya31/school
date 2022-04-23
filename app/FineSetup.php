<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FineSetup extends Model
{
	protected $table = 'fine_setups';
     protected $fillable=['head','fine_type','fine_value','on_everyday','up_to','fee_type','amount_percent','fine_month'];

      public function save_feefine_data($arr)
    {
        FineSetup::create($arr);
    }

     public function get_fine_data()
    {
        return FineSetup::get();
    }
}
