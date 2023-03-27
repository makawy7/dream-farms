<x-admin.layout>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.settings.address.create') }}" class="btn btn-primary me-2">Add Address</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 3%">#</th>
                            <th>ِAddress (English)</th>
                            <th>ِAddress (Arabic)</th>
                            <th>Phone Number</th>
                            <th style="width: 5%">Edit</th>
                            <th style="width: 5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($addresses as $address)
                            <tr class="table-info">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $address->address_en }}</td>
                                <td>{{ $address->address_ar }}</td>
                                <td>{{ $address->phone?->number }}</td>
                                <td><a href="{{ route('admin.settings.address.edit', $address->id) }}"
                                        class="btn btn-success">Edit</a></td>
                                <td><a href="{{ route('admin.settings.address.create') }}"
                                        class="btn btn-danger">Delete</a></td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin.layout>
