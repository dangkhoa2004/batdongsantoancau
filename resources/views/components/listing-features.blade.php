<ul class="text-gray-700 mb-4">
    @foreach ($features as $feature)
        <li>
            <i class="fas fa-check-circle text-green-500 inline mr-2"></i>
            {!! $feature !!}
        </li>
    @endforeach
</ul>