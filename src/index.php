<button id="cache">Cacher le titre</button>
<h1 id="titre">
    <?php 
        echo 'Bonjour, monde !';
    ?>
</h1>

<h1>Mes fruits préférés</h1>
<ul>
<?php 
    $fruits = ['pomme', 'banane', 'poire', 'fraise'];
    foreach ( $fruits as $fruit ) {
        echo '<li>' . $fruit . '</li>';
    }
?>
</ul>

<script>
document.getElementById('cache').addEventListener('click', () => {
    var display_title = document.getElementById('titre').style.display;
    if ( display_title == 'block' || display_title === '' ) {
        document.getElementById('titre').style.display = 'none';
        document.getElementById('cache').innerHTML = 'Montrer le titre';
    }
    else {
        document.getElementById('titre').style.display = 'block';
        document.getElementById('cache').innerHTML = 'Cacher le titre';
    }
});
</script>
<style>
    h1 {
        background-color: cyan;
    }

    #titre {
        display: block;
    } 
</style>