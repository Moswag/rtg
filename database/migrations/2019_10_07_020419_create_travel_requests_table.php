<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id');
            $table->string('name');
            $table->string('to');
            $table->string('from');
            $table->string('reason');
            $table->string('is_to_branch');
            $table->string('branch')->default(null);
            $table->string('days');
            $table->string('status');
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
        Schema::dropIfExists('travel_requests');
    }
}
