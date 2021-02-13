    @extends('layout.core') <!-- Prende il layout predefinito in core.blade.php -->

    @section('title')   
        Prodotti
    @endsection
   
    @section('main')
    <main>
        <div>
            <h2> LE LUNGHE </h2>
            
            
            @foreach($data as $dato)

                @if ($dato['tipo'] == "lunga")

                    <div class="box_pasta">
	                    <img src= "{{ $dato['src'] }}" alt = "formato di pasta lunga">
                    </div>

                @endif
            @endforeach 

        </div>

        <div>
            <h2> LE CORTE </h2>
            
            
            @foreach($data as $dato)

                @if ($dato['tipo'] == "corta")

                    <div class="box_pasta">
	                    <img src= "{{ $dato['src'] }}" alt = "formato di pasta corta">
                    </div>

                @endif
            @endforeach 

        </div>

        <div>
            <h2> LE CORTISSIME </h2>
            
            
            @foreach($data as $dato)

                @if ($dato['tipo'] == "cortissima")

                    <div class="box_pasta">
	                    <img src= "{{ $dato['src'] }}" alt = "formato di pasta corta">
                    </div>

                @endif
            @endforeach 

        </div>



    </main>
    @endsection
    
