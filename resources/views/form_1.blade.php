<!DOCTYPE html>
<html>

<head>
    @include('css')
    <style>
        .container {}

        /* 4 FORM PERTAMA */
        /* box bagian atas */
        .nomor_data {
            display: flex;
            align-items: center;
            margin-top: 40px;
        }

        /* tulisan */
        .nomor_data h5 {
            margin: 0;
            width: 150px;
            /* Adjust this width to align properly */
        }

        .nomor_data input[type='text'] {
            margin-left: 20px;
            width: 900px;
            height: 35px;
        }

        /* 4 FORM PERTAMA */

        /*  */

        /* SISANYA */
        .nomor_data1 {
            display: flex;
            align-items: center;
            margin-top: 70px;
        }

        .nomor_data1 h5 {
            margin: 0;
            width: 150px;
            /* Adjust this width to align properly */
        }

        .nomor_data1 input[type='text'] {
            margin-left: 20px;
            width: 300px;
            height: 35px;
        }

        /* END SISANYA */

        /* tombol */
        .tombol {
            margin-top: 40px;
        }


        /* garis */
        .horizontal-divider {
            border-top: 1px solid grey;
            width: 87%;
            position: absolute;
            top: 30.5%;
            left: 5%;
        }
    </style>
</head>

<body>
    @include('header')

    @include('sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <form action="{{url('upload_pertama')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <h3 style="color:white; text-align: center; font-size: 35px;">Input Data Kendaraan</h3>
                        <!-- 4 form pertama -->
                        <div class="nomor_data">
                            <h5>Nomor Polisi</h5>
                            <input type="text" name="nopol" required>
                        </div>
                        <div class="nomor_data">
                            <h5>Nama Pemilik</h5>
                            <input type="text" name="napem"required>
                        </div>
                        <div class="nomor_data">
                            <h5>Alamat</h5>
                            <input type="text" name="alamat"required>
                        </div>
                        <div class="nomor_data">
                            <h5>Pengguna Kendaraan</h5>
                            <input type="text" name="pengken"required>
                        </div>
                        <!-- 4 form pertama -->


                        <div class="horizontal-divider"></div>


                        <!-- sisa form -->
                        <div class="nomor_data1">
                            <h5>Merk</h5>
                            <input type="text" name="merk"required>
                            <h5 style="margin-left: 129px;">Warna</h5>
                            <input type="text" name="warna"required>
                        </div>
                        <div class="nomor_data1">
                            <h5>Type</h5>
                            <input type="text" name="type"required>
                            <h5 style="margin-left: 129px;">Bahan Bakar</h5>
                            <input type="text" name="bbm"required>
                        </div>
                        <div class="nomor_data1">
                            <h5>Jenis</h5>
                            <input type="text" name="jenis"required>
                            <h5 style="margin-left: 129px;">Warna TNKB</h5>
                            <input type="text" name="warnatnkb"required>
                        </div>
                        <div class="nomor_data1">
                            <h5>Model</h5>
                            <input type="text" name="model"required>
                            <h5 style="margin-left: 129px;">Tahun Registrasi</h5>
                            <input type="text" name="tahunreg"required>
                        </div>
                        <div class="nomor_data1">
                            <h5>Tahun Pembuatan</h5>
                            <input type="text" name="tahunpem"required>
                            <h5 style="margin-left: 129px;">Nomor BPKB</h5>
                            <input type="text" name="nomorbpkb"required>
                        </div>
                        <div class="nomor_data1">
                            <h5>Isi Silinder</h5>
                            <input type="text" name="isisilinder"required>
                            <h5 style="margin-left: 129px;">Berlaku S/D</h5>
                            <input type="text" name="berlaku"required>
                        </div>
                        <div class="nomor_data1">
                            <h5>Nomor Rangka</h5>
                            <input type="text" name="norang"required>
                            <h5 style="margin-left: 129px;">Nomor Mesin</h5>
                            <input type="text" name="nomes"required>
                        </div>

                        <div class="tombol">
                            <input class="btn btn-success" type="submit" value="Next">
                        </div>
                        <!-- sisa form -->
                </form>
            </div>

        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('main/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('main/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('main/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('main/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('main/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('main/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('main/js/charts-home.js')}}"></script>
    <script src="{{asset('main/js/front.js')}}"></script>
</body>

</html>