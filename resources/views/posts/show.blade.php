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
                <h3>Show Artikel</h3>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <div class="card" style="width: 25rem;">
                        <img src="data:image/jpeg;base64,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"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title h3">{{ $posts->title }}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                blanditiis quod at vitae aspernatur, commodi
                                molestias labore repellat ad culpa. Ullam voluptatem natus dolorem soluta.</p>
                            <hr>
                            
                            
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
