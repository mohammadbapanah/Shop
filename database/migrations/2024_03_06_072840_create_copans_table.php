<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('amount');
            $table->tinyInteger('amount_type')->default(0)->comment('0 => percentage , 1 => price unit');
            $table->unsignedBigInteger('discount_celling')->nullable();
            $table->tinyInteger('type')->default(0)->comment('0 => common (each user can use one time) , 1 => private (one user can use one time)');
            $table->tinyInteger('status')->default(0);
            $table->timestamp('start_date')->useCurrent();
            $table->timestamp('end_date')->useCurrent();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copans');
    }
}
