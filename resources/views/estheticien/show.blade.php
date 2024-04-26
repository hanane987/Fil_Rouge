<x-app-layout>

    <div class="container">
        <h1>Estheticien Profile</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">First Name</th>
                    <td>{{ $estheticien->first_name ?? 'N/A' }}</td>
                </tr>
               
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $estheticien->user->email ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th scope="row">Specialization</th>
                    <td>{{ $estheticien->specialization ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th scope="row">Availability</th>
                    <td>{{ $estheticien->availability ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td>{{ $estheticien->description ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th scope="row">Work Name</th>
                    <td>{{ $estheticien->work_name ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th scope="row">Price</th>
                    <td>{{ $estheticien->price ?? 'N/A' }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('estheticien.edit') }}" class="btn btn-primary">Edit Profile</a>
    </div>
  

</x-app-layout>