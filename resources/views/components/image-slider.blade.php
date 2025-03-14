@props(['images' => []])

<div class="overflow-hidden rounded-lg relative max-w-screen-xl">
    <div class="slider flex transition-transform duration-500" id="slider">
        @foreach($images as $image)
            <img src="{{ asset('storage/' . $image) }}" class="slide w-full" loading="lazy">
        @endforeach
    </div>
    <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black text-white p-3 rounded-full hover:bg-gray-700 transition-colors" onclick="moveSlide(-1)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black text-white p-3 rounded-full hover:bg-gray-700 transition-colors" onclick="moveSlide(1)">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

<script>
    let counter = 0;
    const slides = document.querySelectorAll('.slide');
    const slider = document.querySelector('#slider');

    function moveSlide(direction) {
        counter += direction;
        if (counter < 0) {
            counter = slides.length - 1;
        } else if (counter >= slides.length) {
            counter = 0;
        }
        slider.style.transform = `translateX(${-counter * 100}%)`;
    }
</script>
