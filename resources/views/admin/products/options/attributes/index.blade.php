<x-admin.layout>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.products.options.attributes.create') }}" class="btn btn-primary me-2">Add Attribute</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 3%">#</th>
                            <th>Attribute (English)</th>
                            <th>Attribute (Arabic)</th>
                            <th style="width: 5%">Edit</th>
                            <th style="width: 5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($attributes as $attribute)
                            <tr class="table-info">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $attribute->name_en }}</td>
                                <td>{{ $attribute->name_ar }}</td>
                                <td><a href="{{ route('admin.products.options.edit', $attribute->id) }}"
                                        class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.products.options.destroy', $attribute->id) }}"
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
