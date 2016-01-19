<head>
    <title><?=$person->name?>'s CV</title>
    <style>
        body{
            font-family: Ubuntu;
            color: <?=$colors->primary?>;
        }
        div.wrapper{
            margin: 0 auto;
            width: 816px;
            height: 1154px;
            border: 1px solid <?=$colors->border?>;
            background: <?=$colors->primary?>;
        }
        .color1{
            color: <?=$colors->primary?>;
        }
        .color2{
            color: <?=$colors->secondary?>;
        }
        .side{
            display: block;
            float: left;
            height: 100%;
        }
        .side.left{
            width: 350px;
            color: white;
        }
        .side.right{
            width: 466px;
            background: white;
        }
        .side.right .section{
            padding: 4px;
        }
        .side.right h1{
            margin-top: 48px;
        }
        .side.right h2{
            color: <?=$colors->secondary?>;
        }
        .side.right h1, .side.right .section .list{
            padding-left: 16px;
        }
        img.contact{
            width: 24px;
        }
        .main-image{
            width: 200px;
            margin: 0 auto;
            margin-top: 120px;
        }
        .circle{
            display: inline-block;
            border-radius: 50%;
            background: <?=$colors->primary?>;
            padding: 2%;
        }
        .main-image img{
            width: 100%;
            border-radius: 50%;
            background: <?=$colors->secondary?>;
        }
        .text-center{
            text-align: center;
        }
        table.contact{
            margin: 0 1px;
        }
        table.contact .label{
            vertical-align: top;
            width: 30%;
            text-align: right;
            padding-right: 24px;
        }
        table.contact{
            border-spacing: 1em;
        }

        dt{
            font-weight: bold;
        }

        blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            font-size: 17.5px;
            border-left: 5px solid #eee;
        }
        blockquote .small:before, blockquote footer:before, blockquote small:before {
            content: '\2014 \00A0';
        }
        i, cite, em, var, address, dfn {
            font-style: italic;
        }
    </style>
</head>
