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
        <li><b class="topic">Polymorphism</b> - turli xil object lar bilan turli xil method larni turli vazifalarda ishlatish. Bir yoki bir nechta methotlarni birneshta joyda ishlatish.
            Ota class dan olingan parametr va atributlarni o'zgartirib ishlatish Polymorphism deyiladi.</li>
        <br>

        <div class="pre"><br>
            <pre>
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


                //-----------------------------------------------//

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

            </pre>
        </div><br>

        <img src="/oop/img/3/1.png" alt=""> <br><br>
        <img src="/oop/img/3/2.png" alt=""> <br><br><br>

        <li><b class="topic">Interface</b> - class qanday methodlarni qo'llash ishlatish shart ekanligini belgilashda ishlatiladi.
            Interface <b>implements</b> orqali boglamnadi. Interfaceda body qismi bo'lmaydi.</li><br>
        <ul>
            <li><b class="heading">interface ichidagi barcha methodlar abstract boladi</b></li>
            <li><b class="heading">extends o'rniga implements da olinadi (shartnoma)</b></li>
            <li><b class="heading">Class ichida qanday methodlar bolishini belgilabxam beradi</b></li>
            <li><b class="heading">Odatda Interface lar alohida papkada yoziladi uni require '/Interfaces/...'; korinishida chqirsa boladi</b></li>
            <li><b class="heading">Interface da barcha methodlar public bolishi shart</b></li>
            <li><b class="heading">Interface methodlarida body qismi yozilmaydi</b></li>
            <li><b class="heading">Interface bilan Abstract farqi, Interface da attribute yozib bolmaydi</b></li>
            <br>
        </ul>

        <div class="pre"><br>
            <pre>
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
            </pre>
        </div><br>

        <img src="/oop/img/3/3.png" alt=""> <br><br>
        <img src="/oop/img/3/4.png" alt=""> <br><br>
        <img src="/oop/img/3/5.png" alt=""> <br><br>
        <img src="/oop/img/3/6.png" alt=""> <br><br>
        <img src="/oop/img/3/7.png" alt=""> <br><br>
        <img src="/oop/img/3/8.png" alt=""> <br><br>
        <img src="/oop/img/3/9.png" alt=""> <br><br>
        <img src="/oop/img/3/10.png" alt=""> <br><br>
        <img src="/oop/img/3/11.png" alt=""> <br><br>
        <img src="/oop/img/3/12.png" alt=""> <br><br><br>


        <li><b class="topic">Trait</b> - Bir methodni bir neshta class lar ichida ishlatish imkonini beradi, class ichida use orqali chaqiriladi.</li><br>
        <br>

        <div class="pre"><br>
            <pre>
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
            </pre>
        </div><br>

        <img src="/oop/img/3/13.png" alt=""> <br><br><br>
        <img src="/oop/img/3/14.png" alt=""> <br><br><br>
        <img src="/oop/img/3/15.png" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>



