<?php 
    $pageTitle = "Klinik Page - Healpoint";
    include './inc/inc_header.php'; 
?>
<section>
    <div class="container-fluid tag-layanan " style="background-color:white;">
        <div class="row" style="background-color: white; padding: 30px 0 20px 0;">
            <div class="col-md-3 pl-5">
                <img src="assets/layananpage.png" width="200" class="img-thumbnail"
                    style="background-color: transparent; border: none;" alt="...">
            </div>
            <div class="col-md-6">
                <div class="container container-title-klinik">
                    <h2 class="text-center mt-5"
                        style=" background: linear-gradient(90deg, #000, #BB8446); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        Klinik Psikolog</h2>
                    <hr style=" border-width: 3px; width: 100%; background-color: #000;">
                </div>
            </div>
            <div class="col-md-3 pl-5">
                <img src="assets/layananpage1.png" width="270" style="background-color: transparent; border: none;"
                    class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container p-5">
        <div class="mb-5" style="justify-content: center; align-items: center; display: flex; flex-direction: column;">
            <button type="button" class="btn btn-primary mb-5"
                style="background-color: #FF9292; border: none; border-radius: 20px;" disabled>Psikolog</button>
            <h2>Mau Mulai Konsultasi?</h2>
            <h3>Yuk Kenali Psikolog Kami!</h3>
        </div>
        <div class="row">
            <?php
            require_once "./inc/inc_connection.php";
            $sql = "SELECT id, name, specialization, bio, contact, 
                    (SELECT image_path FROM psychologist_images WHERE psychologist_id = psychologists.id LIMIT 1) as image_path
                    FROM psychologists";
            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = htmlspecialchars($row['name']);
                    $specialization = htmlspecialchars($row['specialization']);
                    $contact = htmlspecialchars($row['contact']);
                    $imagePath = $row['image_path'] ? htmlspecialchars($row['image_path']) : 'https://via.placeholder.com/150';
                    $whatsappLink = "https://wa.me/" . preg_replace('/[^0-9]/', '', $contact);

                    echo '
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 text-center" style="width:300px">
                                <img src="' . $imagePath . '" class="card-img-top" alt="Psikolog Image" style="max-width: 80px; border-radius: 50%; border: none; object-fit:cover;">
                                <div class="card-body">
                                    <h5 class="card-title">' . $name . '</h5>
                                    <p class="card-text" style="font-size:13px">' . $specialization . '</p>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                         <a href="' . $whatsappLink . '" class="btn btn-primary" target="_blank" style="background-color:#FF9292; width:100px; border:none;  border-radius: 16px;">Detail</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="' . $whatsappLink . '" class="btn btn-primary" target="_blank" style="background-color:#92C9FF; width:100px; border:none; border-radius: 16px;">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
            } else {
                echo '<p class="text-center">Tidak ada data psikolog yang tersedia.</p>';
            }

            $koneksi->close();
            ?>
        </div>
    </div>

</section>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
-->
</body>

</html>