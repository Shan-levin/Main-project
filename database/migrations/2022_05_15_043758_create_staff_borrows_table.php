<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_borrows', function (Blueprint $table) {
            $table->char('Book_Id', 10)->primary();
            $table->char('User_Id', 10);
            $table->foreign('User_Id')->references('Staff_Id')->on('staff');
            $table->String('Book_Name', 200);
            $table->date('Borrow_Date');
            $table->date('Return_Date');
            $table->date('New_Return_Date');
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
        Schema::dropIfExists('staff_borrows');
    }
}
