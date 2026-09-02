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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_superuser')
                ->default(false) //por padrao, usuarios sao criados como falso
                ->after('password'); //define onde a coluna vai aparecer na tabela
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_superuser'); //se a migratior for revertida, dropa a coluna criada

        });
    }
};
