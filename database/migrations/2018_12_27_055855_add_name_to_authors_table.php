<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->string('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}

/*
 * <7. 데이터베이스 마이그레이션>
 * [7.4 열추가]
 * Schema::table() 메서드를 사용하여 테이블 열을 추가한다.
 * nullable()은 NULL을 허용한다는 뜻이다.
 */