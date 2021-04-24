<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 prose">
                    <h1>Home</h1>
                    <strong>Welcome to our foundation!</strong>

                    <p>Our mission is lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore inventore minima molestias non quibusdam sequi tempore. Accusantium autem commodi, consectetur esse fuga, fugiat maiores, mollitia nesciunt nostrum quibusdam quidem voluptatibus.</p>

                    <h2>Mission</h2>

                    <img src="/static/mission.jpg" alt="Our mission">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam deserunt laboriosam modi
                        nam non odit ratione rerum ut vitae! Accusantium dolorum error impedit minus neque nobis officia
                        quae, voluptatem?
                    </p>
                    <p>Consequatur, cumque deleniti dolor earum laborum, minus mollitia nam nemo reiciendis tempora
                        temporibus tenetur unde! A alias amet architecto consequatur, inventore nam neque odio
                        perferendis perspiciatis, praesentium quaerat, quisquam unde!
                    </p>
                    <p>Aut autem distinctio ducimus earum facere fugiat fugit impedit iste minima molestiae possimus,
                        quis, repellendus voluptatum. Aperiam aspernatur dolorem expedita magni modi omnis praesentium
                        repellat ut? Aliquam optio praesentium quo.
                    </p>
                    <p>Dolorum facere mollitia, nemo nihil non quisquam rem saepe. Ab corporis dolore neque quibusdam
                        velit. Ab aliquid incidunt magni, minima mollitia obcaecati porro quae velit. Earum et
                        repudiandae saepe vero.
                    </p>

                    <h2>Our work</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam deserunt laboriosam modi
                        nam non odit ratione rerum ut vitae! Accusantium dolorum error impedit minus neque nobis officia
                        quae, voluptatem?
                    </p>
                    <p>Consequatur, cumque deleniti dolor earum laborum, minus mollitia nam nemo reiciendis tempora
                        temporibus tenetur unde! A alias amet architecto consequatur, inventore nam neque odio
                        perferendis perspiciatis, praesentium quaerat, quisquam unde!
                    </p>
                    <p>Aut autem distinctio ducimus earum facere fugiat fugit impedit iste minima molestiae possimus,
                        quis, repellendus voluptatum. Aperiam aspernatur dolorem expedita magni modi omnis praesentium
                        repellat ut? Aliquam optio praesentium quo.
                    </p>
                    <p>Dolorum facere mollitia, nemo nihil non quisquam rem saepe. Ab corporis dolore neque quibusdam
                        velit. Ab aliquid incidunt magni, minima mollitia obcaecati porro quae velit. Earum et
                        repudiandae saepe vero.
                    </p>

                    <h2>Meet the team</h2>
                    Read more about our foundation <a href="{{ route('foundation') }}">here</a> or check out some photos about our events in our
                    <a href="{{ route('photos') }}">image gallery</a>.
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
