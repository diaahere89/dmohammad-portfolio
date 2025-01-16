<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.header')

    <style>
        .container {
            margin-top: 200px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .display-1 {
            font-size: 6rem;
            font-weight: 700;
            color: #343a40;
        }
        .lead {
            font-size: 1.25rem;
            color: #6c757d;
        }
    </style>

    <!-- contact section -->
    <section class="404 active">
        <div class="container" style="text-align: center;">
            <h1 class="display-1">404</h1>
            <p class="lead">Oops! The page you are looking for cannot be found.</p>
        </div>
    </section>

    
    @include('partials.scripts')

</body>

</html>
