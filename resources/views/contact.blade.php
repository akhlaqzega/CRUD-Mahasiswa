@extends('layout')

@section('konten')
<div class="container  mt-5 fade-in">
   
    <div class="row">
        <div class="col-md-6 mb-4">
            <h4>Informasi Kontak</h4>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <i class="fas fa-map-marker-alt fa-lg"></i> 
                    <strong>Alamat:</strong> Jl. Contoh No. 123, Kota, Negara
                </li>
                <li class="mb-3">
                    <i class="fas fa-phone fa-lg"></i> 
                    <strong>WhatsApp:</strong> <a href="https://wa.me/082288616386" target="_blank">082288616386</a>
                </li>
                <li class="mb-3">
                    <i class="fas fa-envelope fa-lg"></i> 
                    <strong>Email:</strong> <a href="mailto:akhlaqsiddiqzega@gmail.com" target="_blank">akhlaqsiddiqzega@gmail.com</a>
                </li>
                <li class="mb-3">
                    <i class="fab fa-facebook fa-lg"></i> 
                    <strong>Facebook:</strong> <a href="https://www.facebook.com/awal.zega.1?mibextid=ZbWKwL" target="_blank">Awal Zega</a>
                </li>
            </ul>
        </div>
        <div class="col-md-6 mt-5 fade-in">
            <h4 class="mb-4">Peta Lokasi</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.073257293716!2d144.95373541583938!3d-37.8162799797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0c6d9a69%3A0x3da23cba5b2c6171!2sMelbourne%20Central!5e0!3m2!1sen!2sau!4v1614367372000!5m2!1sen!2sau" 
                width="80%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection
