<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersVolunteerRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers_volunteer_roles', function (Blueprint $table) {
            $table->foreignId('volunteer_id');
            $table->foreignId('volunteer_role_id');

            $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade');
            $table->foreign('volunteer_role_id')->references('id')->on('volunteer_roles')->onDelete('cascade');

            $table->primary(['volunteer_id', 'volunteer_role_id'], 'volunteers_id_volunteer_roles_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers_volunteer_roles');
    }
}
