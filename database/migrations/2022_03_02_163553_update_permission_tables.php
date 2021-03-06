<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $tableNames = config('livewire-permission.tables');
        $columnName = config('livewire-permission.column_name');
        if (empty($tableNames) || ($columnName['add_column'] && empty($columnName['description']))) {
            throw new \Exception('Error: config/permission.php not loaded or column_name undefined.');
        }
        if (!Schema::hasColumn($tableNames['permissions'], $columnName['description']) && $columnName['add_column']) {
            Schema::table($tableNames['permissions'], function (Blueprint $table) use ($columnName) {
                $table->string($columnName['description'])->nullable();
            });
        }
        if (!Schema::hasColumn($tableNames['roles'], $columnName['description']) && $columnName['add_column']) {
            Schema::table($tableNames['roles'], function (Blueprint $table) use ($columnName) {
                $table->string($columnName['description'])->nullable();
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('livewire-permission.tables');
        $columnName = config('livewire-permission.column_name');
        if (empty($tableNames) || ($columnName['add_column'] && empty($columnName['description']))) {
            throw new \Exception('Error: config/permission.php not loaded or column_name undefined.');
        }
        if (Schema::hasColumn($tableNames['permissions'], $columnName['description'] ) ) {
            Schema::table($tableNames['permissions'], function (Blueprint $table) use ($columnName) {
                $table->dropColumn($columnName['description']);
            });
        }
        if (Schema::hasColumn($tableNames['roles'], $columnName['description'])) {
            Schema::table($tableNames['roles'], function (Blueprint $table) use ($columnName) {
                $table->dropColumn($columnName['description']);
            });
        }
    }
}
