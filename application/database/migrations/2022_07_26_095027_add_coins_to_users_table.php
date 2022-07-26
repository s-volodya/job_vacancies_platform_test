<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoinsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'coins')) {
                $table->integer('coins')->after('remember_token')->default(5);
            }

            if (!Schema::hasColumn('users', 'likes')) {
                $table->bigInteger('likes')->after('coins')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'coins')) {
                $table->dropColumn('coins');
            }

            if (Schema::hasColumn('users', 'likes')) {
                $table->dropColumn('likes');
            }
        });
    }
}
