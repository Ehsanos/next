<?php


use App\Models\Lang;
use App\Models\Setting;

function lang($name){
    $lang= Lang::where('key',$name)->first();
    if($lang){
        return $lang->{app()->getLocale()};
    }
    return  "";
}

function getTrans($model ,$feild){



    if(app()->getLocale()=='es'){
        return $model->{$feild.'_es'};
    }
    elseif (app()->getLocale()=='en'){
       return $model->{$feild.'_en'};
    }
    elseif (app()->getLocale()=='du'){
        return $model->{$feild.'_du'};
    }
    elseif (app()->getLocale()=='tr'){
        return $model->{$feild.'_tr'};
    }
    return $model->$feild;


}

function getLangs(){
    $lang=Lang::all();
    return $lang;
}

