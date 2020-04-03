<div id="{{ $id }}" class="row">

  @foreach($cards as $card)
  <div class="col-md-4 col-sm-6" style="margin-bottom: 20px">
   <!-- MENU THUMB -->
   <div class="menu-thumb">
    <a href="{{ asset($card->cover) }}" class="image-popup" title="{{ $card->judul }}">
     <img src="{{ asset($card->cover) }}" class="img-responsive" alt="">

     <div class="menu-info" style="text-align: right;">
      <a href="{{ $card->route }}" class="section-btn" target="_blank">{{ $card->judul }}</a>
      <div class="menu-item text-left">
       <h3>{{ $card->judul }}</h3>
       <p>{{ $card->description }}</p>
     </div>
     <div class="menu-price">
       <span></span>
     </div>
   </div>
 </a>
</div>
</div>                  
@endforeach

</div>
