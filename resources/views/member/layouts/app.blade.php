<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    @include('member.partials.head')
</head>

<body>

    <main class="main" id="top">

            <div class="content">

                @include('member.partials.topbar')

                @include('member.partials.navbar')

                    @yield('content')

                @include('member.partials.footer')
            </div>

    </main>

    @extends('member.partials.js')
</body>

</html>
