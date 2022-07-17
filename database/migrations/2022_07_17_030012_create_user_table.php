<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->foreignId('province_id')->nullable()->constrained('province')->nullOnDelete();
            $table->foreignId('district_id')->nullable()->constrained('district')->nullOnDelete();
            $table->foreignId('user_category_id')->nullable()->constrained('user_category')->nullOnDelete();
            $table->foreignId('zone_id')->nullable()->constrained('zone')->nullOnDelete();
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
        Schema::dropIfExists('user');
    }
}
