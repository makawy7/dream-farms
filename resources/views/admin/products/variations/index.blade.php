<x-admin.layout>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.products.variations.create') }}" class="btn btn-primary me-2">Add Variation</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 3%">#</th>
                            <th>Variation (English)</th>
                            <th>Variation (Arabic)</th>
                            <th style="width: 5%">Edit</th>
                            <th style="width: 5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($variations as $variation)
                            <tr class="table-info">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $variation->name_en }}</td>
                                <td>{{ $variation->name_ar }}</td>
                                <td><a href="{{ route('admin.products.variations.edit', $variation->id) }}"
                                        class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.products.variations.destroy', $variation->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin.layout>
