<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('subject');
            $table->text('description');

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreignUuid('type_id')->references('id')->on('sysparams')->comment('Contract Type');
            $table->foreignUuid('client_id')->references('id')->on('contacts');

            $table->char('value_contract', 12, 2);
            $table->char('base_currency', 3)->default('USD')->comment('USD, JPY, EUR, IDR');
            $table->char('exchange_currency', 3)->default('USD')->comment('USD, JPY, EUR, IDR');
            $table->char('exchange_value', 12, 2)->default(0);

            $table->text('address_alternative')->nullable()->comment('client alternative address');
            $table->text('note')->nullable();
            $table->enum('status', ['draft', 'active'])->default('active');
            $table->json('data')->nullable();

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
        Schema::dropIfExists('contracts');
    }
};
