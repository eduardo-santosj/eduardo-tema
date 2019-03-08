<style>
  .tools-icon::before,
  .knowledge-icon::before {
    content: "";
    background: url({{ $check['sizes']['thumbnail'] }}) no-repeat;
    width: 30px;
    height: 30px;
    position: absolute;
    display: inline-block;
    vertical-align: sub;
  }
</style>
<section id="ferramentas" class="tools knowledge">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
          Ferramentas e Conhecimentos
        </h1>
      </div>
      <div class="desk hidden-xs">
        <div class="row">
          <div class="col-12 col-sm-6" data-aos="fade-up">
            @if (is_array($tools_list))
            @foreach ($tools_list as $key => $tools_item)
            <div class="col-12" data-aos="fade-up">
              <div class="tools-icon">
                <h2 class="tools-item">{{$tools_item['name_tools']}}</h2>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-12 col-sm-6" data-aos="fade-up">
            @if (is_array($knowledge_list))
            @foreach ($knowledge_list as $key => $knowledge_item)
            <div class="col-12" data-aos="fade-up">
              <div class="knowledge-icon">
                <h2 class="knowledge-item">{{$knowledge_item['name_knowledge']}}</h2>
                @php
                $array_knowledge = $knowledge_item['description_knowledge'];
                $array_knowledge = explode(",", $array_knowledge);
                @endphp
                @if (is_array($array_knowledge))
                <ul class="list-knowledge" data-aos="fade-up">
                  @foreach ($array_knowledge as $key => $description_item)
                  <li>
                    <p>{{$description_item}}</p>
                  </li>
                  @endforeach
                </ul>
                @endif
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
      <div class="desk visible-xs" data-aos="fade-up">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" >
                  Ferramentas
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    @if (is_array($tools_list))
                    @foreach ($tools_list as $key => $tools_item)
                    <div class="col-12">
                      <div class="tools-icon">
                        <h2 class="tools-item">{{$tools_item['name_tools']}}</h2>
                      </div>
                    </div>
                    @endforeach
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed">
                  Conhecimentos
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    @if (is_array($knowledge_list))
                    @foreach ($knowledge_list as $key => $knowledge_item)
                    <div class="col-12">
                      <div class="knowledge-icon">
                        <h2 class="knowledge-item">{{$knowledge_item['name_knowledge']}}</h2>
                        @php
                        $array_knowledge = $knowledge_item['description_knowledge'];
                        $array_knowledge = explode(",", $array_knowledge);
                        @endphp
                        @if (is_array($array_knowledge))
                        <ul class="list-knowledge">
                          @foreach ($array_knowledge as $key => $description_item)
                          <li>
                            <p>{{$description_item}}</p>
                          </li>
                          @endforeach
                        </ul>
                        @endif
                      </div>
                    </div>
                    @endforeach
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
