<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/yyyy_mm_dd_add_title_to_links_table.php

    public function up()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->string('title')->nullable()->after('url');
        });
    }

    public function down()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }

};
