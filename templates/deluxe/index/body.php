<body>
    <div class="wrapper">
        <div class="header">
            <div style="position: absolute;width: 100%;top: 34px;">
                <img
                    style="width: 600px;opacity: .1375;"
                    src="data/dwi-prabowo/batman.svg"
                >
            </div>
            <div style="height: 48px;"></div>
            <h1 style="padding-top: 16px;">
                <span>
                    <?=$person->name?>
                </span>
            </h1>
            <h4>
                <span>
                    <hr>
                    <?=$person->jobTitle?>
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
