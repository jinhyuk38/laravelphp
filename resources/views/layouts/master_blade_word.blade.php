<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>라라벨 입문</title>
</head>
<body>

    @yield('content')

</body>
</html>
<!--
 * <5. 블레이드>
 * [5.4 템플릿 상속]
 * @yield('content') 자신을 상속받는 자식이 가진 content라고 이름을 붙인 섹션의 내용을 여기에 출력하겠다는 의미이다.
 * 자식뷰(welcome.blade.php)를 보면 @section('content') ... @endsection을 정의하고있다.
-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>라라벨 입문</title>
</head>
<body>
    @yield('style')
    @yield('script')
    @yield('content')
</body>
</html>
<!--
 * <5. 블레이드>
 * [5.4 템플릿 상속]
 * 자식뷰(welcome.blade.php)를 보면 추가한 @section('style'), @section('script')이 있다.
 * style, script 섹션이 작동하려면 @yield('style'), @yield('script')를 추가해야한다.
-->