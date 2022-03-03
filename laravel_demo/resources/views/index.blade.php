@extends('main')

@section('title','LA SHOOPA')
@section('style')

@endsection


@section('content')


    <div class="banner section">
        <div class="main">
            <h2>NEW SEASON ARRIVALS</h2>
            <h3>CHECK OUT ALL THE NEW TRENDS</h3>
            <a href="#">SHOP NOW</a>
        </div>
    </div>

    <?php
            
    $i = 0;
    
    ?>



    <div class="latest-product product section">
        <h3 style="text-align: center;">LATEST PRODUCTS</h3>
        <div class="main">
            <div class="inner-content">


                @foreach($data as $key=> $collection)
                    @if($collection->type == 1 && $i<=2)

                    <?php
                    
                    $i++;
                    
                    ?>
                    <div class="column" >

                    @if($collection->discount)
                        <p class="sale">-{{$collection->discount}}%</p>
                    @endif
                        <img src="{{ url('/assets/').'/'.$collection->image }}"  />
                        <p>{{ $collection->name }}</p>
                        <p>$<?= (int)$collection->price ?> .<sup> <?= (str_replace("0.","", round(($collection->price - (int)$collection->price) , 2)   ) )  ?> </sup></p>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>


    <div class="latest-product product section">
        <h3 style="text-align: center;">POPULAR PRODUCTS</h3>
        <div class="main">
            <div class="inner-content">


                @foreach($data as $key=> $collection)
                    @if($collection->type == 0 && $i<=5)

                    <?php
                    
                    $i++;
                    
                    ?>
                    <div class="column" >

                    @if($collection->discount)
                        <p class="sale">-{{$collection->discount}}%</p>
                    @endif
                        <img src="{{ url('/assets/').'/'.$collection->image }}"  />
                        <p>{{ $collection->name }}</p>
                        <p>$<?= (int)$collection->price ?> .<sup> <?= (str_replace("0.","", round(($collection->price - (int)$collection->price) , 2)   ) )  ?> </sup></p>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection