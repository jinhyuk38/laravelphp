<h1><?=isset($greeting) ? "{$greeting} ": "Hello"; ?> <?=$name;?></h1>
<h1>{{ isset($greeting) ? $greeting : "Hello" }} {{ $name }}</h1>
<?php
/*
 * <5. 블레이드>
 * 블레이드엔진은 우리가 만든 템플릿을 PHP스크립트로 컴파일하고, 변환된 PHP 파일을 PHP엔진이 다시 HTML로 컴파일한다.
 * [5.1 변수를 이용한 문자열보간]
 * 블레이드는 문자열보간을 위해 이중 중괄호({{ }})를 이용한다.
 * {{ $name }}은 <?=$name;?> PHP 문법과 같다.
 * 블레이드는 XSS공격으로부터 서비스를 보호하기 위해 문자열을 복간할때 특수문자를 이스케이프한다.
 * 이스케이프하지 않은 채로 문자열을 뷰에 포함하려면 {!! $name !!} 문법을 이용한다.
 * laravel 5.7 버전 이전에는 {{ $greeting or 'Hello' }} 문법이 문제가 없었는데 5.7 이상부터 해당문법 사용안한다.
 */
?>


<!-- HTML 주석 {{ $name }}을 출력 -->
{{--블레이드 주석 {{ $name }}을 출력--}}
<h1>{{ isset($greeting) ? $greeting : "Hello" }} {{ $name }}</h1>
<?php
/*
 * <5. 블레이드>
 * [5.2 주석]
 * 블레이드에서 주석은 {{--주석--}} 형식이다.
 */
?>


@if ($itemCount = count($items))
    <p>{{ $itemCount }} 종류의 과일이 있습니다.</p>
@else
    <p>아무것도 없습니다.</p>
@endif
<?php
/*
 * <5. 블레이드>
 * [5.3 제어구조 - 조건문]
 * 블레이드는 모든제어구조에 이메일기호(@)를 이용하고, end로 시작하는 키워드로 제어구조 끝을 표시한다.
 */
?>


<ul>
@foreach ($items as $item)
    <li>{{ $item }}</li>
@endforeach
</ul>
<?php
/*
 * <5. 블레이드>
 * [5.3 제어구조 - 반복문]
 * 배열형태의 데이터를 순회하면서 배열원소를 출력할때 사용한다.
 * @foreach 뿐만아니라 @for, @while도 사용가능하다.
 */
?>


<ul>
@forelse ($items as $item)
    <li>{{ $item }}</li>
@empty
    <li>아무것도없다.</li>
@endforelse
</ul>
<?php
/*
 * <5. 블레이드>
 * [5.3 제어구조 - 반복문]
 * PHP에 없는 @forelse라는 특수한 제어구조이다.
 * @if와 @foreach의 결합이다. 뷰로 넘어온 배열에 값이있으면 @forelse를 타고 아니면 @empty를 탄다.
 */
?>


@extends('layouts.master')

@section('content')
    <p>저는 자식뷰의 'content' 섹션입니다.</p>
@endsection
<?php
/*
 * <5. 블레이드>
 * [5.4 템플릿 상속]
 * @extends('layouts.master') 이 파일은 'resources/views/layouts 디렉터리 아래있는 master.blade.php 라는 부모를 상속'한다는 뜻이다.
 * 가령 부모뷰를 resources/views/default.blade.php 라고 만들었으면 @extends('default')로 쓴다.
 */
?>


@extends('layouts.master')

@section('style')
    <style>
        body {background:green; color:white;}
    </style>
@endsection

@section('content')
    <p>저는 자식뷰의 'content' 섹션입니다.</p>
@endsection

@section('script')
    <script>
        alert("테스트입니다.");
    </script>
@endsection
<?php
/*
 * <5. 블레이드>
 * [5.4 템플릿 상속]
 * @section 코드를 여러개 사용가능하다. 섹션 이름은 부모와 자식간의 약속이므로 의미있는 이름을 부여하도록 하자.
 */
?>


@extends('layouts.master')

@section('content')
    @include('partials.footer')
@endsection
<?php
/*
 * <5. 블레이드>
 * [5.5 조각 뷰 삽입]
 * @include 키워드를 이용한 조각 뷰 삽입은 마스터레이아웃, 자식 뷰의 섹션 안 또는 밖 어디서든 가능하다.
 */
?>


@extends('layouts.master')

@section('content')
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert("테스트입니다.");
    </script>
@endsection
<?php
/*
 * <5. 블레이드>
 * [5.5 조각 뷰 삽입 - 섹션의 상속]
 * 해당코드는 웰컴뷰 코드이다.
 */
?>
