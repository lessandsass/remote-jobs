<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remote Jobs</title>
</head>
<body>

    <x-layout>

        <div class="space-y-10">

            <section class="text-center pt-6">
                <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

{{--                <form action="" class="mt-6">--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        name=""--}}
{{--                        id=""--}}
{{--                        placeholder="Web Developer . . ."--}}
{{--                        class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full max-w-xl"--}}
{{--                    >--}}
{{--                </form>--}}

                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input name="q" :label="false" placeholder="Web Developer" />
                </x-forms.form>

            </section>

            <section>
                <x-section-heading>Featured Jobs</x-section-heading>

                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                    @foreach($featuredJobs as $job)
                        <x-job-card :$job />
                    @endforeach
                </div>
            </section>

            <section>
                <x-section-heading>Tags</x-section-heading>

                <div class="mt-6 space-x-1">

                    @foreach($tags as $tag)
{{--                        <x-tag :tag="$tag" />--}}
                        <x-tag :$tag />
                    @endforeach

                </div>

            </section>

            <section>
                <x-section-heading>Recent Jobs</x-section-heading>
            </section>

            <section>
                <x-section-heading>Recent Jobs</x-section-heading>

                <div class="mt-6 space-y-6">
                    @foreach($jobs as $job)
                        <x-job-card-wide :$job />
                    @endforeach
                </div>

            </section>

        </div>

    </x-layout>

</body>
</html>
