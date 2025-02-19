{{-- @include('partials.search') --}}
@include('users.partials.hero')

{{-- <x-card> --}}
    @unless (count($jobs) == 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($jobs as $job)
                  <!-- Item 1 -->
                  <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex border-b border-gray-200 pb-4 mb-4">
                        <img
                            class="hidden w-24 h-24 mr-6 md:block"
                            src="images/acme.png"
                            alt=""
                        />
                        <div>
                            <h3 class="text-xl font-semibold">
                                <a href="show.html">Senior Laravel Developer</a>
                            </h3>
                            <div class="text-lg font-bold mb-2">Acme Corp</div>
                            <ul class="flex flex-wrap">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs"
                                >
                                    <a href="#">Laravel</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 mb-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-base mt-2">
                                <i class="fa-solid fa-location-dot"></i> Boston, MA
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    @else
        <p class="text-info">no job found</p>
    @endunless
{{-- </x-card> --}}








