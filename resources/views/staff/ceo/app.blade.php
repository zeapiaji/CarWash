<!DOCTYPE html>
<html lang="en">
@include('staff.partials.head')

<body>

    <main class="main" id="top">
        <div class="container-fluid" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                  var container = document.querySelector('[data-layout]');
                  container.classList.remove('container');
                  container.classList.add('container-fluid');
                }
              </script>
            @include('staff.ceo.partials.sidebar')
            @include('staff.ceo.partials.navbar')
            <div class="content">
                @yield('content')
                @include('staff.ceo.partials.footer')
            </div>
        </div>
    </main>

    @include('staff.partials.js')
</body>

</html>
