<?php

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table ->string('frontFirstName');
            $table->string('frontMiddleName');
            $table->string('frontLastName');
            $table->string('frontDateOfBirth');
            $table->string('frontInitials');
            $table->string('backFirstName');
            $table->string('backMiddleName');
            $table->string('backLastName');
            $table->string('backDateOfBirth');
            $table->integer('backWeight');
            $table->integer('backHeight');
            $table->string('backTimeOfBirth');
            $table->string('backParents');
            $table->string('backOther');
            $table->string('backParentsName');
            $table->text('backAddress');
            $table->longText('backAdditionalWishes');
            $table->boolean('FinishOrder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
