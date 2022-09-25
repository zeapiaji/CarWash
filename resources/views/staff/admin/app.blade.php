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
            @include('staff.admin.partials.sidebar')
            @include('staff.admin.partials.navbar')
            <div class="content">
                @yield('content')
                @include('staff.admin.partials.footer')
            </div>
        </div>
    </main>

    @include('staff.partials.js')

</body>

</html>
