<?php

Route::get('/', function () {
    $items = ['apple', 'banana', 'tomato'];

    return view('welcome', ['items' => $items]);
});
/*
 * <5. 블레이드>
 * [5.3 제어구조]
 * Undefined variable: items 오류로 인해 route에서 items 값을 부여한다.
 */