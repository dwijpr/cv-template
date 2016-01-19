<div class="side right">
    <div class="section">

        <?php include 'right/head_education.php'; ?>

        <div class="list">
            <?php foreach($educations as $education): ?>
                <dl>
                    <dt><?=$education->date?></dt>
                    <dd>
                        <h2><?=$education->name?></h2>
                        <h3><?=$education->major?></h3>
                        <?php if(@$education->desc): ?>
                            <p>
                                <?=$education->desc?>
                            </p>
                        <?php endif; ?>
                    </dd>
                </dl>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="section">

        <?php include 'right/head_experience.php' ?>

        <div class="list">
            <?php foreach($experiences as $experience): ?>
                <dl>
                    <dt><?=$experience->date?></dt>
                    <dd>
                        <h2>
                            <?=$experience->company?> ~ 
                            <small><?=$experience->job->title?></small>
                        </h2>
                        <p>
                            <?=$experience->job->desc?>
                        </p>
                    </dd>
                </dl>
            <?php endforeach; ?>
        </div>
    </div>
</div>
