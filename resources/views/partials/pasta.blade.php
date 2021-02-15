<h2> LE LUNGHE </h2>
<div class ="container_pasta">
    @foreach($data as $dato)
        @if ($dato['tipo'] == "lunga")
            <div class="box_pasta">
                <img src= "{{ $dato['src'] }}" alt = "formato di pasta lunga">
                <div class="content">
                    <p> "{{ $dato['titolo'] }}" </p>
                    <img src="{{ asset('img/icon.svg') }}">
                </div>  
            </div>
        @endif
    @endforeach 
</div>


<h2> LE CORTE </h2>
<div class ="container_pasta">
    @foreach($data as $dato)
        @if ($dato['tipo'] == "corta")
            <div class="box_pasta">
                <img src= "{{ $dato['src'] }}" alt = "formato di pasta corta">
                <div class="content">
                    <p>"{{ $dato['titolo'] }}"</p>
                    <img src="{{ asset('img/icon.svg') }}">
                </div>
            </div>
        @endif
    @endforeach 
</div>

<h2> LE CORTISSIME </h2>
<div class ="container_pasta">
    @foreach($data as $dato)
        @if ($dato['tipo'] == "cortissima")
            <div class="box_pasta">
                <img src= "{{ $dato['src'] }}" alt = "formato di pasta cortissima">
                <div class="content">
                    <p> "{{ $dato['titolo'] }}" </p>
                    <img src="{{ asset('img/icon.svg') }}">
                </div>
            </div>
        @endif
    @endforeach 
</div>