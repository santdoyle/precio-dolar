<main role="main">

      <section class=" text-center bg-light p-20 p-t-b">
        <div class="container">
          <h1 class="jumbotron-heading">Comprar dolares Hoy: Cotización actualizada</h1>
          <p class="lead text-muted">Precio del dolar actualizado minuto a minuto, en sus principales variantes, dolar paralelo, dolar bolsa, y dolar tarjeta entre otros.</p>
         
        
          <div class="row ">
                <div class="col-xl-3 col-lg-6">
                    <div class="card ll-bg-white">
                        <div class="card-statistic-3 p-2">
                            <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                            <div class="mb-2">
                                <h2 class="card-title mb-0">Dolar oficial</h2>
                            </div>
                            <div class="row">
                                <div class="col mb-0">
                                  <span class="sub-title">Compra</span>
                                    <div class="num" id="compraOficial">
                                    </div>
                                </div>
                                <div class="col mb-0">
                                  <span class="sub-title">Venta</span>   
                                    <div class="num" id="ventaOficial">
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="var" id="variacionOficial">
                                </div>
                                <span id="icon"></span>
                            </div>
                            <a href="<?=base_url?>precio/oficial">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-white">
                        <div class="card-statistic-3 p-2">
                            <div class="card-icon card-icon-large"><i class="fas fa-money-bill-alt"></i></div>
                            <div class="mb-2">
                                <h2 class="card-title mb-0"> Dolar Blue</h2>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                              <div class="col mb-0">
                                <span class="sub-title">Compra</span>
                                    <span class="num" id="compraBlue">
                                    </span>
                              </div>
                              <div class="col mb-0"> 
                                <span class="sub-title">Venta</span>  
                                    <span class="num" id="ventaBlue">
                                    </span>
                              </div>      
                            </div>
                            <div class="row">
                                  <div class="var" id="variacionBlue">
                                  </div>
                            </div> 
                            <a href="<?=base_url?>precio/blue">Más info</a> 
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-white">
                        <div class="card-statistic-3 p-2">
                            <div class="card-icon card-icon-large"><i class="fas fa-plane"></i></div>
                            <div class="mb-2">
                                <h2 class="card-title mb-0">Dolar turista</h2>
                            </div>
                            <div class="row">
                              
                              <div class="col mb-0">  
                                <span class="sub-title">Venta </span>   
                                    <span class="num" id="ventaTurista">
                                    </span>
                              </div>      
                            </div>
                            <div class="row">
                                <div class="var" id="variacionTurista">
                                </div>
                            </div>
                            <a href="<?=base_url?>precio/turista">Más info</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-white">
                        <div class="card-statistic-3 p-2">
                            <div class="card-icon card-icon-large"><i class="fas fa-chart-line"></i></div>
                            <div class="mb-2">
                                <h2 class="card-title mb-0">Dolar CCL</h2>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col mb-0">
                                    <span class="sub-title">Compra</span>
                                    <span class="num" id="compraCCL">
                                    </span>
                                </div>
                                <div class="col mb-0">    
                                    <span class="sub-title">Venta</span>
                                    <span class="num" id="ventaCCL">
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="var" id="variacionCCL">
                                </div>
                            </div>
                          <a href="<?=base_url?>precio/ccl">Más info</a>
                        </div>
                    </div>
                </div>
          </div>
        

        </div>
      </section>

      <section class="">
  
        <div class="container p-t-b">
          <h3>Otras cotizaciones</h3>
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Compra</th>
              <th scope="col">Venta</th>
              <th scope="col">Variación</th>
            </tr>
          </thead>
          <tbody id="cuerpo">
            
          </tbody>
          </table>
        </div>  
      </section>  

      <section class="bg-light">
          <div class="album py-5">
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
      </section>

      <section class="">
        <div class="container p-t-b column">
<h2>Precio del dolar actualizado día a día en todas sus variantes.</h2>

<p>En nuestro sitio web reunimos información completa sobre la situación de dólar actual, cotizaciones, impuestos y todo tipo de novedades que tengan impacto en esta moneda extranjera. Además resolvemos las dudas a todas tus preguntas, para que puedas comprar dólares en cualquier lugar y de cualquier forma sin complicaciones.</p>

<h2>¿Qué necesito para comprar dólares?</h2>

<p>Si bien en nuestro país toda persona física puede comprar dólares, existen limitaciones y recargos ante este trámite, desde que fue implementado el nuevo cepo cambiario junto a la Ley de Solidaridad Social y reactivación productiva.</p>

<p>Para poder hacerlo es necesario completar el formulario correspondiente que pide la UIP ante las casas de cambio para investigaciones de lavado de dinero. </p>

<p>El nuevo cepo cambiario limita el monto de dólares a comprar por mes, y sumado a esto, un impuesto asociado del 30%.</p>

<h2>Restricciones y limitaciones para comprar dólares</h2>

<p>El 4 de mayo de este año, se anunció una nueva normativa por parte del Banco Central, la cual limita la obtención del dólar oficial y también limita las operaciones con los dólares alternativos. Estas limitaciones tienen vigencia tanto para el dólar Bolsa, como para el dólar contado con liqui (liquidación) CCL y es aplicado tanto para empresas como para ahorristas.</p>

<p>Una de las limitaciones corresponde a la compra máxima e 200 dólares mensuales a precio oficial, y solo tendrán acceso a estos quienes no hay tenido ningún tipo de transacción de dólar bolsa o dólar contado con liquidación. en los 30 días anteriores a la fecha.</p>

<p>Desde el mes de mayo solo será posible comprar dólares en casas de cambio y bancos exclusivamente.

<h2>Impuesto a la compra de dólares</h2>

<p>Desde el 17 de diciembre de 2019 rige en Argentina el impuesto de 30% a todas las transecciones realizadas con dólar tarjeta, y a las operaciones de compra de dólar que sean para atesoramiento.

<p>El impuesto PAIS aplica en lo que son compras internacionales con tarjeta de crédito como Netflix, Spotify y este tipo de servicios (Dólar Tarjeta), también para el dólar turista ante compras de pasajes, hoteles, y demás, y el dólar ahorro para atesoramiento.</p>

<p>El impuesto del 30% solo aplica para la compra de divisas extranjeras y pagos de productos o servicios en otra moneda. En caso de realizar transferencias en esta moneda a otra cuenta, o venta de dólares el impuesto no aplica.</p>

<p>El impuesto se aplica sobre el monto total de compra convertido a pesos según el tipo de cambio vendedor del Banco Nación, y su valor correspondiente al día hábil anterior a la fecha de pago, independientemente del Banco donde realices la compra.</p>

<h2>¿Se pueden compra dólares sin el 30%?</h2>

<p>Es posible evitar el impuesto mediante la compra del dólar bolsa. En este caso se requiere adquirir divisas mediante la compra venta de bonos que estén a un precio inferior de la cotización más el 30%, y en lo posible del dólar informal.</p>

<p>Lógicamente el dólar blue es otra opción teniendo en cuenta que este no forma parte del circuito legal formal.</p>

<h2>Comprar dólares por home Banking</h2>

<p>EL impuesto del 30% aplica a todas las compras de moneda extranjera, ya sea online por hombanking o presencial por ventanilla y para cualquier banco. La diferencia es que la compra por hombanking puede ser de hasta $200 por persona por mes. Comprar dólares online es más barato ya que la operación del impuesto se hace por separado y en pesos, resultando un costo más bajo.</p>

<p>Comprar más de 200 dólares por homebanking incumple las normativas de compra y venta de divisas extranjeras por lo que es ilegal, y probablemente este limitado de forma automática en el servicio online del banco, aún así te recomiendo no hacerlo.</p>
        </div>
      </section>

    </main>