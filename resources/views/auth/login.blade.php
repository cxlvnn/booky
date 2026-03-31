<x-layout>
<form action="/login" method="POST">
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 text-lg mx-auto">
        <legend class="fieldset-legend">Login</legend>

        <label class="label" for="email">Email</label>
        <input
        type="email"
        class="input"
        name="email"
        placeholder="Email" requied/>
        <x-error name="email"/>

        <label class="label">Password</label>
        <input
        type="password"
        class="input"
        name="password"
        placeholder="Password" requied/>
        <x-error name="password"/>

        <button class="btn btn-neutral mt-4">Login</button>
    </fieldset>
</form>
</x-layout>

