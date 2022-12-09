<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Application;


class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Application::class)->nullable($value = true);
            $table->string('name_bank', 100);
            $table->string('city_bank');
            $table->string('owner', 255);
            $table->string('IBAN, 34');
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
        Schema::dropIfExists('accounts');
    }
}
