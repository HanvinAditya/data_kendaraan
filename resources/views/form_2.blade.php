<!DOCTYPE html>
<html>

<head>
    @include('css')

    <style>
        .container {}

        .nomor_data,
        .nomor_data2 {
            display: flex;
            align-items: center;
            margin-top: 40px;
        }

        .nomor_data h5,
        .nomor_data2 h5 {
            margin: 0;
            width: 150px;
        }

        .nomor_data input[type='text'],
        .nomor_data2 input[type='text'],
        .nomor_data2 input[type='date'] {
            margin-left: 20px;
            width: 200px;
            height: 35px;
        }

        .nomor_data input[type='text'] {
            width: 940px;
        }

        .tombol {
            margin-top: 40px;
        }

        .horizontal-divider {
            border-top: 1px solid grey;
            width: 90%;
            position: absolute;
            top: 66%;
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
                <form action="{{url('upload_kedua')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <h3 style="color:white; text-align: center; font-size: 35px;">Administrasi Kendaraan</h3>

                        <div class="nomor_data">
                            <h5>Data Kepemilikan STNK</h5>
                            <input type="text" name="dakep" required>
                        </div>

                        <div class="nomor_data2">
                            <h5>Expired Kepemilikan STNK</h5>
                            <input type="date" id="expiredStnk" name="exp_stnk" required>
                            <h5 style="margin-left: 20px;">Tanggal Sekarang</h5>
                            <input type="text" id="tanggalSekarang" readonly>
                            <h5 style="margin-left: 20px;">Jatuh Tempo (hari)</h5>
                            <input type="text" id="jatuhTempo" readonly>
                        </div>

                        <div class="nomor_data">
                            <h5>Expired TNKB STNK</h5>
                            <input type="text" name="exp_tnkb" required>
                        </div>

                        <div class="nomor_data2">
                            <h5>Expired KIR</h5>
                            <input type="date" id="expiredKir" name="exp_kir" required>
                            <h5 style="margin-left: 20px;">Tanggal Sekarang</h5>
                            <input type="text" id="tanggalSekarangKir" readonly>
                            <h5 style="margin-left: 20px;">Jatuh Tempo (hari)</h5>
                            <input type="text" id="jatuhTempoKir" readonly>
                        </div>

                        <div class="nomor_data">
                            <h5>BPKB</h5>
                            <input type="text" name="bpkb" required>
                        </div>

                        <div class="nomor_data">
                            <h5>Kunci Duplikat</h5>
                            <input type="text" name="dup_key" required>
                        </div>

                        <h3 style="color:white; text-align: center; font-size: 35px; margin-top: 130px;">Asuransi Kendaraan</h3>

                        <div class="nomor_data2">
                            <h5>Periode Asuransi</h5>
                            <input type="date" id="expiredAsuransi" name="exp_asr" required>
                            <h5 style="margin-left: 20px;">Tanggal Sekarang</h5>
                            <input type="text" id="tanggalSekarangAsuransi" readonly>
                            <h5 style="margin-left: 20px;">Jatuh Tempo (hari)</h5>
                            <input type="text" id="jatuhTempoAsuransi" readonly>
                        </div>

                        <div class="nomor_data">
                            <h5>Own Risk Q1</h5>
                            <input type="text" name="or_q1">
                        </div>

                        <div class="nomor_data">
                            <h5>Own Risk Q2</h5>
                            <input type="text" name="or_q2">
                        </div>

                        <div class="nomor_data">
                            <h5>Own Risk Q3</h5>
                            <input type="text" name="or_q3">
                        </div>

                        <div class="nomor_data">
                            <h5>Own Risk Q4</h5>
                            <input type="text" name="or_q4">
                        </div>

                        <div class="tombol">
                            <input class="btn btn-success" type="submit" value="Next">
                        </div>
                    </div>
                </form>
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

        <script>
            // Function to set today's date
            function setTodayDate() {
                const today = new Date().toISOString().split('T')[0];
                document.getElementById('tanggalSekarang').value = today;
                document.getElementById('tanggalSekarangAsuransi').value = today;
                document.getElementById('tanggalSekarangKir').value = today;
            }

            // Function to set the jatuh tempo days based on expired STNK date
            function setJatuhTempo() {
                const expiredStnkDate = new Date(document.getElementById('expiredStnk').value);
                const today = new Date(document.getElementById('tanggalSekarang').value);
                const timeDiff = expiredStnkDate - today;
                const dayDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)); // Convert time difference to days
                document.getElementById('jatuhTempo').value = dayDiff + " hari";
            }

            // Function to set the jatuh tempo days based on expired KIR date
            function setJatuhTempoKir() {
                const expiredKirDate = new Date(document.getElementById('expiredKir').value);
                const today = new Date(document.getElementById('tanggalSekarangKir').value);
                const timeDiff = expiredKirDate - today;
                const dayDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)); // Convert time difference to days
                document.getElementById('jatuhTempoKir').value = dayDiff + " hari";
            }

            // Function to set the jatuh tempo days based on expired insurance date
            function setJatuhTempoAsuransi() {
                const expiredAsuransiDate = new Date(document.getElementById('expiredAsuransi').value);
                const today = new Date(document.getElementById('tanggalSekarangAsuransi').value);
                const timeDiff = expiredAsuransiDate - today;
                const dayDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)); // Convert time difference to days
                document.getElementById('jatuhTempoAsuransi').value = dayDiff + " hari";
            }

            document.getElementById('expiredStnk').addEventListener('change', setJatuhTempo);
            document.getElementById('expiredKir').addEventListener('change', setJatuhTempoKir);
            document.getElementById('expiredAsuransi').addEventListener('change', setJatuhTempoAsuransi);

            // Set today's date on load
            window.onload = setTodayDate;
        </script>

    </div>
</body>

</html>
