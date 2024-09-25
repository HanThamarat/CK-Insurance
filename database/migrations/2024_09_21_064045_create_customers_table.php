<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('prefix')->nullable();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('phone');
        $table->string('phone2')->nullable();
        $table->string('id_card_number')->unique();
        // $table->string('id_card_number')->nullable();
        $table->date('expiry_date')->nullable();
        $table->date('dob')->nullable();
        $table->integer('age')->nullable();
        $table->string('gender')->nullable();
        $table->string('nationality')->nullable();
        $table->string('religion')->nullable();
        $table->string('driving_license')->nullable();
        $table->string('facebook')->nullable();
        $table->string('line_id')->nullable();
        $table->string('marital_status')->nullable();
        $table->string('spouse_name')->nullable();
        $table->string('spouse_phone')->nullable();
        $table->text('note')->nullable();
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
