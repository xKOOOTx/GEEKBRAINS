<?php
// Задание 5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x; //префиксный инкремент, сначала прибавляет потом выводит
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();//1
$a2->foo();//2
$a1->foo();//3
$a2->foo();//4

/*Статические свойства принадлежат классу, а не его экземплярам.
Присваивание выполняется только один раз, при первом вызове функции
При последующих вызовах функции вместо присваивания переменная получает сохраненное ранее значение*/

