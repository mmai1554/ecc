<?php

$id_of_carousel = 'carousel_legendaer';

?>
<h2 class="text-center">Legendär</h2>
<div id="<?php echo( $id_of_carousel ); ?>" class="carousel slide mi-carousel-legendaer" data-ride="carousel" data-interval="false">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	    <?php // item: ?>
        <div class="item active">
            <div class="mi-card">
                <div class="mi-card-text">
                    „Im Rahmen unserer Expertenvortragsreihe überzeugte Kerstin Eisenschmidt in der Kieler Kunsthalle mit einer hoch spannenden und absolut aktuellen
                    Keynote. Aus den Megatrends leitete sie logisch die Entwicklung einer integeren Führungskultur ab und lebte es mit ihrer warmherzigen und kraftvollen
                    Art auch gleich vor. Lebendig und begeisternd zog sie uns alle in den Bann der digitalen Transformation.“
                </div>
                <div class="mi-card-signature">
                    Imke Täufer-Krebs<br>
                    Personalentwicklung<br>
                    Christian-Albrechts-Universität zu Kiel
                </div>
            </div>
        </div>
	    <?php //  item: ?>
        <div class="item">
            <div class="mi-card">
                <div class="mi-card-text">
                    „Struktur und Leidenschaft, Empathie und Authentizität – Kerstin Eisenschmidt ist non-konformistisch, motivierend und absolut inspirierend: Mit ihrem
                    klaren, strategischen Denken gibt sie Impulse in ihr Publikum, die unmittelbar Veränderungsprozesse in Gang setzen. Das gelingt ihr, weil sie mit
                    großer
                    Leidenschaft überzeugt und ihr Storytelling mit Praxisbeispielen aus ihrer langjährigen Industrie-Erfahrung das Thema sofort erfahrbar macht.“
                </div>
                <div class="mi-card-signature">
                    Regina Mehler<br>
                    1ST ROW und WOMEN SPEAKER FOUNDATION
                </div>
            </div>
        </div>
		<?php //  item: ?>
        <div class="item">
            <div class="mi-card">
                <div class="mi-card-text">
                    „Kerstin berührt und inspiriert uns seit über 10 Jahren – wirkliche Veränderung im Unternehmen braucht eine Initialzündung, genau das erleben wir in
                    Kerstins Vorträgen.“
                </div>
                <div class="mi-card-signature">
                    Eva Schad<br>
                    Unternehmensführung, Personalentwicklung, Qualitätsmanagement<br>
                    David Chipperfield Architects in Berlin
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->

    <a class="left carousel-control" href="#<?php echo( $id_of_carousel ); ?>" role="button" data-slide="prev">
        <div class="mi-carousel-control prev">
            <img src="/files/kerstin-eisenschmidt/cc-left.png" alt="carousel control left">
        </div>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#<?php echo( $id_of_carousel ); ?>" role="button" data-slide="next">
        <div class="mi-carousel-control next">
            <img src="/files/kerstin-eisenschmidt/cc-right.png" alt="carousel control right">
        </div>
        <span class="sr-only">Next</span>
    </a>
</div>