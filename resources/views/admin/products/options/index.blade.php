<x-admin.layout>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.products.options.create') }}" class="btn btn-primary me-2">Add Option</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 3%">#</th>
                            <th>Option (English)</th>
                            <th>Option (Arabic)</th>
                            <th style="width: 5%">Edit</th>
                            <th style="width: 5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($options as $option)
                            <tr class="table-info">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $option->name_en }}</td>
                                <td>{{ $option->name_ar }}</td>
                                <td><a href="{{ route('admin.products.options.edit', $option->id) }}"
                                        class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{ route('admin.products.options.destroy', $option->id) }}"
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
