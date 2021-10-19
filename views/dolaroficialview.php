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
                      Compra
                      <span class="" id="compraOficial">
                      </span>
                  </div>
                </div>
                <div class="col mb-0"> 
                  <div class="precio-container">
                      Venta:
                      <span class="" id="ventaOficial">
                      </span>
                  </div>  
                </div>
            </div> 
          
          <div class="var" id="variacionOficial">
          </div>
          <?=date("Y-m-d h:i:sa")?>
          <span id="id"><?=$id?></span>
        </div>
      </section>

      <section class="">
        <div class="container p-t-b">  
                  <h2>Dolar oficial histórico</h2>
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
      

         
        </div>
      </section>


    </main>