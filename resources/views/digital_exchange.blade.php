@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')

<br><br>
<section class="hero2">

    <div class="hero-bg"></div>
        <div class="hero-content">
            <h2>Let's Raise the Digital Bar for Digital Education.</h2>
        </div>

</section>

<section>
    <div class="container">
		<div class="card text-center">
			<div class="card-header">
			  Admin Controls
			</div>
			<div class="card-body">
			  <h5 class="card-title">DIGITAL EXCHANGE POST</h5>
			  {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
			  <a href="{{ route('d_exchange.codecreate') }}" class="btn btn-primary btn-block">Post On This Page</a>
			  <a href="{{ route('d_exchange.exchangedelete') }}" class="btn btn-danger btn-block">Delete A Post</a>
			</div>
		  </div>
	</div>
</section>
 <section>

    <div class="section-title">
        <h1>PROJECT MODEL</h1>
        <b>By: Prof.Eddy Owaga - Founding Director SCINOV AFRICA</b>
    </div>
    <div class="container">
        <!-- Message if a post is posted successfully -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif

        @if ($exchange)
            <div class="square">
                <div>
                    <img class="img-thumbnail" src="{{ asset('images/'.$exchange->image) }}" alt="Longtail boat in Thailand" style="max-height: 200px;">
                </div>
                <p style="text-align: justify;">
                    {{-- {!! nl2br(e(strip_tags(html_entity_decode($exchange->description)))) !!} --}}
                    {!! e(strip_tags(html_entity_decode($exchange->description ))) !!}
                    {{-- {!! $exchange->description !!} --}}
                </p>
                <p class="card-text"><small class="text-muted">Last updated {{ $exchange->updated_at->diffForHumans() }}</small></p>
                
            </div> 


        @else
            <div class="square">
                <div>
                <img class="img-thumbnail" src="{{ asset('img/slide/karatinadexc.JPG') }}" alt="Longtail boat in Thailand" style="max-height: 200px;">
                </div>
                
                <p style="text-align: justify;">
                    Amazon, Adobe etc with a free online placement
                    preparation course. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Officiis labore tempore exercitationem cupiditate distinctio dolore, soluta laborum. 
                    Illum autem voluptatum quis est et pariatur expedita incidunt, minima quidem ducimus nobis 
                    officiis, animi ad odit consectetur tenetur quisquam natus iusto soluta architecto blanditiis 
                    sequi fugiat. Quis praesentium error, quas doloremque, dignissimos animi dolores nesciunt tempore 
                    doloribus eius ab quidem. Sapiente et debitis dolorum vero voluptatum earum ut fuga sed exercitationem soluta. 
                    Harum voluptatibus, doloremque quia cumque at deserunt blanditiis consequatur quis error veniam 
                    perspiciatis minus impedit ratione officia eaque pariatur labore odio necessitatibus, 
                    dolores recusandae aut consequuntur exercitationem molestiae ipsam? Incidunt doloribus 
                    praesentium quas esse provident iusto consequatur necessitatibus quia ducimus! Tempora voluptate 
                    consequuntur, rem nesciunt modi commodi sit ullam fugiat, eos impedit quis autem aperiam vitae 
                    incidunt sunt cumque harum animi at beatae libero, expedita quidem quisquam voluptatibus iusto? 
                    Harum nobis quia molestiae soluta voluptatum eum quisquam? Animi nemo cumque natus blanditiis 
                    nisi maiores delectus suscipit! Asperiores harum delectus nemo iste, quo magnam praesentium, 
                    aperiam quos quod soluta fugiat dolores ad. Autem deleniti perspiciatis doloribus assumenda qui sunt, 
                    tempore incidunt eius laborum vero aliquam quod ea nobis, molestiae repellendus dicta earum magnam 
                    dolorum libero fuga sint ipsum aliquid! Facilis alias quod, tenetur beatae quidem ut maxime odio 
                    dignissimos! Excepturi incidunt nam voluptatum fuga repudiandae illum iure eveniet aliquam beatae 
                    alias maiores assumenda dolore tenetur nobis exercitationem, dolor reprehenderit architecto rem atque. 
                    Obcaecati nostrum qui ratione tenetur saepe dolorum porro sapiente minima cumque doloremque? 
                    Libero est adipisci, in quisquam error voluptatem perferendis. 
                    Optio cupiditate quasi velit labore ut beatae voluptatibus. 
                    Veniam ducimus tempore ad earum architecto cupiditate reiciendis quo vero molestias 
                    distinctio sequi id totam quis vitae sint nostrum, corporis mollitia laudantium suscipit 
                    voluptates atque facere? Vel earum adipisci, aut eos laborum assumenda alias nesciunt cumque 
                    aliquid eligendi ipsa cum quae.
                </p>

            </div>
        @endif

</div>

 </section>
@endsection