<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->string('budget_number')->unique();
            $table->string('cif_id')->nullable();
            $table->string('ref_id')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('birth_month')->nullable();
            $table->string('birth_year')->nullable();
            $table->integer('document_number')->nullable();
            $table->string('document_type')->nullable();
            $table->string('phone_area_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->bigInteger('address_id')->unsigned()->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_number')->nullable();
            $table->string('address_floor')->nullable();
            $table->string('address_department')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('locality')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();

            $table->enum('payment_method', ['TA', 'BA'])->nullable();
            $table->string('cbu')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_cvv')->nullable();
            $table->string('card_expiration_month')->nullable();
            $table->string('card_expiration_year')->nullable();
            $table->string('card_owner_name')->nullable();

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
        Schema::dropIfExists('form_data');
    }
}
