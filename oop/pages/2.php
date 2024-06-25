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
        <li><b class="topic">Inheritance</b> - o'z xususiyatlarini bola class ga qoldirish, voris qilib olish. barcha public, protected
            attributes va methods ota-ona classdan meros qilib olinadi, bundan tashqari o'z attribute va methodlariga ega bo'ladi.</li>
        <br>
        <img src="/oop/img/2/1.png" alt=""> <br><br>
        <img src="/oop/img/2/2.png" alt=""> <br><br>
        <img src="/oop/img/2/3.png" alt=""> <br><br>
        <img src="/oop/img/2/4.png" alt=""> <br><br>
        <img src="/oop/img/2/5.png" alt=""> <br><br><br>
        <li><b class="topic">overriding</b> - bola class ichida parent methodlari ustida boshqa element yozish.</li>
        <li><b class="topic">final</b> - class meros olishni to'xtatish uchun ishlatiladi, faqat ozidan obyekt olib ishlatsa boladi</li>
        <br>
        <img src="/oop/img/2/6.png" alt=""> <br><br><br>

        <li><b class="topic">Abstraction (Noaniqlik, Mavhumlik)</b> - mavhum class, elon qilingan qilingan lekin code da amalga oshirilmagan usul.
            Kamida bitta abstract usulini o'z ichiga olgan class <b>Abstract</b> class deyiladi, abstract kalit so'zi bilan boshlanadi.</li><br>
        <ul>
            <li><b class="heading">Abstract class dan obyect olib bolmaydi.</b></li>
            <li><b class="heading">Abstract class avlod class larda ishlatish mumkun.</b></li>
            <li><b class="heading">Abstract methodlarida body qismi yozilmaydi.</b></li>
            <li><b class="heading">Clas ichida bitta ta abstract method bolsa bu class abstract class deyiladi.</b></li>
            <li><b class="heading">Ota classda bo'lgan method bola classdaham bo'lishi shart, methodning body qismi bola classida bo'ladi aks holda ishlamaydi.</b></li>
            <li><b class="heading">Parent va chield access modifayerlari bir xil yoki chield bir pogona past bolishi shart.</b></li>
            <li><b class="heading">Abstract class private bolmaydi.</b></li>
            <li><b class="heading">Abstract bilan Interface farqi, Abstract da attribute va method yozsa boladi, Interface da faqat method.</b></li>
            <br>
        </ul>

        <img src="/oop/img/2/7.png" alt=""> <br><br>
        <img src="/oop/img/2/8.png" alt=""> <br><br>
        <img src="/oop/img/2/9.png" alt=""> <br><br>
        <img src="/oop/img/2/10.png" alt=""> <br><br>
        <img src="/oop/img/2/11.png" alt=""> <br><br><br>

        <div class="pre"><br>
            <pre>
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

            </pre>
        </div><br>

        <img src="/oop/img/" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>



