@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <h1>Let's Raise the Digital Bar for Digital Education.</h1>
    </div>
  </section>

  <section>


    <div class="container">
      <div class="section-title">
        <h2>Coming Soon</h2>
      </div>
       
        <div class="countdown" id="countdown"></div>
        <div class="message">
            We're working hard to bring you something amazing. Stay tuned for updates!
        </div>
        <form class="subscribe-form mt-4">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery Countdown Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script>
        // Initialize the countdown timer
        $('#countdown').countdown('2023/12/31', function(event) {
            $(this).html(event.strftime('%D days %H:%M:%S'));
        });
    </script>
</body>
</html>

  </section>
  
  
@endsection