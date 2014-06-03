<?php

class Profile extends Eloquent{

    public function user()
    {
        $this->belongsTo('User');
    }

} 