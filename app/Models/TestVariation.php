<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestVariation extends Model
{
    use HasFactory;

    protected $table = 'tests_variations';
    protected $primaryKey = 'id_tests_variations';

    protected $guarded = ['id_tests_variations'];

    public function test()
    {
        return $this->belongsTo(Test::class,'test_id','id_test');
    }

    public function variation()
    {
        return $this->belongsTo(Variation::class,'variation_id','id_variation');
    }

    public function userSessions()
    {
        return $this->hasMany(UserSession::class,'test_variation_id','id_tests_variations');
    }

}
