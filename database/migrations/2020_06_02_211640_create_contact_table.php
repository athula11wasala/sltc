<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_contact_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string ( 'description',512 );
            $table->string ( 'symbol' );
            $table->tinyInteger ( 'type' )->nullable ()->default ( 1 )->comment = "type 1=tel, 2=email 3=address";
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
        Schema::dropIfExists('tbl_contact_info');
    }
}
