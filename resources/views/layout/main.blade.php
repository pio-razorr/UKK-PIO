<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>

    {{-- ======= Header ======= --}}
    @include('layout.navbar')
    {{-- End Header --}}

    {{-- ======= Hero Section ======= --}}
    <section id="hero">
        @yield('hero')
    </section>
    {{-- End Hero --}}

    {{-- ======= Main Section ======= --}}
    <main id="main">
        @yield('content')
    </main>
    {{-- End Main --> --}}

    {{-- ======= Footer ======= --}}
    @include('layout.footer')
    {{-- End Footer --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    @include('layout.script')

</body>

</html>
