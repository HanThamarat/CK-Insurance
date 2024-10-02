<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetManageReserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_manage', function (Blueprint $table) {
            $table->id();  // คอลัมน์ id เป็น IDENTITY
            $table->string('Type_Asset', 50)->nullable();
            $table->string('Vehicle_OldLicense_Text', 50)->nullable();
            $table->string('Vehicle_OldLicense_Number', 50)->nullable();
            $table->string('OldProvince', 50)->nullable();
            $table->string('Vehicle_NewLicense_Text', 50)->nullable();
            $table->string('Vehicle_NewLicense_Number', 50)->nullable();
            $table->string('NewProvince', 50)->nullable();
            $table->string('Vehicle_Chassis', 50)->nullable();
            $table->string('Vehicle_New_Number', 50)->nullable();
            $table->string('Vehicle_Engine', 50)->nullable();
            $table->string('Vehicle_Color', 50)->nullable();
            $table->integer('Vehicle_CC')->nullable();
            $table->string('Vehicle_Type', 50)->nullable();
            $table->string('Vehicle_Type_PLT', 50)->nullable();
            $table->string('Vehicle_Brand', 50)->nullable();
            $table->string('Vehicle_Group', 50)->nullable();
            $table->integer('Vehicle_Years')->nullable();
            $table->string('Vehicle_Models', 50)->nullable();
            $table->string('Vehicle_Gear', 50)->nullable();
            $table->string('Vehicle_InsuranceStatus', 50)->nullable();
            $table->string('Vehicle_Class', 50)->nullable();
            $table->string('Vehicle_Companies', 50)->nullable();
            $table->string('Vehicle_PolicyNumber', 50)->nullable();
            $table->string('Choose_Insurance', 50)->nullable();
            $table->string('Choose_Act', 50)->nullable();
            $table->string('Choose_Register', 50)->nullable();
            $table->timestamps();  // เวลาสร้างและปรับปรุงข้อมูล
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_manage');
    }
}

