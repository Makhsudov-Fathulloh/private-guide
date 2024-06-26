<?php

// ------------------------------#0--------------------------------- //

// OOP - Object Oriented Programming (Obyektga Yonaltirilgan Dasturlash)
// Object
// Class (sinf, toifa)
// Attribute, Property, Field (xususiyat)
// Method, Function (usul, vazifa, funksiya)

class Robot {
    public $height = '180sm';

    public function speak() {
        echo "Robot gapira oladi";
    }
}

$bot = new Robot;
echo $bot->height;
echo "<br>";

$bot->speak();

//-----------------------------------------------
// Constructor (__constructor())
// __constructor() object yaratilganda, object attributlarini automatic ishka tushurib beradigan function

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

//-----------------------------------------------
// Destruct
// Ob'ekt yo'q qilinganda yoki skript to'xtatilganda yoki oxirida destruktor chaqiriladi.
//Agar siz __destruct() funksiyasini yaratsangiz, PHP avtomatik ravishda skript oxirida uning funksiyasini chaqiradi.

class FruitDestruct
{
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

// ------------------------------#1--------------------------------- //

// OOP asosiy tamoyillari 4.

// 1. Encapsulation
// 2. Inheritance
// 3. Polymorphism
// 4. Abstraction

// Encapsulation 1.
// Class dan foydalanishni berkitish va ichki method lar orqali u xususiyatka murojat qilish

// Access modifiers (Ruxsat modifiqatorlar)
// public - ochiq
// protected - tashqaridan ximoyalangan, yopiq, extend orqali ishlatish mumkun
// private - mutlaqo yopiq, faqat class ichida ishlatiladi

class StudentPublic {
    public $name;
}

$student = new StudentPublic;
$student->name = "John";
echo $student->name;

//-----------------------------------------------
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


//-----------------------------------------------
class StudentExtends extends StudentProtected {

    public function userProtected() {
        $this->name = "John";
    }
}

$userProtected = new StudentExtends();
echo $userProtected->userProtected();

//-----------------------------------------------
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

// ------------------------------#3--------------------------------- //

// Inheritance 2.
// Oz xususiyatlarini boshqa class ga qoldirish, voris qilib olish

class Person {
    public $hend = 2;

    public function walk() {
        echo "person classi walk metodi";
    }
}

class Student extends Person {
    public $group = "web dasturlash";

    public function teach() {
        echo "student teach metodi";
    }
}

$s1 = new Student;
$s1->walk();
$s1->hend;


// Magic methods

class PersonMagic {
    public $hend = 2;

    public function __construct() {
        echo "person classi construct metodi";
    }

    public function walk() {
        echo "person classi walk metodi";
    }
}

class StudentMagic extends PersonMagic {
    public function __construct() {
        parent::__construct(); // avlod class ichida ajdod clasi constructorini chaqishish
        echo "<br>";
        echo "construct metodi ishka tushti";
    }

    public function __invoke() {
        echo "invoke metodi ishka tushti";
    }

    public function __toString() {
        return "toString metodi ishka tushti";
    }
}

$magic = new StudentMagic; // echo "construct metodi ishka tushti";
$magic(); // echo "invoke metodi ishka tushti";
echo $magic; //  echo "toString metodi ishka tushti";

//-----------------------------------------------
class FruitProtected {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends FruitProtected {
    public function message() {
        echo "Am I a fruit or a berry? ";
        // Call protected method from within derived class - OK
        $this -> intro();
    }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class


// ------------------------------#4--------------------------------- //

// Polymorphism 3.
// Turli xil object lar bilan turli xil method larni turli vazifalarda ishlatish
// Bir yoki bir nechta methotlarni birneshta joyda ishlatish
// Ota class dan olingan parametr va atributlarni o'zgartirib ishlatish Polymorphism deyiladi
class Company {
    public function calSalary($obj) {
    $obj->salary();
    }
}

class Teacher {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function salary()
    {
        echo "$this->name o'qituvchini oyligini xisoblash logikasi";
    }
}

class Manager {
    public function salary()
    {
        echo "menejer oyligini xisoblash logikasi";
    }
}

$teacher = new Teacher('Aziz');
$manager = new Manager();

$company = new Company();
$company->calSalary($teacher);

//-----------------------------------------------

class Notification extends ValidateUser {
    public function notify($service) {
        foreach ($this->getUsers() as $user){
            echo "<br>";
            $service->send($user);
        }
    }
}

class Email extends ValidateUser {
    public function send($user) {
        if ($this->checkEmail($user['email']) && $this->checkName($user['name'])) {
            echo $user['name']." ga ".$user['email']." manziliga xabar jonatildi";
        }
    }
}

class SMS extends ValidateUser {
    public function send($user) {
        if ($this->checkName($user['name'])) {
            echo $user['name']." ga SMS xabar jonatildi";
        }
    }
}

class ValidateUser {
    public function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
    }

    public function checkName($name) {
        if (!empty($name)) {
            return true;
        }
    }
}


$notify = new Notification();
$notify->notify(new Email());


// ------------------------------#4--------------------------------- //

// Abstraction (Noaniqlik, Mavhumlik) 4.
//
// 1. Abstract class dan obyect olib bolmaydi
// 2. Abstract class avlod class larda ishlatish mumkun
// 3. Abstract methodlarida body qismi yozilmaydi
// 4. Clas ichida 1 ta abstract method bolsa bu class abstract class deyiladi
// 5. Abstract class ichidagi abstract method chield classda bolishi, realizatsiya qilish shart
// 6. Parent va chield access modifayerlari bir xil yoki chield 1 pogona past bolishi shart
// 7. Abstract bilan Interface farqi, Abstract da attribute va mrthod yozsa boladi, Interface da faqat method

abstract class PersonAbstract  {
    public function getFullInfo(){
        echo "full information about person";
    }
    abstract public function test(); // bu methodni avlod classlarda realizatsiya qilish shart
}

class StudentAbstract extends PersonAbstract {
    public function group() {
        echo "student guruh methodi";
    }

    public function test() { // obyect olish uchun abstact methodni realizatsiya qilish shart
        echo "personAbstract class realizatsiyasi";
    }
}

class TeacherAbstract extends PersonAbstract {
    public function profession() {
        echo "teacher professiya methodi";
    }

    public function test() { // obyect olish uchun abstact methodni realizatsiya qilish shart
        echo "personAbstract class realizatsiyasi";
    }
}

$s = new StudentAbstract();
$s->getFullInfo();

//-----------------------------------------------

abstract class NotificationAbstract  {
    public function getUser(){
        // Userni olish
    }
    abstract public function send(); // bu methodni avlod claslarda realizatsiya qilish shart
}

class SMSAbstract extends NotificationAbstract {
    public function send() { // obyect olish uchun abstact methodni realizatsiya qilish shart
        echo "sms yuborish logikasi";
    }
}

class EmailAbstract extends NotificationAbstract {
    public function send() { // obyect olish uchun abstact methodni realizatsiya qilish shart
        echo "email yuborish logikasi";
    }
}


// ------------------------------#Constanta--------------------------------- //
// Constanta
// Class ichida doimiy o'zgarmas ma'lumotlarni kerak bo'lsa, malumotimizni constatnta qilib olamz.
// Constanta class ichida const kalit so'zi bilan e'lon qilinadi.
// Constanta e'lon qilingandan keyin o'zgartirib bolmaydi.
// Class constantalarini barchasini bosh harflar bilan yozish tavsiya etiladi.
// Class tashqarisida class ichidagi constantani (Class::const) korinishda olinadi.

//class Goodbye {
//    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
//}
//
//echo Goodbye::LEAVING_MESSAGE;
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();


// ------------------------------#Interface--------------------------------- //
// Interface
// interface ichidagi barcha methodlar abstract boladi
// extends o'rniga implements da olinadi (shartnoma)
// Class ichida qanday methodlar bolishini belgilabxam beradi
// odatda Interface lar alohida papkada yoziladi uni require '/Interfaces/...'; korinishida chqirsa boladi
// Interface da barcha methodlar public bolishi shart
// Interface methodlarida body qismi yozilmaydi
// Interface bilan Abstract farqi, Interface da attribute yozib bolmaydi

interface UserInterface {
    public function getGroup();
    public function showInfo();
    public function payments();
}

class StidentInterface implements Userinterface {
    public function getGroup()
    {
        // TODO: Implement getGroup() method;
    }

    public function showInfo()
    {
        // TODO: Implement showInfo() method;
    }
    public function payments()
    {
        // TODO: Implement payments() method;
    }
}

// ------------------------------#Trait--------------------------------- //

// Trait
// Bir methodni bir neshta class lar ichida ishlatish imkonini beradi, class ichida use orqali chaqiriladi

trait WheatherTrait {
    public function getWheather() {
        echo "ob havoni olib beradigan method";
    }
}

class TestA {
    use WheatherTrait;

    public function test()
    {
        echo "test A";
    }
}

class TestB {
    use WheatherTrait;

    public function test()
    {
        echo "test B";
    }
}

$testA = new TestA();
$testB = new TestB();

$testA->getWheather();
$testB->getWheather();


// ------------------------------#Static method--------------------------------- //
// Static method
// Static method usuli class dan object yaratmasdan togridan togri methodlarni chaqirish mumkun

class Cat {
    public $name;
    public $color;

    public function bark() {
        return  'miyaou';
    }

    public static function eat() {
        return 'eating';
    }
}

// $kisa = new Cat();
// $kisa->name = 'kisa';
// echo $kisa->bark();

echo Cat::eat();

//-----------------------------------------------
// Static method public bolsa, boshqa class ichidaxam chaqirish mumkun
class A {
    public static function welcome() {
        echo "Hello World!";
    }
}

class B {
    public function message() {
        A::welcome();
    }
}

$obj = new B();
echo $obj -> message();

//-----------------------------------------------

// Bola clasda ota class methodini chaqirishta parent:: usulida chaqiriladi
class domain {
    protected static function getWebsiteName() {
        return "W3Schools.com";
    }
}

class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;


// ------------------------------#Static attribute--------------------------------- //
// Static attribute
// Static attribute va Static method ishlash syntaxisi birxil

class pi {
    public static $value = 3.14159;
}

echo pi::$value;

//-----------------------------------------------
class pi2 {
    public static $value2=3.14159;
    public function staticValue2() {
        return self::$value2;
    }
}

$pi = new pi2();
echo $pi->staticValue2();

//-----------------------------------------------
class pi3 {
    public static $value=3.14159;
}

class x extends pi3 {
    public function xStatic() {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();


// ------------------------------#Final--------------------------------- //

// Final (yakuniy class)
// Final class dan inheritanse olib bolmaydi , faqat ozidan obyekt olib ishlatsa boladi

final class StudentFinal {
    public function showInfo() {
        echo "student info";
    }
}

$studentFinal = new StudentFinal;
$studentFinal->showInfo();

//class TestFianl extends StudentFinal() {
//    // bu method ishlamaydi
//}
//
//$tf = new TestFinal; // -!
//$tf->shoeInfo(); // -!


// ------------------------------#Namespace--------------------------------- //

// Namespace
// birxil nomlangangan 2ta yoki undan kop funqsiyalarni togri chaqirib ishlatishda kerak boladi


use Interfacecs\User;
use Traits\User as TraitUser;
use Classes\User as UserClass;

$user = new UserClass;

class TestNamespace {
    use TraitUser;

    public function getGroupNamespace()
    {
        echo 'test namespace';
    }
}

$testNamespace = new TestNamespace();
// $testNamespace->..............;


// ------------------------------#Iterable--------------------------------- //
// Iterable - bu foreach() sikli yordamida aylanish mumkin bo'lgan har qanday qiymat.

function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);

//-----------------------------------------------
function getIterable():iterable {
    return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item;
}

//-----------------------------------------------
// Barcha massivlar takrorlanadi, shuning uchun har qanday massiv iteratsiyani talab qiladigan funksiyaga argument sifatida ishlatilishi mumkin.
// Iterator interfeysini amalga oshiradigan har qanday ob'ekt iteratsiyani talab qiladigan funktsiyaga argument sifatida ishlatilishi mumkin.
// Iterator quyidagi usullarga ega bo'lishi kerak:
//
//     current() — koʻrsatkich koʻrsatayotgan elementni qaytaradi. Bu har qanday ma'lumot turi bo'lishi mumkin
//     key() Roʻyxatdagi joriy element bilan bogʻlangan kalitni qaytaradi. Bu faqat butun son, float, mantiqiy yoki satr bo'lishi mumkin
//     next() Ko‘rsatkichni ro‘yxatdagi keyingi elementga o‘tkazadi
//     rewind() Koʻrsatkichni roʻyxatning birinchi elementiga oʻtkazadi
//     valid() Agar ichki ko'rsatkich hech qanday elementga ishora qilmasa (masalan, ro'yxat oxirida keyingi() chaqirilgan bo'lsa), bu noto'g'ri qiymatini qaytarishi kerak. Boshqa har qanday holatda u haqiqatni qaytaradi


// Create an Iterator
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items) {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key() {
        return $this->pointer;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterablee(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterablee($iterator);

//-----------------------------------------------
//-----------------------------------------------

// ------------------------------#Autoload--------------------------------- //
// Autoload
// Autoload classdan object yaratilganda avtomatic ishlab ketadi
// Yoki xuddi shu ishni composer ozi qilibberadi, vendorni ichida class larni oqib olib ishlatib beradi va require vendor/autoload.php ulab qoyamiz
//{
//    "autoload": {
//        "psr-4" : {
//            "App\\" : "app/"
//        }
//    }
//}

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
//    $filename = str_replace('\\', '/', $class_name); // namespace beq\da ishlagani uchun require larni korishi uchun oddiy/ka otkazib koyamiz
//    require $filename;
});

$obj  = new MyClass1();
$obj2 = new MyClass2();

// ------------------------------#instanceof--------------------------------- //
// instanceof
// $apple = new Fruit();
// var_dump($apple instanceof Fruit);
// bool(true);
