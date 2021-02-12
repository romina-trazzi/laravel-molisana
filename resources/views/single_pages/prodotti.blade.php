    @extends('layout.core') <!-- Prende il layout predefinito in core.blade.php -->

    @section('title')   
        Prodotti
    @endsection
   
    @section('main')

    <main>

        <div>
            <h2> LE LUNGHE </h2>
    
    
            @foreach ($data as $dato) 
                {{ $dato['src'] }}
            @endforeach

        </div>


        <div>
            <h2> LE CORTE </h2>
    
    
            @foreach ($data as $dato) 
                {{ $dato['src'] }}
            @endforeach
            
        </div>

        <div>
            <h2> LE CORTISSIME </h2>
    
    
            @foreach ($data as $dato) 
                {{ $dato['src'] }}
            @endforeach
            
        </div>

    </main>


    @endsection
    
