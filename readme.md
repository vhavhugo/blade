- Pegando array com json no javascript
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheça as novidades do php...'
            ],
            [
                'subject' => 'Novidades do C#',
                'content' => 'Conheça as novidades do C#...'
            ]
        ]
        
        <script>
            var posts = @json($posts);
            console.log(posts);
        </script>