<?php

namespace App\Models\OpenCart;

use App\Models\OpenCart\Attributes\Table;

#[Table('oc_hj_import', connection: 'opencart', primaryKey: 'hj_id', incrementing: true, timestamps: false)]
class HjImport extends OpenCartModel
{
    protected $fillable = [
        'hj_id',
        'Наименование',
        'Категория',
        'Категория 1',
        'Категория 2',
        'Категория 3',
        'Категория 4',
        'Производитель',
        'Цена',
        'Описание',
        'Состав',
        'Размер',
        'Цвет',
        'Линк',
        'Плотность DEN',
        'Вид товара',
        'Состав (основной материал)',
        'Низкая талия',
        'Прозрачность',
        'Строение верха',
        'Ластовица',
        'Особенность',
        'Конструкция трусов',
        'Бретели',
        'Конструкция бюстгальтера',
        'Мысок',
        'Узор, рисунок',
        'Конструкция купальника',
        'Имитация',
        'Люрекс',
        'Структура полотна',
        'Фото',
        'Фото 2',
        'Фото 3',
    ];

    protected $casts = [
        'hj_id' => 'integer',
    ];
}
