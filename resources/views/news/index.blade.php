

{!! $nome !!}
<br>
{{ $description }}
<br>
@json($posts)

<script>
    var posts = @json($posts);
    console.log(posts);
</script>

@{{ name }}
@{{ age }}
@{{ email }}

@php
$myVar = 10;

$myVar = $myVar + 10;

echo $myVar;
@endphp

{{-- Ficar só no blade php --}}

<!-- chegar no frontend -->