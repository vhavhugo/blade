

{!! $nome !!}
<br>
{{ $description }}
<br>
@json($posts)

<script>
    var posts = @json($posts);
    console.log(posts);
</script>
