<?php

$title = "Web technologies";
include '../../root/header.php';
?>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/internet/index.php">Internet</a></b></li>
    </ul>

    <ul>
        <li><b class="topic">Internet</b> - malumotlar almashish tarmogi.</li><br>
        
        <li><b class="topic">ISP</b> - internet service provider.</li><br>
        <img src="/internet/img/ISP.png" alt=""> <br><br><br>

        <img src="/internet/img/webApplicationArchitecture.png" alt=""> <br><br><br>

        <li><b class="topic">Protocol</b> - malumotlarni formatlash va qayta ishlash uchun standart qoidalar.</li><br>
        <ul>
            <li><b>IP</b> - Internet Protocol (qurilmadan qurilmaga malumot yuborish) ip-address</li>
            <li><b>TCP</b> - Transmission Control Protocol (qurilmadagi dasturdan qurilmadagi dasturga malumot yuborish) port</li>
            <li><b>HTTP</b> - Hypertext Transfer Protocol (client va server o'rtasidagi hyper (HTNL) matnli malumot yuborish)</li>
            <li><b>TLS</b> - Transport Layer Security (client va server o'rtasidagi malumot hafsizligini taminlaydi. Shifrlab beradi)</li>
            <img src="/internet/img/client-server.png" alt=""> <br><br><br>
        </ul>

        <li><b>IP (Internet Protocol)</b> - qurilmaning unique bo'lgan manzili</li>
        <img src="/internet/img/IP-address.png" alt=""> <br><br><br>

        <!-- Domain -->
        <img src="/internet/img/domain.png" alt=""> <br><br><br>

        <!-- URL -->
        <img src="/internet/img/URL.png" alt=""> <br><br><br>

        <!-- Hosting -->
        <img src="/internet/img/hosting.png" alt=""> <br><br><br>
        <img src="/internet/img/hosting-types.png" alt=""> <br><br><br>
        <ul>
            <li><b>Shared Hosting</b> - bitta serverda bir nechta web-cites bo'ladi.</li>
            <img src="/internet/img/shared-hosting.png" alt=""> <br><br><br>

            <li><b>VPS (Virtual Private Server) Hosting</b> - bitta serverda bir nechta virtual serverlar hosil qilinadi va o'sha hos virtual (RAM/virtial server) serverga web-cite qo'yiladi.</li>
            <img src="/internet/img/VPS-hosting.png" alt=""> <br><br><br>

            <li><b>Dedicated Hosting</b> - bitta alohida server web-cites uchun.</li>
            <img src="/internet/img/dedicated.png" alt=""> <br><br><br>
        </ul>

        <li><b>DNS (Domain Name Systems)</b> - domein nomlarini IP-addressga o'zgartirib beruvchi sistema.</li>
        <img src="/internet/img/DNS.png" alt=""> <br><br><br>

        <!-- Web server -->
        <img src="/internet/img/web-server-1.png" alt=""> <br><br><br>
        <img src="/internet/img/web-server-2.png" alt=""> <br><br><br>

        <!-- Frontend and Backend -->
        <img src="/internet/img/f&b-1.png" alt=""> <br><br><br>
        <img src="/internet/img/f&b-2.png" alt=""> <br><br><br>
    </ul>
</div>

<?php
include "../../root/footer.php";
?>

