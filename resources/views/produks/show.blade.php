<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Laravel</title>
</head>

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- End Navbar --}}

    {{-- Content --}}
    <div class="section">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <h3>Table Produk</h3>
            </div>
            <div class="row mt-3">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $produks->nama_produk }} </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, nostrum.</p>
                                <p class="card-text">{{ $produks->merek->nama_merek}}</p>
                                <p class="card-text h6">tanggal {{ $produks->tanggal_produksi }}</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    
    {{-- End Content --}}

    {{-- Footer --}}
    @include('layouts.footer')
    {{-- End Footer --}}









































    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
