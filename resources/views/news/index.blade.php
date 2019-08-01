<!DOCTYPE html>
<html lang="en">

@include('partials.head')

  <body>
  @include('partials.header')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          @each('main.post', $posts, 'post', 'main_empty_post')
          {{--@includeFirst(['main.paginate', 'blog.paginate', 'partials.paginate'], ['first'=>'Primeiro', 'last'=>'Último'])--}}

        {{--@includeIf('partials.paginate')--}}
{{--        @includeWhen($paginate == true, 'partials.paginate')--}}


        </div>
      </div>
    </div>

    <hr>
    @include('partials.footer',['copyright' => 'TIIC todos os direitos reservados @ 2019'])

  </body>

</html>
