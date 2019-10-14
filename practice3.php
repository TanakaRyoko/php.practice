<?php

 //3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。

Route::group(['prefix' => 'admin'], function() {
    Route::get('XXX', 'Admin\NewsController@bbb');
});

//4.【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。
//web.phpを編集して、admin/profile/create にアクセスしたら 
//ProfileController の add Action に、admin/profile/edit にアクセスしたら 
//ProfileController の edit Action に割り当てるように設定してください。