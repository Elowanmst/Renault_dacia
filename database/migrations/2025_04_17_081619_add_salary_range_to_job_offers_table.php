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
        Schema::table('job_offers', function (Blueprint $table) {
            $table->dropColumn('salary'); // Supprime la colonne salary de type decimal
            $table->text('salary_description')->nullable()->after('location'); // Ajoute une colonne salary_description de type text
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_offers', function (Blueprint $table) {
            $table->decimal('salary', 10, 2)->nullable()->after('location'); // Réintroduit la colonne salary de type decimal
            $table->dropColumn('salary_description'); // Supprime la colonne salary_description
        });
    }
};
