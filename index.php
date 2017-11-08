  <?php 
    include 'header.php';
  ?>

  </head>
  <body class='main page'>
    <!-- Navbar -->
    <?php 
      include 'navbar.php';
    ?>

    <div id='wrapper'>
      <!-- Sidebar -->
      <?php  
        include 'sidebar.php';
      ?>

      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Dashboard</li>
        </ul>
        <div id='toolbar'>
          
        </div>
      </section>

      <!-- Content -->
      <div id='content'>

        <!-- Panel -->
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-bookmark icon-large'></i>
            Description
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' data-toggle='collapse' href='#' title='Toggle' data-target='#txtdescription'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
          <div id="txtdescription" class='panel-body collapse in'>
            <div class='page-header'>
              <h4>User statics</h4>
            </div>

            <div class='row text-center'>
              Pengumpulan dan Prapemrosesan Dokumen

              Kumpulan dokumen dalam korpus ini didapat dari sumber berikut.

                  terjemahan artikel PAN CLEF,
                  blog-blog berbahasa Indonesia,
                  korpus-korpus lain (artikel Kompas & ulasan film),
                  artikel pilihan Wikipedia Bahasa Indonesia, dan
                  novel berbahasa Indonesia (lokal & terjemahan).

              Setelah dikumpulkan, dilakukan tahap prapemrosesan pada setiap dokumen dengan langkah-langkah berikut.

                  melakukan normalisasi agar setiap baris pada dokumen mengandung maksimal 100 karakter.
                  menghilangkan spasi berlebih di akhir paragraf, antar paragraf, dan sebelum tanda baca.
                  mengganti beberapa karakter non-ASCII menjadi karakter ASCII, contohnya karakter ” pada isi dokumen diganti menjadi karakter ".

            </div>
          </div>
        </div>

        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-bookmark icon-large'></i>
            Description
            <div class='panel-tools'>
              <div class='btn-group'>
                <a class='btn' data-toggle='collapse' href='#' title='Toggle' data-target='#txtNgram'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
          <div id='txtNgram' class='panel-body collapse in'>          

            <div class='page-header'>
              <h4>User statics</h4>
            </div>
            <div class='row text-center'>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='50'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='75'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='35'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='85'>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php 
      include 'footer.php';
    ?>
  </body>
</html>
