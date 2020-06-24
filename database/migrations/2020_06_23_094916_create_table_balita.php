<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBalita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balita', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat'); 
            $table->float('berat_badan');
            $table->float('panjang_badan');
            $table->float('lingkar_kepala');
            $table->boolean('duduk');
            $table->boolean('tengkurap');
            $table->boolean('bicara');
            $table->boolean('merangkak');
            $table->boolean('berdiri');
            $table->boolean('berjalan');  
            $table->boolean('vitaminA');
            $table->boolean('vitaminB');
            $table->boolean('vitaminC');
            $table->boolean('vitaminD');
            $table->boolean('vitaminE');
            $table->boolean('vitaminK');
            $table->boolean('vaksin_hepatitisB');
            $table->boolean('vaksin_polio');
            $table->boolean('vaksin_bcg');
            $table->boolean('vaksin_campak');
            $table->boolean('vaksin_pentavalen');
            $table->boolean('imunisasi'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balita');
    }
}
