<div class="main-image">
    <img src="data/<?=$for?>/user.png">
</div>
<h1 class="text-center color2"><?=$person->name?></h1>
<blockquote>
    <p>
        "<?=$person->quote->text?>"
    </p>
    <footer>
        <cite><?=$person->quote->by?></cite>
    </footer>
</blockquote>
