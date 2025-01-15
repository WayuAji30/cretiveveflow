@props(['title', 'description', 'image', 'keywords', 'author'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">
    <title>{{ isset($title) ? $title . '' : 'CreativeFlow - Unleashing Your Creative Potential'}}</title>
    <meta property="og:title"
        content="{{ isset($title) ? $title . 'CreativeFlow - Unleashing Your Creative Potential' : ''}}" />
    <meta property="og:description" content="{{ isset($description) ? $description . '' : ''}}" />
    <meta property="og:type" content="website.blog" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ isset($image) ? $image . '' : ''}}" />
    <meta property="og:site_name" content="Creative Flow" />
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta name="keywords" content="{{ isset($keywords) ? $keywords . '' : ''}}">
    <meta name="author" content="{{ isset($author) ? $author . '' : ''}}">

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>

    {{ $slot }}

    <x-footer></x-footer>
</body>
<script src="./node_modules/preline/dist/preline.js"></script>

</html>