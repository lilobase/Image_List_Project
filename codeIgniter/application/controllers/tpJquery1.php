<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Le titre de la page</title>
    <style type="text/css">
      .bleu {
        color: blue;
      }
      .vert{
          color: green;
      }
    </style>
  </head>

  <body>

<p id="contenu"> 
  Lorem <span class="vert">ipsum dolor</span> sit amet, <span class="titre2"> 
  consectetur adipiscing elit</span>.Etiam <a href="#">facilisis</a>  
  <span class="rouge">ultrices</span> dolor, eu <span class="orange">fermentum 
   eros</span> aliquet ac. Aenean varius <span class="titre2">ultrices nisi 
  </span> vel aliquet. Nam eu viverra sem. <span class="gras">Fusce facilisis 
  </span> eros ac <span class="titre1">elit scelerisque molestie</span>. Morbi 
   lacus orci, interdum ac <span class="souligne">faucibus hendrerit</span>, 
   <span class="barre">facilisis vel</span> nunc. <span class="souligne">Sed in 
  </span> <span class="bleu">mauris</span> <span class="gras">lorem</span>.  
  Integer facilisis, <span class="italique">augue et suscipit</span> molestie, 
   <span class="barre">lectus lectus</span> pellentesque mi, <span class="vert"> 
  at</span> condimentum <span class="italique">nulla</span> nibh ut turpis. <span> 
  Cum sociis</span> natoque <span class="vert">penatibus et magnis</span> dis  
  <a href="#">parturient montes</a>, nascetur ridiculus mus. Etiam quis nisl  
  metus.<span class="vert">Phasellus</span>ullamcorper posuere augue quis placerat.  
  <span class="titre1">Duis sed quam</span>odio. Donec <span class="vert">aliquam 
   metus</span> a <a href="#">ligula lacinia</a> a tempor leo <span class="bleu">imperdiet</span>. 
   Cras augue purus, <span class="souligne">lobortis eu</span> scelerisque sed, 
   <span class="vert">venenatis ut</span> turpis. Donec <span class="bleu">quis 
   magna sapien</span>. Ut ut diam arcu. <span class="souligne">Suspendisse nec 
   risus</span> id lacus venenatis <a href="#">rhoncus.</a> In vitae  
  <span class="vert">justo tellus</span>, <span class="bleu">vitae lacinia nunc 
  </span>. Aliquam <span class="italique">erat</span> <span class="rouge">volutpat.</span> 
</p>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
    function test(){
        $('span').remove('.vert');
        $('a').empty();
    }
</script>
<button onclick="test()">Cliquez ici</button>

  </body>
</html>
