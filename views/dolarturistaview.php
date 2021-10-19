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
                      <span class="ngr">No cotiza en compra</span>
                      
                  </div>
                </div>
                <div class="col mb-0"> 
                  <div class="precio-container">
                     <span class="ngr">Venta:</span>
                      <span class="" id="ventaTurista">
                      </span>
                  </div>  
                </div>
            </div> 
          
          <div class="var" id="variacionTurista">
          </div>
          <?=date("Y-m-d h:i:sa")?>
          <span id="id"><?=$id?></span>
        </div>
      </section>

      <section class="">
         
        <div class="container p-t-b"> 
         <h2>Dolar Turista histórico</h2>
           
              <div id="chartDolarOficial" style="height: 300px; width: 100%;"></div>
              
              <table class="table table-striped" id="historico">
                <thead>
                  <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Venta</th>
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
             <h2 class="jumbotron-heading">Dolar turista y dólar tarjeta</h2>     

<p>El dólar turista actualmente cotiza alrededor de los $91.75, valor que surge de la sumatoria del 30% sobre el precio de la moneda estadounidense, siendo esta de $70.58 hoy.</p>

<p>Se conoce como dólar turista a las transacciones y adquisiciones realizadas en moneda extranjero dentro de la categoría turismo como compra de pasajes de avión, hoteles, y paquetes turísticos, que no son abonadas con dólares atesorados previamente.</p>

<p>El dólar turista sirve como referencia para la adquisición del dólar ahorro, el cual está regulado a una compra máxima de $200 por mes por persona, sumado al 30% del impuesto PAIS. La compra de dólar ahorro es de $200 si se realiza de forma online y de $100 si se realiza por ventanilla.</p>

<p>Antes del nuevo cepo cambiario y las imposiciones por el impuesto país, era una costumbre comprar dólares antes de viajar, utilizar la tarjeta en el exterior para realizar compras y también abonar pasajes y reservas previos al viaje, sin embargo, ahora con el recargo del 30% y las limitaciones de compra por mes y por persona, hacen que esto no sea posible o sea mucho más caro.</p>

<h2>¿Por qué se llama dólar turista?</h2>

<p>Se lo denomina turista porque quienes viajen al exterior son las personas que tendrán que pagar el recargo sobre sus gastos. Aun así, el impuesto del 30% alcanza servicios extranjeros que se contratan desde el país como por ejemplo Netflix, Spotify y demás.</p>

<h2>Qué servicios tienen el recargo del dólar tarjeta o turista</h2>

<p>Aplicaciones y servicios de entretenimiento y citas, como streaming, Netflix, HABO GO, Spotify, Airbnb y otros. También licencias de software y cursos online en el exterior.</p>

<ul>
  <li>Servicios que cuentan con sede en Argentina como Cabify no tendría recargo, pero si Uber.</li>
  <li>Juegos y compras online de distintas plataformas como Nintendo, Play Station y demás.</li>
  <li>Pasajes, reservas, paquetes y demás productos de turismo.</li>
  <li>NO son incluidos productos médicos.</li>
</ul>

<h2>Cómo se si estoy pagando el recargo del 30%</h2>

<p>Las compras que se realizan en moneda extranjera figuran en el resumen de la tarjeta detallados en pesos, al tipo de cambio oficial del día en que cerro la tarjeta. En caso de tener recargo, el valor total incluirá el recargo.</p>

<h2>Soy argentino y vivo en el extranjero</h2>

<p>Si sos argentino y estas viviendo en el extranjero y tenes una tarjeta de crédito o débito emitida por un banco radicado en Argentina tendrás que pagar el recargo de cada compra. Si la tarjeta es de un banco del extranjero, el gasto no tendrá el recargo.</p>
        </div>
      </section>


    </main>