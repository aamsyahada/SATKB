<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    protected $table = 'balita';
    protected $fillable = ['nama_depan','nama_belakang','umur','jenis_kelamin','agama','alamat','berat_badan','panjang_badan','lingkar_kepala','duduk','tengkurap','bicara','merangkak','berdiri','berjalan','vitaminA','vitaminB','vitaminC','vitaminD','vitaminE','vitaminK','vaksin_hepatitisB','vaksin_polio','vaksin_bcg','vaksin_campak','vaksin_pentavalen','imunisasi'];
}
