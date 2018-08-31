@extends('_layouts.master')

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $page->title ?? 'Chez Marcel | Cazare în pensiune în centrul oraşului Sinaia' }}">
<meta name="twitter:description" content="<?php echo $page->description ?? 'Cazare în Sinaia, în vilă cu camere duble şi apartamente. Bucătărie, living şi foişor comune + Netflix gratuit.' ?>">
<meta property="twitter:image" content="{{ $page->baseUrl . '/assets/img/chez-marcel-card.jpg' }}">
<meta property="og:url" content="{{ $page->baseUrl }}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{ $page->title ?? 'Chez Marcel | Cazare în pensiune în centrul oraşului Sinaia' }}">
<meta property="og:description" content="<?php echo $page->description ?? 'Cazare în Sinaia, în vilă cu camere duble şi apartamente. Bucătărie, living şi foişor comune + Netflix gratuit.' ?>">
<meta property="og:image" content="{{ $page->baseUrl . '/assets/img/chez-marcel-card.jpg' }}">
@endsection

@section('content')

    <div class="mt-12 sm:mt-20">
        @yield('page')
    </div>

@endsection
