<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<i class="bi bi-building-fill-add" style="color: white; font-size: 32px;"></i> -->

{{-- resources/views/components/app-logo.blade.php --}}
    <!-- <img 
    src="{{ asset('images/logo.jpg') }}"  
    alt="Logo de la app"  style="widht: 50px; height:50px;" >
     -->

<img 
    src="{{ asset('images/logo.jpg') }}"  
    alt="Logo de la app"
    {{ $attributes->merge(['class' => 'w-12 h-12 object-contain']) }} 
/>
