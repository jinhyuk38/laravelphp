<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255);
            $table->string('password', 60);
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
        Schema::dropIfExists('authors');
    }
}

/*
 * <7. 데이터베이스 마이그레이션>
 * [7.1 마이그레이션 만들기]
 * 데이터베이스 마이그레이션은 테이블 스키마의 버전관리이다(이력관리).
 * up() : 마이그레이션 실행하는 메서드, down() : 롤백을 위한 메서드
 * increments(string $column) 메서드는 자동 증가 기본 키 열을 만든다.
 * timestamps() 메서드는 created_at과 updated_at 타임스탬프 열을 만든다.
 * Schema::create(string $table, \Closure $callback) 테이블을 만든다.
 * Schema::dropIfExists(string $table) 테이블을 지운다.
 */