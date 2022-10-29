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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('description', 100);
            $table->decimal('amount', 11, 2, true);
            $table->foreignId('share_type_id')->constrained();
            $table->foreignId('user_id')->constrained()->comment('User that paid this transaction.');
            $table->foreignId('payment_id')->constrained();
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
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['payment_id']);
            $table->dropForeign(['share_type_id']);
        });

        Schema::dropIfExists('transactions');
    }
};
