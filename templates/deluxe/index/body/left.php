<div class="content-wrapper">
    <div class="content-group">
        <h2>
            Expertise
        </h2>
        <ul>
            <?php foreach($person->expertises as $expertise): ?>
                <li><?=$expertise?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="content-group">
        <h2>
            Education
        </h2>
        <ul>
            <?php foreach($person->educations as $education): ?>
                <li>
                    <div><?=$education->major?></div>
                    <div><?=$education->college?></div>
                    <div><?=$education->date?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="content-group">
        <h2>
            Personal Info
        </h2>
        <div class="personal-info">
            <img src="data/<?=$for?>/user.png">
            <div>
                <div><?=$person->fullName?></div>
                <div><?=$person->religion?></div>
                <div><?=$person->sex?>, <?=$person->age?></div>
                <div><?=$person->phone?></div>
                <div><?=$person->email?></div>
                <div><?=$person->site?></div>
            </div>
        </div>
    </div>
</div>