<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
        <title>Scouting en wet- en regelgeving</title>
        <style>
            html, body {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                width: 595.28px;
                height: 841.89px;
                font-family: "Arial", sans-serif;
            }

            @page one, two, three {
                size: A4 portrait;
                margin: 2cm;
            }

            .one, .two, .three {
                width: 100%;
                page-break-after: always;
            }

            .one {
                page: one;
            }

            .two {
                page: two;
            }

            .three {
                page: three;
            }

            header {
                width: 100%;
                height: 100%;
            }
            .headerImage {
                display: inline-block;
                position: relative;
                background: #fff;
                height: 150px;
            }
            .headerImage img {
                opacity: .4;
                max-width: 100%;
                height: 100%;
                width: 100%;
            }
            .headerImage .scoutingNl {
                position: absolute;
                top: 0;
                right: 5px;
                width: auto;
            }

            .content {
                margin: 0 24px;
            }
        </style>
    </head>
    <body>
        <header class="one">
            <section class="headerImage">
                <img src="{{asset('images/pdf/header_hout.png')}}" alt="header_hout"/>
                <img class="scoutingNl" src="{{asset('images/scouting-NL.png')}}" alt="Scouting Nederland"/>
            </section>
            <section class="content">
                <h1>hello world!</h1>
            </section>
        </header>


        <header class="two">
            <section class="headerImage">
                <img src="{{asset('images/pdf/header_hout.png')}}" alt="header_hout"/>
            </section>
        </header>


        <header class="three">
            <section class="headerImage">
                <img src="{{asset('images/pdf/header_hout.png')}}" alt="header_hout"/>
            </section>
        </header>
    </body>
</html>
