<?php
namespace App\Enums;

enum OrderStatusEnum:string
{
    case Wait = 'wait';
    case Success = 'success';
    case Cancelled = 'cancelled';




    public function getValue(): string
    {

        return match ($this) {
            self::Success => 'نجاح',
            self::Cancelled => 'ملغي',
            self::Wait => 'انتظار',
        };

    }

    public function getColor(): string
    {

        return match ($this) {
            self::Success => 'success',
            self::Cancelled => 'danger',
            self::Wait => 'secondary',
        };

    }

    public function getIcon(): string
    {

        return match ($this) {
            self::Success => 'heroicon-o-check-circle',
            self::Cancelled => 'heroicon-o-x-circle',
            self::Wait => 'heroicon-o-clock',
        };

    }

}

