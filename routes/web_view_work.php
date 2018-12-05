<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('errors.503');
});
/*
 * 뷰 반환
 * 라라벨의 뷰 파일들은 resources/views 디렉터리에 있다.
 * 규칙 - 하위 디렉터리에 있는 뷰 파일은 점(.)으로 참조할 수 있다(/를 이용해도 무방).
 * 규칙 - 뷰 파일은 파일_이름.blade.php와 같은 모양이다(라라벨의 템플릿 문법을 사용하지 않는다면 .php 파일도 쓸 수 있다).
 * 규칙 - .blade.php 없이 파일_이름 만으로 인자를 넘긴다.
 */


Route::get('/', function () {
    return view('welcome')->with('name', 'Foo');
});
/*
 * 데이터 바인딩
 * view()함수에 아무런 인자도 넘기지 않으면 뷰 인스턴스를 얻을 수 있다.
 * 이 인스턴스에 with() 메서드를 체인하여 데이터를 바인딩할 수 있다.
 */


Route::get('/', function () {
    return view('welcome')->with([
        'name' => 'banana',
        'greeting' => '안녕?',
    ]);
});
/*
 * 데이터 바인딩
 * with() 메서드에 배열을 이용하여 여러 개의 데이터를 넘긴다.
 */


Route::get('/', function () {
    return view('welcome', [
        'name' => 'apple',
        'greeting' => '안녕?',
    ]);
});
/*
 * 데이터 바인딩
 * view() 함수 이용
 * 데이터를 view() 함수의 두번째 인자로 넘긴다.
 */


