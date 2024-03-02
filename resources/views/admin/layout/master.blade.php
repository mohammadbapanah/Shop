@include('admin.layout.head-tag')

<body dir="rtl">


    @include('admin.layout.header')

    <section class="body-container">
        @include('admin.layout.sidebar')

        <section id="main-body" class="main-body">
            @yield('content')
        </section>
    </section>







@include('admin.layout.script')
</body>

</html>
