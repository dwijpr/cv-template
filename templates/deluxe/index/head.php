<head>
    <title><?=$person->name?>'s CV</title>
    <style>
        body{
            font-family: "Lato";
            color: <?=$colors->text->primary?>;
        }
        div.wrapper{
            margin: 0 auto;
            width: 816px;
            height: 1154px;
            border: 1px solid <?=$colors->border?>;
            background: <?=$colors->background->primary?>;
            position: relative;
        }
        .color1{
            color: <?=$colors->primary?>;
        }
        .color2{
            color: <?=$colors->secondary?>;
        }

        h1, h2, h3, h4, h5, h6{
            text-transform: uppercase;
        }
        p{
            text-align: justify;
        }

        .header{
            text-align: center;
            word-spacing: .275em;
        }

        .header h1{
            margin: 32px 48px;
        }
        .header h1 span{
            border: 1px solid <?=$colors->text->primary?>;
            padding: 16px 48px;
        }
        .header h4{
            text-align: center;
        }
        .header h4 span{
            display: inline-block;
        }
        .header h4 span hr{
            margin: 0 32px;
            margin-top: 16px;
        }

        .content{
            height: 900px;
            width: 100%;
            background: <?=$colors->background->secondary?>;
            position: absolute;
            bottom: 0;
        }

        .content .left, .content .right{
            color: <?=$colors->background->primary?>;
        }

        .content .left{
            text-align: right;
            background: <?=$colors->background->tertiary?>;
            float: left;
            width: 40%;
            height: 100%;
        }
        .content .content-wrapper{
            padding: 16px 24px;
        }
        .content .content-wrapper .content-group{
            margin-top: 48px;
        }
        .content .left .content-wrapper ul{
            list-style: none;
            text-align: right;
        }
        .content .left .content-wrapper ul li{
            margin-top: 16px;
        }

        .content .right{
            float: left;
            width: 60%;
            height: 100%;
        }

        .personal-info img{
            border: 1px solid <?=$colors->border?>;
            border-radius: 8px;
            width: 128px;
        }
    </style>
</head>
