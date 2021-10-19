<main role="main">

      <section class=" text-center bg-light p-20">
        <div class="container">
          
          <?php while($row = $dataSeo->fetch_object()) : ?>
          <h1 class="jumbotron-heading"><?=$row->titulo?></h1>
          <p class="lead text-muted"><?=$row->descripcion?></p>
          <?php endwhile; ?>

            <div class="row">
                <div class="col mb-0">
                  <div class="precio-container">
                      <span class="ngr">Compra:</span>
                      <span class="" id="compraBlue">
                      </span>
                  </div>
                </div>
                <div class="col mb-0"> 
                  <div class="precio-container">
                     <span class="ngr">Venta:</span>
                      <span class="" id="ventaBlue">
                      </span>
                  </div>  
                </div>
            </div> 
          
          <div class="var" id="variacionBlue">
          </div>
          <?=date("Y-m-d h:i:sa")?>
          <span id="id"><?=$id?></span>
        </div>
      </section>

      <section class="">
        
        <div class="container p-t-b"> 
          <h2>Dolar Blue histórico</h2>
          <div id="chartDolarOficial" style="height: 300px; width: 100%;"></div>

          <table class="table table-striped" id="historico">
            <thead>
              <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Compra</th>
                <th scope="col">Venta</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dataHistorico as $value) : ?>
              <tr>
                <td><?=$value['fecha']?></td>
                <td><?="$" . $value['compra']?></td>
                <td><?="$" . $value['venta']?></td>
              </tr>  
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>  
      </section>  

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
           
              <?php foreach ($articulos as $art) : ?>
                <div class="col">
                  <div class="card mb-4 box-shadow">
                    
                    <div class="card-body">
                      <h2 class="titulo-articulo" id="titulo"><?=$art['title']['rendered']?></h2>
                      <p class="card-text" id="excerpt">
                        <?=$art['excerpt']['rendered']?>
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group" id="enlace">
                          <a href="<?=$art['link']?>" class="btn btn-sm btn-outline-secondary">Ver</a>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            
            </div>
          </div>
        </div>
      </div>      

      <section class="">
        <div class="container p-t-b">      
             <h2 class="jumbotron-heading">Dólar Blue: Que es – Cotizcion hoy</h2>     

 <p>El dólar blue, dólar paralelo, dólar negro y demás son los nombres con los que se conoce a la moneda estadounidense cuando se realiza una compra o venta en el mercado ilegal. El dólar blue cuenta con un mercado de cambio paralelo al oficial, y suele tener un valor muy por encima de este último. </p>

 <p>El concepto de dólar blue o negro, comenzó en el año 2011 tras las restricciones aplicadas por el gobierno a la compra y venta de divisas extranjeras. Hoy en día, con un nuevo cepo cambiario, nuevas limitaciones y restricciones ante la compra o venta de dólar en Argentina, el dólar blue vuelve a cotizar en el mercado ilegal con una brecha del 80% con respecto al oficial. </p>

 <p>El nombre de dólar negro surgió tiempo atrás como referencia al dinero sucio proveniente de actividades ilegales, impuestos sin declarar, evasión y demás actividades ilícitas, que luego evoluciono al conocido actualmente como Dólar Blue. </p>

<p>Como surgió el dólar blue también nacieron otros conceptos y mercados paralelos al dólar oficial, como el caso del dólar turista referente a la compra de pasajes, hoteles y paquetes turísticos en el exterior, el cual tiene un recargo y una taza superior al oficial, al igual que el dólar tarjeta.</p> 
        </div>
      </section>


    </main>