<?php 
  $paragraph = 'Nel 1980, tra i profughi dell\'esodo di Mariel ci sono Antonio "Tony" Montana e Manolo "Manny" Ribera, due piccoli criminali cubani portati alla Freedom Town, un ghetto di popolazione cubana a Miami. I due riescono ad andarsene in fretta guadagnandosi la protezione del boss criminale Frank Lopez, al vertice di un cartello della droga saldamente affermato. Ottenuta la green card di residenza, i due amici cominciano a lavorare come camerieri e lavapiatti in un chiosco, ma Tony dimostra insofferenza per la sua nuova vita.

  Non appena Lopez si rifà vivo tramite il suo tirapiedi Omar Suarez, Tony e Manny si mettono in attività con lui, diventando così gangster. Per prima cosa vengono mandati a comprare una partita di cocaina da alcuni colombiani in un hotel di Miami, ma questo lavoro si rivelerà più difficile del previsto e un loro compare, Angel, viene barbaramente ucciso con una motosega. In seguito Tony inizia ad entrare con maggior confidenza nel giro malavitoso acquistando la fiducia di Lopez, che rimarrà sorpreso del suo carisma e dal suo carattere forte. A casa di Lopez, Tony incontra Elvira Hancock, da cui rimane colpito; il cubano farà il possibile per conquistarla. Dopo aver raccolto i primi contanti, Tony si reca a casa della madre e della sorella, per dar loro un aiuto economico. Qui riemergono il rapporto conflittuale con la madre, e la stima e il forte senso di protezione nei confronti della sorella minore.
  
  Nel corso della sua attività malavitosa in crescente prosperità, Tony viene mandato da Lopez in Bolivia a Cochabamba insieme a Suarez a trattare per una grossa fornitura di cocaina da Alejandro Sosa, uno dei più grandi produttori delle Ande. Sosa ha subito grande considerazione di Tony e del suo acume, a dispetto però di Suarez, che dopo l\'incontro viene pestato e poi impiccato perché ritenuto informatore della polizia. ';

  $badword = $_GET["badword"];

  $correctParagraph = str_replace($badword, '***', $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Badwords</title>
</head>
<body>

  <h1>Php Badwords</h1>

  <h2>Parola da censurare: <?php echo $badword ?></h2>

  <!-- paragrafo originale 
-->
  <h2>Paragrafo originale</h2>
  <p>
    <?php
      echo $paragraph
    ?>
  </p>

  <h2>
    Lunghezza paragrafo originale
    <?php 
      echo strlen($paragraph)
    ?>
  </h2>
  <hr>

  <!-- paragrafo modificato -->
  <h2>Paragrafo modificato</h2>
  <p>
    <?php
      echo $correctParagraph
    ?>
  </p>

  <!-- lunghezza paragrafo corretto -->
  <h2>
    Lunghezza paragrafo corretto
    <?php 
      echo strlen($correctParagraph)
    ?>
  </h2>

</body>
</html>