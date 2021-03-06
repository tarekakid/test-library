<?php

namespace Database\Seeders;

use App\Models\Materials;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'type' => 'Книга',
                'category' => 'Саморазвитие / Личная эффективность',
                'name' => 'Путь джедая',
                'author' => 'Максим Дорофеев',
                'description' => 'Универсального рецепта успешной и продуктивной жизни для всех нет, не было и не будет. Нужно создавать свой. И единственный способ сделать это – проводить эксперименты над собой, – считает Максим Дорофеев, автор бестселлера «Джедайские техники». Здесь вы найдете инструменты самонаблюдения и конструирования личного рецепта успеха: мысли, однократные действия-«вакцины», регулярные практики и индикаторы, из комбинации которых и получится тот уникальный, подходящий именно вам метод продуктивности.',
            ],
            [
                'type' => 'Сайт/Блог',
                'category' => 'Разработка/PHP',
                'name' => 'Руководство по PHP',
                'author' => 'Rasmus Lerdorf',
                'description' => 'PHP - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.',
            ],
            [
                'type' => 'Сайт/Блог',
                'category' => 'Разработка/PHP',
                'name' => 'Полное руководство по Yii 2.0',
                'author' => 'Александр Макаров',
                'description' => 'Yii – это высокопроизводительный компонентный PHP фреймворк.',
            ],
            [
                'type' => 'Видео',
                'category' => 'Разработка/PHP',
                'name' => 'Релиз Laravel 9: обзор новых функций',
                'author' => 'Просто о Laravel. CutCode',
                'description' => 'Обзор долгожданного обновления Laravel 9, которое состоялось 8 февраля 2022 года. Проведем установку, посмотрим что поменялось в структуре. Гайдлайн изменений и нововведений.',
            ],
        ];
        foreach($materials as $key => $value)
        {
            Materials::create($value);
        }
    }
}
