<html>
    <head>
        <title>Latihan CSS</title>
        <style>
            body{
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-color: beige;
                font-size: 40px;
            }
            a:link{
                text-decoration: none;
                color: blue;
            }
            a:visited{
                text-decoration: none;
                color: blue;
            }
            a:hover{
                font-size: larger;
                color: rgb(255, 255, 0);
                text-decoration: underline;
            }

            .headingmerah {
                color: red;
            }

            .parratakanan{
                text-align: right;
            }

            .partengah{
                text-align: center;
            }


        </style>
    </head>
    <body>
        <h1 style="color: rgb(131, 22, 233);">Halo Selamat Datang</h1>
        <h1 class="headingmerah">Halo Selamat Datang Juga</h1>
        <p style="font-size: small;color: aqua;">Jurusan Sistem Informasi ITS</p>
        <p class="parratakanan">Jurusan Sistem Informasi ITS 2 </p>
        <p class="partengah">Jurusan Sistem Informasi ITS 3 </p>
        <a href="https://www.google.com" target="_blank"> Google </a>
        <a href="https://www.its.ac.id" target="_self"> ITS </a>
        <a href="hello.html">File Pertemuan 1 </a>

    </body>
</html>