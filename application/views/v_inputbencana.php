<!-- Ini adalah file view form input bencana -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Data Bencana</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'C_bencana/tambah_bencana'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_bencana"> Nama Bencana : </label>
                        <input type="text" class="form-control form-control-user" id="nama_bencana" name="nama_bencana" placeholder="Masukan nama bencana" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="daerah"> Daerah : </label>
                        <input type="text" name="daerah" class="form-control" id="daerah" cols="30" rows="6" placeholder="Masukkan daerah bencana" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun"> Tahun : </label>
                        <input type="text" name="tahun" class="form-control form-control-user" placeholder="Masukkan tahun terjadinya bencana" title="Isikan angka"  required>
                    </div>
                    <div class="form-group">
                        <label for="penyebab"> Penyebab : </label>
                        <input type="text" name="penyebab" class="form-control" id="penyebab" cols="30" rows="6" placeholder="Masukkan penyebab bencana" required>
                    </div>
                    <div class="form-group">
                        <label for="solusi"> Solusi : </label>
                        <input type="text" name="solusi" class="form-control" id="solusi" cols="30" rows="6" placeholder="Masukkan solusi bencana" required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>