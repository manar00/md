<footer class="footer-distributed">

  <div class="footer-left">

    <img class="logo" src="{{asset('/images/witlogo.png')}}" alt="MUNCHDAILY" style="width:166px; height:92px;">

    <p class="footer-links">
      <a href="{{url('/')}}">home</a>
      ·
      <a href="{{url('/about')}}">about</a>
      ·
      <a href="{{url('/werking')}}">werking</a>
      ·
      <a href="{{url('/articles')}}">munchies</a>
      @if(Auth::check())
    <a href="{{route('user.profile',Auth::user()->id)}}">profiel</a>
    @endif

    </p>

    <p class="footer-company-name">MunchDaily &copy; 2017</p>
  </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Keyserlei 12</span> Antwerpen, België</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>04 324 23 32</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="">MunchDaily@gmail.com</a></p>
    </div>

  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>MunchDaily</span>
      MunchDaily geeft de mogelijkheid om het teveel aan voedsel aan iemand anders te schenken.
    </p>

    <div class="footer-icons">

      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>

    </div>

  </div>

</footer>