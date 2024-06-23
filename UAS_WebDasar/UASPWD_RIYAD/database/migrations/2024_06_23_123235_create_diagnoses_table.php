<?php
// database/migrations/YYYY_MM_DD_create_diagnoses_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosesTable extends Migration
{
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->string('diagnosis');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnoses');
    }
}