@props([
    'heading' => '求人をお探しですか?',
    'subheading' => '今すぐ求人情報を投稿して、完璧な求人を見つけてください。',
])
<section class="container mx-auto my-6">
    <div class="bg-orange-500 text-white rounded p-4 flex items-center justify-between flex-col md:flex-row gap-4">
        <div>
            <h2 class="text-xl font-semibold">{{ $heading }}</h2>
            <p class="text-gray-200 text-lg mt-2">
                {{ $subheading }}
            </p>
        </div>
        <x-button-link url="/jobs/create" icon="edit">
            求人掲載
        </x-button-link>
    </div>
</section>
