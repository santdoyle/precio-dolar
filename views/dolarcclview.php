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
                      <span class="" id="compraCCL">
                      </span>
                  </div>
                </div>
                <div class="col mb-0"> 
                  <div class="precio-container">
                     <span class="ngr">Venta:</span>
                      <span class="" id="ventaCCL">
                      </span>
                  </div>  
                </div>
            </div> 
          
          <div class="var" id="variacionCCL">
          </div>
          <?=date("Y-m-d h:i:sa")?>
          <span id="id"><?=$id?></span>
        </div>
      </section>

      <section class="">
        
        <div class="container p-t-b"> 
          <h2>Dolar CCL histórico</h2>
          <div id="chartDolarOficial" style="height: 300px; width: 100%;"></div>
          
          <table class="table table-striped" id="historico">
            <thead>
              <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Referencia</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dataHistorico as $value) : ?>
              <tr>
                <td><?=$value['fecha']?></td>
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
             <h2 class="jumbotron-heading">¿Qué es el dólar contado con liquidación – DCL?</h2>     


                <p>El dólar contado con liqui es una de las valoraciones paralelas al oficial más mencionadas actualmente, con un precio por encima de los $100, per ¿Qué es el dólar contado con liqui? ¿Cuál es la diferencia con el dólar bolsa y otros paralelos? A continuación, te explicamos todo lo que tenes que saber.</p>

                <h2>¿Qué es el dólar contado con liquidación?</h2>

                <p>El dólar contado con liquidación o DCCL, consiste en la compra de moneda extranjera dólares en este caso, a través de la bolsa. Para poder hacerlo es necesario contar con una cuenta bancaria en el exterior abierta.</p>

                <h2>¿Cómo se compra dólar contado con liqui?</h2>

                <p>Para poder comprar dólar contado con liquidación es necesario comprar bonos o acciones empresas en Argentina que coticen al mismo tiempo en el exterior. Una empresa puede cotizar en bolsa extranjera como en Estados Unidos y también en bolsa local en Argentina en pesos. lógicamente.</p>

                <p>Lo que se hace es comprar en Argentina en pesos, se solicita la transferencia al exterior y se vende contra dólares, los cuales quedan depositados en la cuenta en el exterior.</p>

                <p>El cambio tomado en esta transacción al que se compran los dólares resulta de la división entre el precio pagado en pesos en Argentina, y el precio al que se vende en dólares sen el exterior.</p>

                <p>Este tipo de operación es completamente legal y no tiene monto máximo. Es utilizado comúnmente por empresas que buscan tener depósitos fuera del país y por ahorristas que buscan evitar el riesgo argentino.</p>

                <h2>¿Qué diferencia hay entre dólar bolsa y ccl?</h2>

                <p>El costo del dólar contado con liquidación es mayor que el dólar bolsa ya que para acceder al dólar contado con liqui es necesario sumar el costo de transferencia del activo al exterior para poder venderlo. En cambio, el dólar bolsa queda en moneda local en la cuenta de argentina.</p>

                <p>El dólar bolsa o dólar mep, es la compra de moneda extranjera en la bolsa local, a través de la compra de bonos.</p>
        </div>
      </section>


    </main>