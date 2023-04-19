<x-admin.layout>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.products.categories.create') }}" class="btn btn-primary me-2">Add Category</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 3%">#</th>
                            <th>Category (English)</th>
                            <th>Category (Arabic)</th>
                            <th style="width: 5%">Edit</th>
                            <th style="width: 5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pcategories as $category)
                            <tr class="table-info">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name_en }}</td>
                                <td>{{ $category->name_ar }}</td>
                                <td><a href="{{ route('admin.products.categories.edit', $category->id) }}"
                                        class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.products.categories.destroy', $category->id) }}"
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
