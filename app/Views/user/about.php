<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .full-view-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .hero-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            opacity: 0;
            transition: opacity 1.5s ease;
            z-index: 1;
            filter: brightness(0.6);
        }

        .hero-image.active {
            opacity: 1;
        }

        .svg-front {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 2;
        }

        .content {
            position: absolute;
            top: 40%;
            left: 12%;
            transform: translateY(-50%);
            text-align: left;
            color: white;
            font-family: Arial, sans-serif;
            z-index: 3;
            color: aliceblue;
        }

        .content h1 {
            margin-bottom: 1px;
        }

        .content p {}
    </style>
</head>

<body>
    <section>
        <div class="full-view-container">
            <div class="hero-image active" style="background-image: url('home/5.png');">
            </div>
            <div class="hero-image" style="background-image: url('home/4.png');">
            </div>
            <svg class="svg-front" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="rgb(255, 255, 255)" fill-opacity="1"
                    d="M0,224L80,234.7C160,245,320,267,480,282.7C640,299,800,309,960,304C1120,299,1280,277,1360,266.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
            <div class="content">
                <h1 class="h1"><b>PENALARAN</b></h1>
                <p class="h5">UNIVERSITAS DIAN NUSWANTORO</p>
            </div>
        </div>
    </section>
    <br>
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-6 ml-2">
                    <style>
                        .text {
                            margin-left: 8px;
                            margin-right: 5px;
                        }
                    </style>
                    <div class="text">
                        <h2 class="text-center visi">Visi</h2>
                        <p style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima
                            hic, facilis dolorum, ab fugiat nisi, porro quisquam vel possimus assumenda qui soluta
                            rerum?
                            Maxime molestias maiores delectus et ducimus eligendi?</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="text">
                        <h2 class="text-center misi">Misi</h2>
                        <p style="text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae
                            qui
                            adipisci, mollitia, fugiat placeat quae repudiandae voluptatem laboriosam atque eos maiores
                            quidem blanditiis earum vitae nisi. Harum saepe ad recusandae!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!--RKT-->


    </section>

</body>