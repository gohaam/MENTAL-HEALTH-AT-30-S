<?php 
    $pageTitle = "Treatment Page - Healpoint";
    include './inc/inc_header.php'; 
?>
<div style="padding: 0 100px 0 100px;">
  <section>
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-6">
          <h3 class="tag-feeling">
            Apa yang sedang ka<a style="color: #BB8446;">mu rasakan saat ini ?</a>
          </h3>
          <span>
            Ayo, Kenali Perasaanmu!
          </span>
          <div class="container card-container mt-3">
            <div class="card card-content"
              data-title="Burnout: Kondisi kelelahan mental akibat tekanan pekerjaan atau aktivitas berlebihan." data-description="Burnout adalah kelelahan secara fisik, emosional, atau mental yang disertai dengan penurunan motivasi,kinerja, dan munculnya sikap negatif terhadapap diri sendiri maupun orang lain">
              <img src="assets/test.png" class="card-img-top" alt="Burnout">
              <div class="card-body">
                <p class="card-text">Burnout</p>
              </div>
            </div>
            <div class="card card-content"
              data-title="Stres: Perasaan tertekan atau tegang yang disebabkan oleh situasi yang sulit." data-description="Stres atau cekaman adalah gangguan mental yang dialami seseorang akibat adanya tekanan. Tekanan ini muncul dari kegagalan individu dalam memenuhi kebutuhan atau keinginannya. Sumber tekanan bisa berasal dari dalam diri atau dari luar.">
              <img src="assets/s3.png" class="card-img-top" alt="Stress">
              <div class="card-body">
                <p class="card-text">Stress</p>
              </div>
            </div>
            <div class="card card-content"
              data-title="Trauma: Pengalaman emosional yang intens yang bisa berdampak lama."
              data-description="Trauma psikologis adalah jenis disfungsi jiwa yang terjadi sebagai akibat dari peristiwa traumatik. Ketika trauma yang mengarah pada gangguan stres pasca trauma, disfungsi mungkin melibatkan perubahan fisik dan kimia di dalam otak, yang mengubah respon seseorang terhadap stres masa depan.
              ">
              <img src="assets/s2.png" class="card-img-top" alt="Trauma">
              <div class="card-body">
                <p class="card-text">Trauma</p>
              </div>
            </div>
            <div class="card card-content"
              data-title="Depresi: Gangguan suasana hati yang menyebabkan perasaan sedih yang mendalam." data-description="Depresi adalah gangguan mood, kondisi emosional berkepanjangan yang mewarnai proses berpikir, berperasaan dan berperilaku seseorang. Seseorang yang depresi memperlihatkan perasaan tidak berdaya dan kehilangan harapan, disertai perasaan sedih, kehilangan minat dan kegembiraan.">
              <img src="assets/s1.png" class="card-img-top" alt="Depresi">
              <div class="card-body">
                <p class="card-text">Depresi</p>
              </div>
            </div>
            <div class="card card-content"
              data-title="Gangguan Mood: Masalah suasana hati yang mempengaruhi keseharian." data-description="ekelompok kondisi gangguan mental dan perilaku yang ciri utamanya adalah gangguan suasana hati seseorang. Klasifikasi tersebut terdapat dalam Manual Diagnostik dan Statistik Gangguan Jiwa dan Klasifikasi Penyakit Internasional.">
              <img src="assets/s.png" class="card-img-top" alt="Gangguan Mood">
              <div class="card-body">
                <p class="card-text">Gangguan Mood</p>
              </div>
            </div>
          </div>

          <div id="info-box" class="info-box mt-4 ml-3">
            <h4 id="info-title"></h4>
            <p id="info-description"></p>
            <div class="container box-button" style="justify-content: space-around; align-items: center; display: flex; width: 80%;">
              <button type="button" class="btn btn-outline-dark">Baca Artikel</button>
              <button type="button" class="btn btn-outline-dark">Di Uji</button>
              <button type="button" class="btn btn-outline-dark">Curhat Ceria</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="assets/treatmentpage.png" class="img-fluid" alt="..." style="width:100%">
        </div>
      </div>
    </div>
  </section>
</div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
</body>

</html>