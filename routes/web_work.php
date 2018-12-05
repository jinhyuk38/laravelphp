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
    return view('welcome');
});
/*
 * 이 코드는 / 요청이오면 function () { ... } 부분이 동작한다는 의미이다.
 * Route::get()메서드의 두번째 인자인 클로저는 view()라는 함수를 쓰고있고,
 * 'welcome'이란 인자는 앞서본 resources/views/welcome.blade.php를 의미한다.
 */


Route::get('/', function () {
    return '<h1>Hello World</h1>';
});
/*
 * 클로저에서 view() 대신 문자열로 반환한 코드이다. 화면에 Hello World가 나타난다.
 * HTML 뷰나 문자열을 반환하는것은 컨트롤러의 일이다. 해당 코드는 컨트롤러가 할 일을 클로저가 대신한것이다.
 */


Route::get('/{foo}', function ($foo) {
    return $foo;
});
/*
 * URL 파라미터
 * 중괄호({파라미터이름})를 이용하여 참조한다.
 */


Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
});
/*
 * URL 파라미터를 선택적으로 받을 때 파라미터뒤에 물음표(?)를 붙이면된다.
 * 해당 코드는 URL 파라미터가 없을 경우 bar 문자열을 기본값으로 사용하는 예제이다.
 */


Route::pattern('foo', '[0-9a-zA-Z]{3}');
Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
});
/*
 * URL 파라미터 패턴
 * 정규표현식으로 URL 파라미터 패턴을 강제한다.
 * 해당 코드는 파라미터를 아라비아숫자, 영어 대소문자, 3글자로 한정하는 예제이다.
 */


Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
})->where('foo', '[0-9a-zA-Z]{3}');
/*
 * URL 파라미터 패턴
 * Route::pattern() 대신 where()메서드를 체인할 수 있다.
 */


Route::get('/', [
    'as' => 'home',
    function () {
        return '제 이름은 "home" 입니다.';
    }
]);
Route::get('/home', function() {
    return redirect(route('home'));
});
/*
 * 라우트 이름
 * 라우트에 이름을 부여하면 컨트롤러로직에서 다른 라우트로 리디렉션하거나, 뷰에서 다른 라우트로 이동하는 링크를 만들때 이점이있다.
 * 사용법은 Route::get() 메서드의 두 번째 인자를 배열로 전달하는데, 배열 원소에 'as' => '라우트이름'을 정의하면 된다.
 * redirect(), route()는 도우미 함수이다.
 * redirect() 함수는 리디렉션 HTTP 응답을 반환한다.
 */