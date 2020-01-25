<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('facilities')->truncate();

        Schema::table('facilities', function(Blueprint $table) {
            // カラムの型の変更
             $table->bigIncrements('id')->change();
            // カラムの追加
            $table->string('facility_id',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        $table->stirng('id',4);
        $table->dropColumn('facility_id',4);
    }
}
