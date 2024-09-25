<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetManageTable extends Migration
{
    public function up()
    {
        Schema::create('asset_manage', function (Blueprint $table) {
            $table->id();
            $table->string('Type_Asset')->nullable();
            $table->string('Vehicle_OldLicense_Text')->nullable();
            $table->string('Vehicle_OldLicense_Number')->nullable();
            $table->string('OldProvince')->nullable();
            $table->string('Vehicle_NewLicense_Text')->nullable();
            $table->string('Vehicle_NewLicense_Number')->nullable();
            $table->string('NewProvince')->nullable();
            $table->string('Vehicle_Chassis')->nullable();
            $table->string('Vehicle_New_Number')->nullable();
            $table->string('Vehicle_Engine')->nullable();
            $table->string('Vehicle_Color')->nullable();
            $table->integer('Vehicle_CC')->nullable();
            $table->string('Vehicle_Type')->nullable();
            $table->string('Vehicle_Type_PLT')->nullable();
            $table->string('Vehicle_Brand')->nullable();
            $table->string('Vehicle_Group')->nullable();
            $table->integer('Vehicle_Years')->nullable();
            $table->string('Vehicle_Models')->nullable();
            $table->string('Vehicle_Gear')->nullable();
            $table->string('Vehicle_InsuranceStatus')->nullable();
            $table->string('Vehicle_Class')->nullable();
            $table->string('Vehicle_Companies')->nullable();
            $table->string('Vehicle_PolicyNumber')->nullable();
            $table->string('Choose_Insurance')->nullable();
            $table->string('Choose_Act')->nullable();
            $table->string('Choose_Register')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asset_manage');
    }
}
