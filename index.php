<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="viewport" content="width=device-width">
	<title>Floating Ball - il miglior gioco interattivo per tutta la famiglia!</title>
	 <meta name="description" content="Divertimento per tutti i membri della famiglia, in qualsiasi situazione!">
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="css/reset.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/media.css" />

	<!-- JS -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.panorama.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


    <script>
        var url = new URL(window.location.href);
        var pixel = url.searchParams.get('pixel');
        var tiktok = url.searchParams.get('tiktok');

        if (pixel) {
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', pixel);
            fbq('track', 'PageView');
        } else if (tiktok) {
            (function() {
                var ta = document.createElement('script'); ta.type = 'text/javascript'; ta.async = true;
                ta.src = 'https://analytics.tiktok.com/i18n/pixel/sdk.js?sdkid=' + tiktok;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ta, s);
            })();
        }
    </script>

</head>
<body  class="lang-it">

<div class="wrapper">
    <!--offer-->
    <section class="offer">
        <div class="wrp">
            <div class="title">
                <span>Offri alla tua famiglia il gioco interattivo mai visto</span>
                <b>Floating Ball</b>
            </div>
            <!--plus-->
            <div class="plus">
                <ul>
                    <li>Spara ai bersagli in movimento in aria, usando i proiettili 🔫</li>
                    <li>Migliora la concentrazione, la coordinazione delle mani e degli occhi 🏐</li>
                    <li>Accetta la sfida, gioca con tutta la famiglia! 🥳</li>
                </ul>

                <div class="mobile_header">
                    <img src="img/mobimg.jpg">
                </div>

                <div class="cost clrfix">
                    <div class="text">PREZZO <span> CON LO SCONTO </span></div>
                    <div class="value">
                        <div class="old_cost"><span class="price_land_s2">90</span> <span
                                    class="price_land_curr">&euro;</span></div>
                        <div class="new_cost"><span class="price_land_s1">45</span> <span
                                    class="price_land_curr">&euro;</span></div>
                    </div>
                </div>
                <!--/cost-->
                <form class="main-order-form orderformcdn" action="api.php?stream_key=<?php echo $_GET['stream_key']?>" method="post">

                    <div class="field_set">
                        <input class="field" type="text" name="name" placeholder="Inserire il cognome" required>
                    </div>
                    <div class="field_set">
                        <input class="field" type="tel" name="phone" placeholder="Inserire il numero di telefono" required>
                    </div>
                    <div class="btn">
                        <input class="button-m" value="ORDINA ADESSO" type="submit">
                    </div>
                    <div class="stock">Sono rimaste<b>9</b>pezzi a prezzo promozionale</div>
                </form>
                
            </div>
            <!--/order_form-->
        </div>
    </section>
    <!--/offer-->
    <!--gif_section-->
    <section class="gif_section">
        <div class="wrp">
            <h2 class="title">Vi proponiamo il più innovativo gioco interattivo<span>Floating Ball</span></h2>
            <ul class="clrfix">
                <li>
                    <div class="title">Migliora il rapporto tra te e i tuoi familiari.
                        <br class="br_mobile"> <br class="br_mobile"> <br class="br_mobile">
                    </div>
                    <div class="pic">
                        <img src="img/1.jpg" >
                    </div>
                </li>
                <li>
                    <div class="title">Fate un concorso per vedere chi può colpire il maggior numero di palle!
                        <br class="br_mobile"> <br class="br_mobile"> 
                    </div>
                    <div class="pic">
                        <img src="img/2.gif" >
                    </div>
                </li>
                <li>
                    <div class="title">Per un divertimento spettacolare, giocate di notte perché le palle da gioco illuminano al buio.</div>
                    <div class="pic">
                        <img src="img/3.jpg" >
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--/gif_section-->
    <!--new_approach-->
    <section class="new_approach">
        <div class="wrp">
            <!--box-->
            <div class="box clrfix">
                <!--pic-->
                <div class="pic">
                    <img class="im" src="img/image1.gif" >
                </div>
                <!--/pic-->
                <div class="info">
                    <h2 class="title">Porta il party game ad un altro livello</h2>
                    <p>
                        <b>I partecipanti, indipendentemente dall’età apprezzeranno sicuramente questo tipo di gioco perché interattivo e sicuro.</b>
                    </p>
                    <p>Avrai la possibilità di mostrare le tue abilità di tiro, sfida i tuoi amici a giocare con te. </p>
                </div>
            </div>
            <!--/box-->
        </div>
    </section>
    <!--/new_approach-->
    <!--gallery-->
    <section class="gallery">
        <img class="panorama" width="920" height="152" src="img/gal-bg.jpg" >
    </section>
    <!--/gallery-->
    <!--plus_section-->
    <section class="plus_section">
        <div class="wrp">
            <h2 class="title">Divertimento in voga per il tuo bambino.</h2>
            <!--list-->
            <ul class="list clrfix">
                <li>
                    <div class="pic">
                        <img src="img/plus_image1.jpg" >
                    </div>
                    <div class="title">Migliora il coordinamento  <span> mano-occhi</span></div>
                    <div class="desc">A differenza dei videogiochi, questo gioco di tiro offre bersagli e frecce reali in movimento rendendo il tiro più preciso rispetto a uno schermo. Potete sparare da qualsiasi prospettiva e distanza, rafforzando gradualmente le capacità visive ed i riflessi spaziali. </div>
                </li>
                <li>
                    <div class="pic">
                        <img src="img/plus_image2.jpg" >
                    </div>
                    <div class="title">Livello di difficoltà<span>regolabile</span></div>
                    <div class="desc">Il flusso d'aria al Floating Ball può essere regolato per modificare il livello di difficoltà. C'è una vite sotto ogni palla con cui potete regolare la loro altezza flottante. Coordina con abilità gli spari e scoprirai chi è il migliore tra i tuoi familiari e amici. </div>
                </li>
                <li>
                    <div class="pic">
                        <img src="img/plus_image3.gif">
                    </div>
                    <div class="title">Altoparlanti <span>integrati</span></div>
                    <div class="desc">Floating Ball è dotato di un altoparlante interno per aggiungere un ulteriore elemento interattivo alla tua esperienza o gira semplicemente l’interruttore e spara in silenzio. Puoi giocare ovunque sia in casa sia all'aperto. </div>
                </li>
                <li>
                    <div class="pic">
                        <img src="img/plus_image4.gif" >
                    </div>
                    <div class="title">Qualità   <span>premium</span></div>
                    <div class="desc"> Realizzato in materiale ABS di alta qualità, questo gioco di tiro aereo garantisce resistenza e durata. La pistola a freccia ha un caricatore rimovibile, rendendo il caricamento ancora più facile. Le punte delle frecce sono realizzate in schiuma e sono sicure anche per i bambini.
                        </div>
                </li>
            </ul>
            <!--/list-->

            <!--btn-->
            <div class="btn">
                <a class="button-m" href="#order">ORDINA ADESSO</a>
            </div>
            <!--/btn-->
        </div>
    </section>
    <!--/plus_section-->
    <!--how_works-->
    <section class="how_works">
        <div class="wrp">
            <div class="recommend">
                <div class="pic">
                    <img src="img/recommend_image.jpg" >
                </div>
                <div class="info">
                    <h2 class="title">Kit per divertimento</h2>
                    <p><b>Il kit comprende:</b></p>
                    <p>• 1 p. base che soffia aria</p>
                    <p>• 1 p. arma da tiro</p>
                    <p>• 3 p. proiettili morbidi</p>
                    <p>• 10 palline galleggianti</p>
                </div>
                <div class="clear"></div>
            </div>
            <!--/recommend-->
        </div>
    </section>
    <!--/how_works-->
    <!--order_steps-->
    <section class="order_steps">
        <div class="wrp">
            <h2 class="title">Come ordinare una palla galleggiante?</h2>
            <ul class="clrfix">
                <li>
                    <div class="item">
                        <div class="icon">
                            <div class="num_step">1° Passo</div>
                            <img src="img/step_icon1.png">
                        </div>
                        <div class="text">
                            Compila il modulo  <span>d'ordine</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon">
                            <div class="num_step">2° Passo</div>
                            <img src="img/step_icon2.png" >
                        </div>
                        <div class="text">
                            Il nostro operatore ti contatterà per confermare i dati d’ordine</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon">
                            <div class="num_step">3° Passo</div>
                            <img src="img/step_icon3.png">
                        </div>
                        <div class="text">
                            Consegniamo l’ordine<span>tramite corriere espresso entro 1-2 giorni</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="icon">
                            <div class="num_step">4° Passo</div>
                            <img src="img/step_icon4.png" >
                        </div>
                        <div class="text">
                            Senza pagamento in anticipo. <span>Paga in contanti alla consegna!</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--/order_steps-->
    <!--reviews-->
    <section class="reviews">
        <div class="wrp">
            <h2 class="title">Recensioni dei parenti</h2>
            <ul class="clrfix">
                <li>
                    <div class="item">
                        <div class="photo">
                            <img src="img/reviews_photo1.jpg" >
                            <div class="name">Sorina, 57 anni</div>
                        </div>
                        <div class="desc">
                            <strong>Regalo perfetto per il tuo bambino</strong>
                            <p>Ho ordinato questo giocattolo come regalo per il compleanno di mio nipote di 6 anni e sono abbastanza sicuro che gli piacerà. La cosa più interessante è che suo padre ha giocato e si è  divertito nella stessa misura di mio nipote! Mi è piaciuto molto che le frecce e le palline sono morbide. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="photo">
                            <img src="img/reviews_photo2.jpg" >
                            <div class="name">Agela, 34 anni</div>
                        </div>
                        <div class="desc">
                            <strong>Non pensavo che mia figlia avesse tali capacità.</strong>
                            <p>Il prodotto è fantastico per ragazzi e ragazze. È un esercizio di mira al bersaglio, mentre le palline fluttuano in aria con la base fornita.
                                </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="photo">
                            <img src="img/reviews_photo3.jpg" >
                            <div class="name">Bogdan, 26 anni</div>
                        </div>
                        <div class="desc">
                            <strong>Conquista anche i più piccoli!</strong>
                            <p>Ho ricevuto il kit per mio fratello di 5 anni. Lo adora. La qualità del prodotto era buona. Le palline di schiuma sono molto sicure. Anche le frecce non cadono, quindi è stata una buona scelta per lui. Tutta la famiglia si è divertita.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--/reviews-->
    <!--offer-->
    <section class="offer" id="order">
        <div class="wrp">
            <div class="title">
                <span>Offri alla tua famiglia il gioco interattivo mai visto</span>
                <b>Floating Ball</b>
            </div>
            <!--plus-->
            <div class="plus">
                <ul>
                    <li>Spara ai bersagli in movimento in aria, usando i proiettili 🔫</li>
                    <li>Migliora la concentrazione, la coordinazione delle mani e degli occhi 🏐</li>
                    <li>Accetta la sfida, gioca con tutta la famiglia! 🥳</li>
                </ul>

                <div class="mobile_header">
                    <img src="img/mobimg.jpg">
                </div>

                <div class="cost clrfix">
                    <div class="text">PREZZO <span>CON LO SCONTO</span></div>
                    <div class="value">
                        <div class="old_cost"><span class="price_land_s2">90</span> <span
                                    class="price_land_curr">&euro;</span></div>
                        <div class="new_cost"><span class="price_land_s1">45</span> <span
                                    class="price_land_curr">&euro;</span></div>
                    </div>
                </div>
                <!--/cost-->
                <form class="main-order-form orderformcdn" action="api.php?stream_key=<?php echo $_GET['stream_key']?>" method="post">

                    <div class="field_set">
                        <input class="field" type="text" name="name" placeholder="Inserire il cognome" required>
                    </div>
                    <div class="field_set">
                        <input class="field" type="tel" name="phone" placeholder="Inserire il numero di telefono" required>
                    </div>
                    <div class="btn">
                        <input class="button-m" value="ORDINA ADESSO" type="submit">
                    </div>
                    <div class="stock">Sono rimaste<b>9</b>pezzi a prezzo promozionale</div>
                </form>
               
            </div>
            <!--/order_form-->
        </div>
    </section>
    <!--/offer-->
    <footer style="display: flex; flex-direction: column; align-items: center; text-align: center; padding: 15px 0; font-size: 13px;">
        <p>Piazza Pio XI, 82, 00165 Roma RM, Italy</p>
        
        <div style="margin: 5px 0">
            <a class="nav-link" href="tel:3278164001" style="color: inherit">+3278164001</a>
            <a class="nav-link" href="mailto:goodproducts@gmail.com" style="color: inherit">goodproducts@gmail.com</a> 
        </div>
    
        <div class="conf-link doclinks" style="display: flex; flex-direction: column">
        <a href="https://policy.deliverygoods.ru/en/" target="_blank" style="color: inherit">Privacy Policy</a> 
        <a href="https://policy.deliverygoods.ru/en/terms.html" target="_blank" style="color: inherit">Terms & Conditions</a> 
        <a href="https://policy.deliverygoods.ru/en/refund.html" target="_blank" style="color: inherit">Refund Policy</a> 
        <a href="https://policy.deliverygoods.ru/en/return.html" target="_blank" style="color: inherit">Return Policy</a> 
        <a href="https://policy.deliverygoods.ru/en/disclaimer-statement.html" target="_blank" style="color: inherit">Disclaimer-Statement</a> 
        </div>	
    </footer>
</div>

<script src="api.js"></script>
<script async defer src="https://mtrkt.com/tracker/analytics.js"></script>


<!-- MTRKT -->
<script async defer src="https://mtrkt.com/tracker/analytics.js"></script>
<!-- END MTRKT -->
</body>
</html>






