<x-layout>
<form action="/register" method="POST">
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 text-lg mx-auto">
        <legend class="fieldset-legend">Register</legend>

        <label class="label" for="name">Name</label>
        <input
        type="text"
        class="input @error('name') input-error @enderror"
        name="name"
        placeholder="Name" required/>
        <x-error name="name"/>

        <label class="label" for="email">Email</label>
        <input
        type="email"
        class="input @error('email') input-error @enderror"
        name="email"
        placeholder="Email" requied/>
        <x-error name="email"/>

        <label class="label">Password</label>
        <input
        type="password"
        class="input @error('password') input-error @enderror"
        name="password"
        placeholder="Password" requied/>
        <x-error name="password"/>

        <button class="btn btn-neutral mt-4" data-test="register-button">Sign Up</button>
    </fieldset>
</form>
</x-layout>
