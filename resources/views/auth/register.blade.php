<x-layout>

    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data" >
        <x-forms.input label="Name" name="name" placeholder="Name" />
        <x-forms.input label="Email" name="email" type="email" placeholder="Email" />
        <x-forms.input label="Password" name="password" type="password" placeholder="Password" />
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" />

        <hr class="border-teal-500">

        <x-forms.input label="Employer Name" name="employer" placeholder="Employer Name" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>

</x-layout>
