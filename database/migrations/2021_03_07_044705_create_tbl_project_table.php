<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_project', function (Blueprint $table) {
            $table->increments('id');
            $table->multiLineString('technology_used');
            $table->text('team_member_id');
            $table->integer('project_status');
            $table->text('project_title');
            $table->integer('client_id');
            $table->text('project_logo');
            $table->multiLineString('project_description');
            $table->timestamp('project_start_date');
            $table->date('project_deliverable_day');
            $table->date('project_end_date');
            $table->String('project_document');
            $table->integer('total_module');
            $table->tinyInteger('isdelete');
            $table->Integer('created_by');
            $table->Integer('updated_by');
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
        Schema::dropIfExists('tbl_project');
    }
}
