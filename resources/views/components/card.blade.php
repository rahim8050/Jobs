<div {{$attributes->merge(['class'=>'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'custom-blue': '#1e40af',
              }
            }
          },
          plugins: [],
        }
      </script>
    {{ $slot }}
    </div>