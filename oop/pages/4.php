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
        <li><b class="topic">Static method</b> - class dan object yaratmasdan togridan togri methodlarni chaqirish imkoniyatini beradi.</li>
        <br>

        <div class="pre"><br>
            <pre>
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


                 <h5>     Static method public bolsa, boshqa class ichidaxam chaqirish mumkun</h5>

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


                <h5>     Bola class ichida ota class methodini ishlatmoqchi bo'lsak parent:: usulida chaqiriladi</h5>

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
                <br>
            </pre>
        </div><br>

        <img src="/oop/img/4/1.png" alt=""> <br><br><br>
        <img src="/oop/img/4/2.png" alt=""> <br><br><br>

        <li><b class="topic">Static properties</b> - Static attribute va Static method ishlash syntaxisi birxil beradi.</li>
        <br>
        <div class="pre"><br>
            <pre>
                class pi {
                    public static $value = 3.14159;
                }

                echo pi::$value;


                -----------------------------------------------
                class pi2 {
                    public static $value2=3.14159;
                    public function staticValue2() {
                        return self::$value2;
                    }
                }

                $pi = new pi2();
                echo $pi->staticValue2();


                -----------------------------------------------
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
                <br>
            </pre>
        </div><br>
        <img src="/oop/img/4/3.png" alt=""> <br><br><br>
        <img src="/oop/img/4/4.png" alt=""> <br><br><br>
        <img src="/oop/img/4/5.png" alt=""> <br><br><br>


        <li><b class="topic">Constanta</b> - bu computer xotirasida saqlanadigan malumot, uni o'zgartirish mumkun emas (o'zgarmaslar).</li><br>
        <ul>
            <li><b class="heading">Constanta class ichida const kalit so'zi bilan e'lon qilinadi.</b></li>
            <li><b class="heading">Constanta e'lon qilingandan keyin o'zgartirib bolmaydi.</b></li>
            <li><b class="heading">Constanta e'lon qilishda $ belgisi qoyilmaydi.</b></li>
            <li><b class="heading">Class constantalarini barchasini bosh harflar bilan yozish tavsiya etiladi.</b></li>
            <li><b class="heading">Class tashqarisida class ichidagi constantani (Class::const) korinishda olinadi.</b></li>
        </ul><br>

            <div class="pre"><br>
            <pre>
                class Goodbye {
                    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
                }

                echo Goodbye::LEAVING_MESSAGE;

                -----------------------------------------------

                class Goodbye {
                    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
                    public function byebye() {
                        echo self::LEAVING_MESSAGE;
                    }
                }

                $goodbye = new Goodbye();
                $goodbye->byebye();
                <br>
            </pre>
            </div><br>

        <img src="/oop/img/4/6.png" alt=""> <br><br><br>
        <img src="/oop/img/4/7.png" alt=""> <br><br><br>
        <img src="/oop/img/4/8.png" alt=""> <br><br><br>

        <li><b class="topic">Namespace</b> - birxil nomlangangan 2ta yoki undan kop funqsiyalarni togri chaqirib ishlatishda kerak boladi.</li><br>

        <div class="pre"><br>
            <pre>
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
            </pre>
        </div><br>

        <img src="/oop/img/4/9.png" alt=""> <br><br><br>
        <img src="/oop/img/4/10.png" alt=""> <br><br><br>
        <h5>bu muammoni hal qilishda ikki filega namespace beramiz va shu namespace orqali kerakli classga murojat qilamiz. <br><br>
        Masalan: <br>
            namespace database\ConnectDB; <br>
            namespace connect\ConnectDB</h5>
        <img src="/oop/img/4/11.png" alt=""> <br><br><br>


        <li><b class="topic">Autoload</b> - classdan object yaratilganda yoki kerakli class chaqirilganda avtomatic include qilib ishka tushurib beradi.
            Yoki xuddi shu ishni composer ozi qilibberadi, vendorni ichida class larni oqib olib ishlatib beradi va require vendor/autoload.php ulab qoyamiz.</li><br>

        <div class="pre"><br>
            <pre>
                {
                    "autoload": {
                        "psr-4" : {
                            "App\\" : "app/"
                        }
                    }
                }

                -----------------------------------------------

                spl_autoload_register(function ($class_name) {
                    include $class_name . '.php';
                    $filename = str_replace('\\', '/', $class_name); // namespace beq \ da ishlagani uchun require larni korishi uchun oddiy / ka otkazib koyamiz
                    require $filename;
                });
            </pre>
        </div><br>

        <img src="/oop/img/4/12.png" alt=""> <br><br><br>
        <img src="/oop/img/4/13.png" alt=""> <br><br><br>
        <img src="/oop/img/4/14.png" alt=""> <br><br><br>

    </ul>
</div>

<?php
include "../../root/footer.php";
?>



