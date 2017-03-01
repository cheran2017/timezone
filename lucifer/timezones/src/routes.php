<?php
Route::get('timezones/{timezone?}', 
  'lucifer\timezones\TimezonesController@index');
