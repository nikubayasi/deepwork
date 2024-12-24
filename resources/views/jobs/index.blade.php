<x-layout>
    <h1 class="">Available Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
            <li><a href="{{ route('jobs.show', $job->id) }}" class="hover:text-cyan-500">{{ $job->title }}</a> - <span
                    class="text-xs">{{ $job->description }}</span></li>
        @empty
            <p>No Jobs Available</p>
        @endforelse
    </ul>
</x-layout>
