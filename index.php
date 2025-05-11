<?php $page_id = 1; require "@tyrositeframework/start.php"; ?>

<?php $cp_header(); ?>


<style>
    main {
        background-color: white;
        margin-top: -40px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
    }

    section {
        padding: 75px 0px;
        max-width: 1250px;
        margin: 0 auto;



    }

    section#quoi{
        padding-top: 125px;
    }

    p.txt{
        text-align: center;
        font-size: 20px;
        margin: 60px 80px;
    }

</style>

<main>


    <section id="quoi">


        <h2>
            🍻 C'est quoi N00ka ?
        </h2>

        <div class="undertitle"></div>

        <p class="txt">
            Lorem ipsum dolor sit amet, incididunt irure lorem exercitation minim anim, ullamco fugiat tempor lorem deserunt nostrud commodo id. Elit excepteur dolor mollit veniam. Voluptate nisi eu sed est incididunt, laborum dolore eu laboris. Tempor mollit elit sit voluptate sunt ea, exercitation dolor deserunt esse quis. Sed adipiscing ea magna nulla, pariatur magna officia ipsum ullamco commodo ad.
        </p>

    </section>


    <section id="qui">

        <div class="left">

            <img src="file_assets/people.png" class="img" alt="owner n00ka">

        </div>

        <div class="right">
            <h2>
                🍻 Qui sommes-nous ?
            </h2>

            <div class="undertitle"></div>

            <p class="txt">
                Lorem ipsum dolor sit amet, incididunt irure lorem exercitation minim anim, ullamco fugiat tempor lorem deserunt nostrud commodo id. Elit excepteur dolor mollit veniam. Voluptate nisi eu sed est incididunt, laborum dolore eu laboris. Tempor mollit elit sit voluptate sunt ea, exercitation dolor deserunt esse quis. Sed adipiscing ea magna nulla, pariatur magna officia ipsum ullamco commodo ad.
            </p>

        </div>


        <style>

            section#qui{
                display: flex;
                flex-direction: row;

                .left{
                    width: 50%;

                    display: flex;
                    justify-content: center;
                    align-items: center;

                    img{
                        height: 100%;
                        margin: auto;
                        border-radius: 22px;
                        max-width: 100%;
                        object-fit: contain;
                    }
                }

                .right{
                    width: 50%;
                }
            }
            

        </style>




    </section>

    <section id="project">

        <h2>
            🍻 Nos projets ?
        </h2>


        <div class="undertitle"></div>





    </section>

    <section id="partenaire">

        <h2>
            🍻 Nos partenaires ?
        </h2>


        <div class="undertitle"></div>





    </section>

</main>

<?php $cp_footer(); ?>




<?php require "@tyrositeframework/end.php"; ?>