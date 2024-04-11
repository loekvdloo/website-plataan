<body>
<footer>
    <div class="mediafooter">
        <div class="mediatekst">
            <img src="assets/img/instagram(1).png" alt="insta" class="media">
            <a target="_blank" href="https://www.instagram.com/deplataanmook/">@deplataanmook</a>
        </div>
        <div class="mediatekst">
            <img src="assets/img/facebook.png" alt="facebook" class="media">
            <a target="_blank" href="https://www.facebook.com/restariadeplataan.mook/?locale=nl_NL">@Restaria De Plataan
                Mook</a>
        </div>
        <div class="mediatekst">
            <img src="assets/img/phone-call.png" alt="telefoon" class="media">
            <a>024 696 2097</a>
        </div>
    </div>
    <div class="livedatum">
        <?php
        echo "datum: " . date("Y.m.d") . "<br>";
        echo "day: " . date("l");
        ?>
        <div id="liveclock">
            <a>time: </a>
            <div id="demo"></div>
        </div>

        <script>
            setInterval(myTimer, 1000);

            function myTimer() {
                const d = new Date();
                document.getElementById("demo").innerHTML = d.toLocaleTimeString();
            }
        </script>
    </div>
    <div class="openingstijden">
        <h3>ma: gesloten</h3>
        <h3>di: <span id="di"> gesloten</span></h3>
        <h3>wo: <span id="wo">12:00-21:00</span></h3>
        <h3>do: <span id="do">12:00-21:00</span></h3>
        <h3>vr: <span id="we">12:00-21:00</span></h3>
        <h3>za: <span id="we">12:00-21:00</span></h3>
        <h3>zo: <span id="we">13:00-21:00</span></h3>
    </div>

</footer>
</body>
