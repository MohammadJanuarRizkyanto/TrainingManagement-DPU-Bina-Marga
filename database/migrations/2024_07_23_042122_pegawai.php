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
        DB::statement("
        CREATE VIEW pegawai_view AS
        SELECT 
            nip_pegawai,
            nama_pegawai,
            jabatan_pegawai,
            unit_kerja,
            created_at,
            updated_at
        FROM pegawai
    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS pegawai_view");
    }
};
