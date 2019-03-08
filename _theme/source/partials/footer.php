<footer class="content-info">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-sm title-copy">
        <p class="develop">{{ $name_develop }}</p>
      </div>
      <div class="col-12 col-sm brand-footer">
        <a href="{{ home_url('/') }}">
          <img src="{{ $footer['url'] }}" alt="">
        </a>
      </div>
      <div class="col-12 col-sm position-list">
        @if (is_array($networks_list))
        <ul class="list-inline">
          @foreach ($networks_list as $key => $networks_item)
          <li class="list-inline-item">
            <a href="{{ $networks_item['url_redes_sociais'] }}">
              <img src="{{ $networks_item['icon_networks']['url'] }}" alt="">
            </a>
          </li>
          @endforeach
          <li class="list-inline-item">
            @php
            $date = date("Y");
            @endphp
            <p>{{$date}}</p>
          </li>
        </ul>
        @endif
      </div>
    </div>
  </div>
</footer>
