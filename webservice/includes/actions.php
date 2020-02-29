<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "name" => "Pizza",
            "kitchen" => "Italiaans",
        ],
        [
            "id" => 2,
            "name" => "Boerenkool",
            "kitchen" => "Nederlands",
        ],
        [
            "id" => 3,
            "name" => "Lasagna",
            "kitchen" => "Italiaans",
        ],
        [
            "id" => 4,
            "name" => "Kebab",
            "kitchen" => "Turks",
        ],
        [
            "id" => 5,
            "name" => "Paella",
            "kitchen" => "Spaans",
        ],
        [
            "id" => 6,
            "name" => "Aardappel Pannekoek",
            "kitchen" => "Duits",
        ],
        [
            "id" => 7,
            "name" => "Patat",
            "kitchen" => "Nederlands",
        ],
        [
            "id" => 8,
            "name" => "Babi Panggang",
            "kitchen" => "Indonesisch",
        ],
        [
            "id" => 9,
            "name" => "Pasta",
            "kitchen" => "Italiaans",
        ],
        [
            "id" => 10,
            "name" => "Turkse Pizza",
            "kitchen" => "Turks",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Stop het in de oven en gaan met die banaan.. ehh pizza!",
            "tags" => ['kaas', 'oven', 'tomatensaus']
        ],
        2 => [
            "recipe" => "Een echt nederlands recept",
            "tags" => ['unox', 'gezond', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Heel lekker als je oma het maakt",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Altijd na twaalven in de stad",
            "tags" => ['kapsalon', 'lekker', 'vlees']
        ],
        5 => [
            "recipe" => "Spaciaal voor een vakantiedag in spanje",
            "tags" => ['vis', 'spaans', 'vakantie']
        ],
        6 => [
            "recipe" => "Volgens het speciale 'van der Vegt' recept",
            "tags" => ['aardappel', 'pannekoek', 'van der vegt', 'duits']
        ],
        7 => [
            "recipe" => "Met behulp van de hoogste vorm van kookkunsten: de frietuur",
            "tags" => ['patat', 'friet', 'frieturen', 'vet']
        ],
        8 => [
            "recipe" => "Bij de afhaal chinees",
            "tags" => ['chinees', 'indonesisch', 'vlees']
        ],
        9 => [
            "recipe" => "Happy Italy!",
            "tags" => ['pasta', 'italiaans', 'pizza']
        ],
        10 => [
            "recipe" => "Lekker voor tijdens de lunch",
            "tags" => ['turks', 'lunch', 'pizza']
        ],
    ];

    return $tags[$id];
}
