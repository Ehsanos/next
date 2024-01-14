<?php
namespace App\Enums;

enum UserTypeEnum:string
{
    case Admin = 'admin';
    case Delegte = 'delegte';
    case Agent = 'agent';
    case User = 'user';


    public function color(): string
    {

        return match ($this) {
            self::Admin => 'danger',
            self::Delegte => 'success',
            self::Agent => 'primary',
            self::User => 'warning',
        };

    }


    public function getValue(): string
    {

        return match ($this) {
            self::Admin => 'أدمن',
            self::Delegte => 'مندوب',
            self::Agent => 'وكيل',
            self::User => 'مستخدم',
        };

    }
//        static  function  getValues (){
//        return collect([
//            self::Agent->value,
//            self::Delegte->value,
//            self::Admin->value,
//
//        ]);
//    }
}

