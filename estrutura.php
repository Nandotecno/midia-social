<section id="estrutura" class="estrutura">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>organização</h2>
          <p>Conheça nossa estrutura</p>
        </div>

       <div class="row estrutura-container" data-aos="fade-up" data-aos-delay="200">
          <?php 
          for($i=1; $i < 11; $i++){
            echo "
          <div class='col-lg-4 col-md-6 estrutura-item filter-Escritório'>
            <img src='../assets/img/estrutura/testrutura-$i.jpg' class='img-fluid' alt='Sá e Ferreira'>
            <div class='estrutura-info'>
              <h4></h4>
              
              <a href='../assets/img/estrutura/estrutura-$i.jpg' data-gall='estruturaGallery' class='venobox preview-link' title='Foto Escritório $i'><i class='bx bx-plus'></i></a>
              
            </div>
          </div>

          ";
          }
          ?>
        </div>
      </div>
    </section>