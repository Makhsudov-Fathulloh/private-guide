<?php

$title = "OOP Construct Destruct Encapsulation (Access modifier)";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/oop/index.php">OOP</a></b></li>
    </ul>

    <ul>
        <li><b class="topic">OYD</b> - obyektga yo'naltirilgan dasturlash .</li>
        <li><b class="topic">OOP</b> - Object oriented programming.</li>
        <li><b class="topic">OOP</b> - dasturlashning mahsus usuli bo'lib, aniq tuzilmani taqdim etadi.
            Odatdagi dasturlashdan ko'ra yaxshi va tez ishlashini taminlaydi, kodlar takrorlanishini oldini oladi
            (DRY Dont Repeat Yourself).
            Kodlardi saqlash, o'zgartirish, debug qilishni osonlashtiradi.
            Dasturni obyektka yonaltirgan (yordamida) holda tez va oson bajaradi.
        </li><br>

        <h3>OOP tamoyillari: Encapsulation, Inheritance, Polymorphism, Abstraction</h3>

        <li><b class="topic">object</b> - classning namunasi.</li>
        <img src="/oop/img/1/1.png" alt=""> <br><br>

        <li><b class="topic">class</b> - obyektlar uchun shablo'n.</li>
        <li><b class="topic">class (sinf, toifa)</b> - obyektlarning qanday vazifa bajarishi, nimalardan tashkil
            topkanligi,
            qanday xususiyatlarga ega ekanligini o'zida saqlovchi to'plam. Obyektlar yaratilganda sinfning barcha
            xususiyatlari
            va hatti-harakatlarini meros qilib oladi. Ammo xar-bir obyekt turli xil mulk qiymatlariga ega bo'ladi. <b
                    class="red">class</b>
            ikki elementdan tashkil topkan: methods (function), attributes (property, field).
        </li><br><br>

        <img src="/oop/img/1/2.png" alt=""> <br><br>
        <img src="/oop/img/1/3.png" alt=""> <br><br>
        <img src="/oop/img/1/4.png" alt=""> <br><br><br>

        <li><b class="topic">attributes (property, field)</b> - class ichidagi o'zgaruvchi.</li>
        <li><b class="topic">methods (function)</b> - class ichidagi function.</li>
        <li><b class="topic">$this</b> - class ichidagi method va attributlarga murojat qilishda va ichiga kirish uchun
            ishlatiladi.
            <b>Static</b> turdagi methodlar ichida <b class="red">$this</b>dan foydalanish imkoni yoq.
        </li><br>

        <div class="pre"><br>
            <pre>
                class Car {
                    // property attribute
                    public $model;
                    public $year;

                    // methods
                    public function drive() {
                        return 'driving';
                    }
                    public function setModel($model) {
                        $this->model = $model;
                    }
                }

                $bmw = new Car();
                $bmw->setModel('BMW-M322');
                $bmw->year = '2019';

                echo $bmw->model;
                var_dump($bmw);
            </pre>
        </div><br>

        <li><b class="topic">Constructor</b> - __construct() object yaratilganda, object attributlarini automatic ishka tushurib beruvchi function.</li><br>

        <div class="pre"><br>
            <pre>
                class Fruit
                {
                    public $name;
                    public $color;

                    function __construct($name, $color)
                    {
                        $this->name = $name;
                        $this->color = $color;
                    }

                    function get_name()
                    {
                        return $this->name;
                    }

                    function get_color()
                    {
                        return $this->color;
                    }
                }

                $apple = new Fruit("Apple", "red");
                echo $apple->get_name();
                echo "<br>";
                echo $apple->get_color();
            </pre>
        </div><br>

        <li><b class="topic">Desstructor</b> - __destruct() ob'ekt yo'q qilinganda yoki skript to'xtatilganda yoki oxirida destruktor chaqiriladi.
            Agar siz __destruct() funksiyasini yaratsangiz, PHP avtomatik ravishda skript oxirida uning funksiyasini chaqiradi.</li><br>

        <div class="pre"><br>
            <pre>
                class FruitDestruct {
                    public $name;
                    public $color;

                    function __construct($name, $color)
                    {
                        $this->name = $name;
                        $this->color = $color;
                    }

                    function __destruct()
                    {
                        echo "The fruit is {$this->name} and the color is {$this->color}.";
                    }
                }

                $apple = new FruitDestruct("Apple", "red");
            </pre>
        </div><br>

        <li><b class="topic">Encapsulation</b> - class dan foydalanishni berkitish va ichki method lar orqali u xususiyatka murojat qilish.</li><br>
        <img src="/oop/img/1/5.png" alt=""> <br><br>
        <img src="/oop/img/1/6.png" alt=""> <br><br>
        <img src="/oop/img/1/7.png" alt=""> <br><br><br>

        <li><b class="topic">Access modifiers</b> - ruxsat modifiqatorlar, 3 hil korinishi mavjud.</li>
        <ol>
            <li><b class="topic">public</b> - standart (default), metod va hususiyatlar kirish ommaviy (ochiq).</li>
            <li><b class="topic">protected</b> - tashqaridan ximoyalangan, yopiq, class ichida va extend orqali meros
                olib ishlatish mumkun bo'lgan AM.
            </li>
            <li><b class="topic">protected</b> - shaxsiy, mutlaqo yopiq, faqat class ichida ishlatiladi.</li>
        </ol><br>

        <div class="pre"><br>
            <pre>
                class Car {
                    public $model;
                    protected $year;
                    private $km;

                    public function __construct($model, $year, $km) {
                        $this->model = $model;
                        $this->year = $year;
                        $this->km = $km;
                    }

                    public function drive() {
                        return 'driving';
                    }

                    public function getYear() {
                        return $this->year;
                    }

                    public function getKm() {
                        return $this->km;
                    }
                }

                $bmw = new Car('BMW-M322', 2022, 10000);

                echo $bmw->year;
                var_dump($bmw);

                class ElectricCar extends Car {
                    public function getYear() {
                        return $this->year;
                    }
                }

                $electrCar = new ElectricCar('iXM4', 2024, 0)



                //-----------------------------------------------//
                class StudentPublic {
                    public $name;
                }

                $student = new StudentPublic;
                $student->name = "John";
                echo $student->name;


                //-----------------------------------------------//
                class StudentProtected {
                protected $name;

                    public function getName() {
                        return $this->name; // $name value ni oladi
                    }

                    public function setName($name) {
                        $this->name = $name; // ozidagi $name ga tashqaridan kelayotkan $name ni tenglaydi
                    }
                }

                $student = new StudentProtected;
                $student->setName("John");
                echo $student->getName();

                -----------------------------------------------

                class StudentExtends extends StudentProtected {
                    public function userProtected() {
                        $this->name = "John";
                    }
                }

                $userProtected = new StudentExtends();
                echo $userProtected->userProtected();


                //-----------------------------------------------//
                // Private attribute ni inheritance qilib olib bolamaydi, faqatkina ozi obyeqtida ishlatilasdi
                class StudentPrivate {
                private $name;

                    public function getName() {
                        return $this->name; // $name value ni oladi
                    }

                    public function setName($name) {
                        $this->name = $name; // ozidagi $name ga tashqaridan kelayotkan $name ni tenglaydi
                    }
                }

                $student = new StudentPrivate;
                $student->setName("John");
                echo $student->getName();
            </pre>
        </div><br>

        <img src="/oop/img/1/8.png" alt=""> <br><br>
        <img src="/oop/img/1/9.png" alt=""> <br><br>
        <img src="/oop/img/1/10.png" alt=""> <br><br>
        <img src="/oop/img/1/11.png" alt=""> <br><br>
        <img src="/oop/img/1/12.png" alt=""> <br><br>
        <img src="/oop/img/1/13.png" alt=""> <br><br>
        <img src="/oop/img/1/14.png" alt=""> <br><br>
        <img src="/oop/img/1/15.png" alt=""> <br><br>

        <img src="/oop/img/" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>



