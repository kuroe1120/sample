//課題1


//課題2
groupメソッドを使うと表記を省略できる。グルーピングできるので視認性も向上する。

<?php

//課題3

Route::controller(AAAController::class)->group(function() {
    Route::get('XXX', 'bbb');
});