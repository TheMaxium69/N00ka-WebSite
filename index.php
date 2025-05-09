<?php $page_id = 1; require "@tyrositeframework/start.php"; ?>

<?php $cp_header(); ?>


<style>
    main {
        background-color: white;
        margin-top: -40px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;


        /*height: 100000vh; !* TEMP *!*/
    }



    section {
        padding: 400px 100px;



    }

    section#quoi{
        padding-top: 150px;
    }

</style>

<main>


    <section id="quoi">


        <h2>
            🍻 C'est quoi N00ka ?
        </h2>

        <div class="undertitle"></div>

        <p class="txt"></p>

    </section>


    <section id="qui">

        <h2>
            🍻 Qui sommes-nous ?
        </h2>


    </section>

    <section id="project">

        <h2>
            🍻 Nos projets ?
        </h2>


    </section>

    <section id="partenaire">

        <h2>
            🍻 Nos partenaires ?
        </h2>


    </section>

</main>

<?php $cp_footer(); ?>




<?php require "@tyrositeframework/end.php"; ?>