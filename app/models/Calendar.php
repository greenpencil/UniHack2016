<?php

class Calendar extends \Eloquent {
	protected $fillable = ['title','description','time','date', 'user_id'];

    protected $table = 'calendars';
}