<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    public const APPL_STATUS = [
        'not_send' => 'not_send',
        'approved' => 'approved',
        'pending' => 'pending',
        'waiting' => 'waiting',
        'blocked' =>'blocked'
    ];

    public const BEREICH = [
        'Bildung' => 'Bildung',
        'Menschen' => 'Menschen',
        'Tierschutz' => 'Tierschutz',
        'Umwelt' => 'Umwelt'
    ];

    public function up()
    {/**
     * Status
     *
     * not_send = noch nicht eingereicht
     * pending = Wartet auf Antwort der Stiftun
     * waiting = Wartet auf Antwort vom Benutzer
     * blocked = abgelehnt
     * approved = bewilligt
     */

        Schema::create('applications', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class);
            $table->string('appl_status')->default('not_send');
            $table->string('bereich');
            $table->longText('comment');
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
        Schema::dropIfExists('applications');
    }
};
