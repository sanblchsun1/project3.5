<?php echo "Hello World<br>";
//Практическое задание: Массивы в PHP
//Ответы на задания прикрепите в виде ссылки на pastebin или GitHub
echo "Задача 1: Создание простого массива<br>";
//Создайте массив с именами нескольких ваших друзей и выведите его на экран.
//Задача:
//1. Создайте массив с как минимум 4 именами.
//2. Выведите каждое имя на новой строке.
//Подсказка:
//Используйте простой массив и цикл foreach для вывода элементов.
$array_friends = ["Иван", "Люська", "Мария", "Олег"];
foreach ($array_friends as $friend) {
    echo $friend. "<br>";
}

echo "Задача 2: Индексы массива<br>";
//Создайте массив чисел и получите значение элемента по индексу.
//Задача:
//1. Создайте массив из 5 произвольных чисел.
//2. Выведите на экран элемент с индексом 2.
//Подсказка:
//Используйте нумерацию индексов массива (индексация начинается с 0).
$array_numbers = [1, 2, 3, 4, 5];
echo $array_numbers[2]. "<br>";

echo "Задача 3: Ассоциативный массив<br>";
//Создайте ассоциативный массив, который будет содержать информацию о вашем друге: имя,
//возраст и город.
//Задача:
//1. Создайте массив с ключами name , age и city .
//2. Выведите на экран имя и возраст друга.
//Подсказка:
//Используйте ассоциативный массив, где ключи — это строковые значения, например, name
//=> "Иван" .
$array_friend = ["name" => "Иван", "age" => 30, "city" => "Москва"];
echo $array_friend["name"]. " ". $array_friend["age"]. "<br>";

echo "Задача 4: Массивы с циклами<br>";
//У вас есть массив чисел. Выведите все числа из массива, которые больше 10.
//Задача:
//1. Создайте массив из как минимум 5 чисел.
//2. Напишите цикл, который выводит на экран только те числа, которые больше 10.
//Подсказка:
//Используйте цикл foreach и оператор сравнения > .
$array_numbers = [11, 12, 13, 14, 15];
foreach ($array_numbers as $number) {
    if ($number > 10) {
        echo $number. "<br>";
    }
}
echo "Задача 5: Работа с массивами функций<br>";
//Создайте массив чисел и посчитайте их сумму.
//Задача:1. Создайте массив из 5 чисел.
//2. Используйте встроенную функцию PHP для нахождения суммы всех чисел.
//Подсказка:
//PHP имеет встроенную функцию array_sum() для суммирования элементов массива.
$array_numbers = [1, 2, 3, 4, 5];
$sum = array_sum($array_numbers);
echo "Сумма чисел: ". $sum. "<br>";

//Далее представлены задачи повышенной сложности. Достаточно решить 1 из них
echo "Задача 6: Учет товаров в магазине<br>";
//Вам необходимо создать систему учета товаров в магазине. Каждый товар должен храниться
//в виде ассоциативного массива с ключами:
//name — название товара
//price — цена товара
//quantity — количество на складе
//Задача:
//Подсказка:
//Используйте ассоциативные массивы для хранения информации о каждом товаре. Внутри
//функций манипулируйте массивами с товарами через циклы и ключи.
//1. Создайте массив товаров (как минимум 5 товаров).

$array_products = [
    ["name" => "Плитка", "price" => 500, "quantity" => 100],
    ["name" => "Стол", "price" => 1000, "quantity" => 50],
    ["name" => "Стул", "price" => 500, "quantity" => 150],
    ["name" => "Столешница", "price" => 700, "quantity" => 80],
    ["name" => "Книга", "price" => 300, "quantity" => 120]
    ];
//2. Напишите функцию, которая выводит список всех товаров с их названиями и ценами.
function print_products($products) {
    foreach ($products as $product) {
        echo "Название: ". $product["name"]. ", цена: ". $product["price"]. "<br>";
    }
}
//3. Напишите функцию, которая добавляет новый товар в массив.
function add_product($products, $name, $price, $quantity) {
    $products[] = ["name" => $name, "price" => $price, "quantity" => $quantity];
}
//4. Напишите функцию, которая обновляет количество товара на складе.
function update_quantity($products, $name, $quantity) {
    foreach ($products as &$product) {
        if ($product["name"] == $name) {
            $product["quantity"] += $quantity;
            break;
        }
    }
}

echo "Задача 7: Расчет среднего балла студентов<br>";
//У вас есть массив студентов, каждый студент представлен в виде ассоциативного массива
//с полями:
//name — имя студента
//grades — массив оценок студента
//Подсказка:
//Используйте функции для расчета среднего значения элементов массива. Для поиска
//студента с лучшими оценками можно использовать переменные для сравнения.
//Задача:
//1. Создайте массив из как минимум 3 студентов.
$array_students = [
    ["name" => "Иван", "grades" => [8, 9, 10, 7, 8]],
    ["name" => "Петр", "grades" => [9, 8, 9, 10, 9]],
    ["name" => "Алексей", "grades" => [7, 8, 9, 8, 8]]
    ];
//2. Напишите функцию, которая выводит средний балл каждого студента.

function print_average_grade($students) {
    foreach ($students as $student) {
        $average_grade = array_sum($student["grades"]) / count($student["grades"]);
        echo "Имя: ". $student["name"]. ", средний балл: ". $average_grade. "<br>";
    }
}
//3. Напишите функцию, которая выводит имя студента с самым высоким средним баллом.
function find_student_with_highest_average($students) {
    $highest_average_grade = 0;
    $student_with_highest_average = null;
    foreach ($students as $student) {
        $average_grade = array_sum($student["grades"]) / count($student["grades"]);
        if ($average_grade > $highest_average_grade) {
            $highest_average_grade = $average_grade;
            $student_with_highest_average = $student;
        }
    }
    echo "Студент с самым высоким средним баллом: ". $student_with_highest_average["name"]. "<br>";
}
echo "Задача 8: Поиск дубликатов в массиве<br>";
//Предположим, у вас есть массив чисел. Вам нужно найти и вывести все повторяющиеся
//числа.
//Задача:
//Подсказка:
//Можно использовать вспомогательный массив для хранения уже встреченных элементов ипроверять, встречалось ли число ранее.
//1. Создайте массив с произвольными числами, в котором есть повторяющиеся элементы.
$array_numbers = [1, 2, 3, 4, 4, 5, 6, 6, 7, 8, 9];
//2. Напишите функцию, которая находит все дубликаты в массиве и выводит их.
function find_duplicates($array) {
    $duplicates = [];
    $visited_numbers = [];
    foreach ($array as $number) {
        if (in_array($number, $visited_numbers)) {
            $duplicates[] = $number;
        } else {
            $visited_numbers[] = $number;
        }
    }
    return $duplicates;
}
echo "Задача 9: Объединение и сортировка массивов<br>";
//У вас есть два массива с числами. Нужно объединить их в один и отсортировать по
//возрастанию.
//Подсказка:
//PHP имеет встроенные функции для объединения массивов и сортировки, но попробуйте
//реализовать сортировку вручную через цикл для практики.
//Задача:
//1. Создайте два массива с числами.
$number_array1 = [1, 2, 3, 4, 5];
$number_array2 = [6, 7, 8, 9, 10];
//2. Напишите функцию, которая объединяет оба массива в один.
function merge_arrays($array1, $array2) {
    $merged_array = array_merge($array1, $array2);
    return $merged_array;
}
//3. Напишите функцию, которая сортирует объединенный массив по возрастанию.
function sort_array($array) {
    rsort($array);
    return $array;
}
echo "Задача 10: Фильтрация массива<br>";
//У вас есть массив чисел. Вам нужно создать функцию, которая отфильтрует массив и
//вернет только четные числа.
//Подсказка:
//Для проверки четности числа используйте оператор % . Внутри функции можете пройтись
//по массиву с помощью цикла и проверять каждое число.
//Задача:
//1. Создайте массив с числами.
$number_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//2. Напишите функцию, которая отфильтровывает все нечетные числа и возвращает
//массив только с четными числами.
function filter_even_numbers($array) {
    $even_numbers = [];
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $even_numbers[] = $number;
        }
    }
    return $even_numbers;
}
//
?>