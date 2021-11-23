<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soal 2</title>

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .cd-seconds {
                text-align: center;
                margin: 5vh auto;
                padding: 15px;
                width: 50px;
                border: 1px #000 solid;
            }

            .question {
                margin: 5vh auto;
                width: 200px;
            }

            .option {
                display: inline;
                margin-left: 30px;
            }

            .next {
                float: right;
                margin: 25px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="cd-seconds" class="cd-seconds"></div>

        <div class="question">
            <h1>5 * 5 = ...</h1>
            
            <div class="option">
                <input type="radio" name="a" id="a">
                <label for="a">A. 25</label>
            </div>

            <div class="option">
                <input type="radio" name="b" id="b">
                <label for="b">B. 10</label>
            </div>
        </div>

        <a href="/soal-3" class="next">Selanjutnya</a>

        <!-- Scripts -->        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
        <script>
            let timer = function () {
                let seconds = 30;
                setInterval(function () {
                    if (seconds-- == 0) {
                        window.location.href = "/soal-3";
                    }
                    document.getElementById('cd-seconds').innerHTML = seconds;
                }, 1000);
            }

            timer();
        </script>
    </body>
</html>
