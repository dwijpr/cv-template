<div class="content-wrapper">
    <div class="content-group">
        <h2>Profile</h2>
        <p><?=$person->profile?>
            
        </p>
    </div>
    <div class="content-group">
        <h2>Experience</h2>
        <?php foreach($person->experiences as $experience): ?>
            <div class="experience-group">
                <h3><?=$experience->company?></h3>
                <h5><?=$experience->job->title?> <small><?=$experience->date?></small></h5>
                <p>
                    <?=$experience->job->desc?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>