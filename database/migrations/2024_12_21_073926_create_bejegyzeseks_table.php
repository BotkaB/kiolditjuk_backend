<?php

use App\Models\Bejegyzesek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bejegyzeseks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('id')->on ('tevekenysegs');
            $table->string('osztaly_nev');
            $table->integer('allapot');
            $table->timestamps();
        });

        Bejegyzesek::create(['tevekenyseg_id'=>1,'osztaly_nev'=>'1/a', 'allapot'=>0]);
        Bejegyzesek::create(['tevekenyseg_id'=>2,'osztaly_nev'=>'1/b', 'allapot'=>0]);
        Bejegyzesek::create(['tevekenyseg_id'=>2,'osztaly_nev'=>'1/a', 'allapot'=>1]);
        Bejegyzesek::create(['tevekenyseg_id'=>3,'osztaly_nev'=>'1/a', 'allapot'=>0]);
        Bejegyzesek::create(['tevekenyseg_id'=>4,'osztaly_nev'=>'1/a', 'allapot'=>1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzeseks');
    }
};