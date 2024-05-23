<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <ul>
    @foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{$job/['id']}}" class="text-blue500 hover:underline">
            <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} Per Year
        </a>
    </li>
    @endforeach

</ul>
</x-layout>
