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
                <h3>Detail Produk</h3>
            </div>
            <div class="row mt-3 shadow-lg">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/product/' . $produks->cover) }}" width="100" alt=""
                                class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-8 ">
                            <div class="card-body ">
                                <h1 class="card-title">{{ $produks->name_product }} </h1>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Fugiat
                                    autem
                                    voluptatem consectetur omnis totam commodi dolorum quae maxime voluptate architecto,
                                    numquam id ipsa. Non accusantium </p>
                                <p>
                                <div class="d-inline text-warning ">Rating : 4.5</div>
                                <div class="d-inline ">| 115 Penilaian | </div>
                                <div class="d-inline ">567 Terjual</div>
                                </p>

                                <p class="card-text h4">Rp.{{ $produks->price }}</p>
                                <div class="vstack gap-2 col-md-6 mx-auto mt-5">
                                    <a href="{{url('produks')}}" class="btn btn-primary p-2 pl-3 pr-3">back</a>
                                    <button type="sumbit" class="btn btn-warning p-2 pl-4 pr-4">Add to Cart</button>
                                    <button class="btn btn-success p-2 pl-3 pr-3">Buy</button>
                                </div>
                            </div>
                        </div>
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
