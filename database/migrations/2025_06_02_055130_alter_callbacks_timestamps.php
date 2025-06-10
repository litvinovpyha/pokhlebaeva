<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('callbacks', function (Blueprint $table) {
            $table->timestampTz('created_at')->change();
            $table->timestampTz('updated_at')->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('callbacks', function (Blueprint $table) {
            $table->timestamp('created_at')->change();
            $table->timestamp('updated_at')->change();
        });
    }
    
};
