<?php $page_id = 1; require "@tyrositeframework/start.php"; ?>

<?php $cp_navbar(); ?>
<?php $cp_header(); ?>

<main>


    <section id="about">


        <h2 class="titleSection">
            🍻 C'est quoi N00ka ?
        </h2>

        <div class="undertitle">
            <div class="line"></div>
        </div>

        <p class="txt">
            Entrez dans un univers unique où stratégie, fun et créativité se rencontrent !C'est un jeu de cartes à jouer et à collectionner, où chaque partie est différente et chaque deck reflète votre style. Créez vos propres cartes, intégrez-les aux boosters de la saison et devenez acteur de l’univers !Que vous soyez duelliste, en équipe, ou en mode chaos , le jeu s’adapte à toutes les envies !Préparez-vous à rire, rager et réagir dans un monde truffé de mèmes, de références cultes et de clins d’œil pop-culture.Tout est ici. Un univers qui n’attend que vous.
        </p>

    </section>


    <section id="owner">

        <div class="left">

            <img src="file_assets/people.png" class="img" alt="owner n00ka">

        </div>

        <div class="right">
            <h2 class="titleSection">
                🍻 Qui sommes-nous ?
            </h2>

            <div class="undertitle">
                <div class="line"></div>
            </div>

            <p class="txt">
                Bien sûr ! Voici un paragraphe clair et accrocheur pour présenter les créateurs et leur vision :
                Derrière ce jeu, deux passionnés : Marthelot Maëwan et Jonathan Cornuel.
                Animés par l’envie de rassembler les univers, les références, les délires et la culture geek/pop, ils ont imaginé un jeu où chacun peut exprimer sa vision, son humour et sa créativité. Leur objectif ? Créer bien plus qu’un simple jeu de cartes : une marque, un monde vivant et évolutif, où la communauté a toute sa place. Un espace où tout le monde peut contribuer, s’amuser et se reconnaître.
            </p>

        </div>

    </section>

    <section id="project">

        <h2 class="titleSection">
            🍻 Nos projets ?
        </h2>


        <div class="undertitle">
            <div class="line"></div>
        </div>


        <div class="rowProject">

            <article class="project">

                <div class="left">
                    <h2>
                        Saint Balais
                    </h2>

                    <p>Projet de jeux de carte</p>

                    <button  onclick="window.location.href = 'https://leshopsaintbalais.com/'">Boutique</button>

                </div>

                <div class="right">
                    <img src="file_assets/project/sb.png" class="img" alt="saintbalais">
                </div>

            </article>

        </div>

        <style>

            section#project{

                .rowProject{

                    margin-top: 40px;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    justify-content: center;

                    article.project{
                        color: white;
                        background-color: #523d28;

                        margin: 20px 0;
                        width: 100%;
                        height: 150px;
                        border-radius: 20px;
                        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px, rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
                        display: flex;

                        .left{
                            width: 50%;
                            height: 100%;
                            text-align: center;

                            h2{
                               margin-top: 13px;
                            }

                            p{
                                margin-bottom: 13px;
                            }

                            button{
                                background-color: #ffffff;
                                color: black;
                                padding: 5px 10px;
                                border: none;
                                border-radius: 5px;
                                cursor: pointer;
                                font-size: 16px;
                                transition:all .25s;
                                text-decoration: none;

                            }

                            button:hover{
                                text-decoration:none;
                                transform:scale(1.1);
                                -webkit-transform:scale(1.1);
                            }

                        }


                        .right{
                            width: 50%;
                            height: 100%;

                            img{

                                width: 100%;
                                height: 100%;
                                object-fit: contain;
                                filter: invert(1);
                            }
                        }





                    }
                }



            }




        </style>




    </section>

    <section id="partenaire">

        <h2 class="titleSection">
            🍻 Nos partenaires ?
        </h2>


        <div class="undertitle">
            <div class="line"></div>
        </div>

        <div class="rowPartenaire">

            <a href="https://tyrolium.fr/" target="_blank">
                <div class="pp" style="background-image: url('file_assets/part/Tyrolium.jpg')"></div>
            </a>

            <a href="https://www.instagram.com/maewanm/" target="_blank">
                <div class="pp" style="background-image: url('file_assets/part/graph.png')"></div>
            </a>

            <a href="https://linktr.ee/hystenchurch" target="_blank">
                <div class="pp" style="background-image: url('file_assets/part/label.png')"></div>
            </a>

            <a href="https://www.3idfx.fr/" target="_blank">
                <div class="pp" style="background-image: url('file_assets/part/1.png')"></div>
            </a>

        </div>



    </section>

</main>


<?php $cp_footer(); ?>
<?php $js_navbar(); ?>


<?php require "@tyrositeframework/end.php"; ?>