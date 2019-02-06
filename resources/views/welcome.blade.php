<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Quiz css start-->
        <link rel="stylesheet" type="text/css" href="./quiz/dist/jquery.quiz-min.css" />
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <style>
            body { min-height: 100vh;background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%); font-family: 'Roboto Condensed';}
            .container {margin: 150px auto 30px auto; max-width: 640px;}
            h1 { text-align: center; }
        </style>
        <!-- Quiz css end-->
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


                <div class="container">
                    <h1>Laravel Dynamic Quiz Customizable Basic Demo</h1>
                    <div id="quiz">
                        <div id="quiz-header">

                           
                        </div>
                        <div id="quiz-start-screen">
                            <p><a href="#" id="quiz-start-btn" class="quiz-button">Start</a></p>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Quiz js start-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="./quiz/dist/jquery.quiz-min.js"></script>
        <script>
            $('#quiz').quiz({
                //resultsScreen: '#results-screen',
                //counter: false,
                //homeButton: '#custom-home',
                counterFormat: 'Question %current of %total',
                questions: [
                    {
                        'q': 'A smaple question?',
                        'options': [
                            'Answer 1',
                            'Answer 2',
                            'Answer 3',
                            'Answer 4'
                        ],
                        'correctIndex': 0,
                        'correctResponse': 'Custom correct response.',
                        'incorrectResponse': 'Custom incorrect response.'
                    },
                    {
                        'q': 'A smaple question?',
                        'options': [
                            'Answer 1',
                            'Answer 2'
                        ],
                        'correctIndex': 1,
                        'correctResponse': 'Custom correct response.',
                        'incorrectResponse': 'Custom incorrect response.'
                    },
                    {
                        'q': 'A smaple question?',
                        'options': [
                            'Answer 1',
                            'Answer 2',
                            'Answer 3',
                            'Answer 4'
                        ],
                        'correctIndex': 2,
                        'correctResponse': 'Custom correct response.',
                        'incorrectResponse': 'Custom incorrect response.'
                    },
                    {
                        'q': 'A smaple question?',
                        'options': [
                            'Answer 1',
                            'Answer 2'
                        ],
                        'correctIndex': 1,
                        'correctResponse': 'Custom correct response.',
                        'incorrectResponse': 'Custom incorrect response.'
                    },
                    {
                        'q': 'A smaple question?',
                        'options': [
                            'Answer 1',
                            'Answer 2',
                            'Answer 3',
                            'Answer 4'
                        ],
                        'correctIndex': 3,
                        'correctResponse': 'Custom correct response.',
                        'incorrectResponse': 'Custom incorrect response.'
                    }
                ]
            });
        </script>
        <!-- Quiz js end-->
    </body>
</html>
