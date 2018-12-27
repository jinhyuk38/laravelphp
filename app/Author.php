<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;
    protected $fillable = ['email', 'password'];
}

/*
 * <6. 데이터베이스와 모델>
 * [6.5 엘로퀸트 ORM]
 * 엘로퀸트는 모든 테이블에 update_at ,create_at 열이 있다고 가정하고
 * 새로운 인스턴스를테이블에 저장할 때 현재의 타임스탬프값을 할당한다.
 * 엘로퀸트의 타임스탬프 자동입력기능을 끄는 방법으로 해결 : public $timestamps = false;
 * 엘로퀸트는 데이터베이스를 대량할당으로부터 보호하기위해 두가지 방법을 제공한다(허용목록, 금지목록)
 * 허용목록방식은 $fillable 프로퍼티를 이용, 금지목록방식은 $guarded 프로퍼티를 이용한다.
 */