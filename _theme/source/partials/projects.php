<section id="projetos" class="projects">
  <div class="container">
    <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
      Projetos
    </h1>
    @if (is_array($project_list))
    <div class="row">
      @foreach ($project_list as $key => $project_item)
      <div class="col-12 col-sm-3" data-aos="fade-up">
        <a class="link-project" href="{{ $project_item['project_link']}}">
          <img class="img-fluid img-scale" src="{{ $project_item['project_img']['url']}}" alt="{{ $project_item['project_img']['alt']}}">
          <p class="name-project text-center">{{ $project_item['name_project']}}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  @endif
</div>
</section>
