<body>
    <div class="wrapper">
        <div class="header">
            <div style="height: 48px;"></div>
            <h1>
                <span>
                    <?=$person->name?>
                </span>
            </h1>
            <h4>
                <span>
                    <?=$person->jobTitle?>
                    <hr>
                </span>
            </h4>
        </div>
        <div class="content">
            <div class="left">
                <?php include 'body/left.php' ?>
            </div>
            <div class="right">
                <?php include 'body/right.php' ?>
            </div>
        </div>
    </div>
</body>
