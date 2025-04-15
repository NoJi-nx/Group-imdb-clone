<!DOCTYPE html>
<html lang="sv">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    @vite(['resources/js/app.js'])
</head>

<body>
    <main>
        <!--Header filen-->
        @include('header')

        <h1>Dashboard admin</h1>
        <p>Här finns redigera reviews, väg till users och väg till movies samt möjlighet att redigera egen profil</p>
        <!--Footer-->
        @include('footer')
    </main>
</body>

</html>