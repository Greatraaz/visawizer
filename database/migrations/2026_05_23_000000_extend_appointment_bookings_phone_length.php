<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $prefix = Schema::getConnection()->getTablePrefix();
        $table = $prefix.'appointment_bookings';
        DB::statement("ALTER TABLE `{$table}` MODIFY `phone` VARCHAR(90) NOT NULL");
    }

    public function down(): void
    {
        $prefix = Schema::getConnection()->getTablePrefix();
        $table = $prefix.'appointment_bookings';
        DB::statement("ALTER TABLE `{$table}` MODIFY `phone` VARCHAR(40) NOT NULL");
    }
};
