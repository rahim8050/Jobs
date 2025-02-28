<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    laravel: "#ef3b2d",
                },
            },
        },
    };
</script>
{{$slot}}