<x-layout>
<div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @empty
        <tr>
        <th></th>
        <td></td>
        <td></td>
        </tr>
        @endforelse
    </tbody>
  </table>
</div>
</x-layout>
