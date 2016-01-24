<table class="contact">
    <tr>
        <td class="label">
            <?php include "info/{$person->sex->value}_icon.php" ?>
        </td>
        <td>
            <?=$person->sex->display?>
            <br>
            <?=$person->birthPlace?>, <?=$person->birthDate?>
            <?php if(@$person->religion): ?>
                <br>
                <?=$person->religion?>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="label">
            <?php include "info/pin_icon.php" ?>
        </td>
        <td>
            <?=$person->address?>
        </td>
    </tr>
    <tr>
        <td class="label">
            <?php include "info/mail_icon.php" ?>
        </td>
        <td>
            <?=$person->email?>
        </td>
    </tr>
    <tr>
        <td class="label">
            <?php include "info/phone_icon.php" ?>
        </td>
        <td>
            <?=$person->phone?>
        </td>
    </tr>
</table>
