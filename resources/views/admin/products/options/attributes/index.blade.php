<x-admin.layout>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.products.options.attributes.create') }}" class="btn btn-primary me-2">Add
                Attribute</a>
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>Option</th>
                            <th>Attributes</th>
                            <th style="width: 5%">Edit</th>
                            <th style="width: 5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($options as $option)
                            @php $attributesCount = count($option->attributes); @endphp
                            @foreach ($option->attributes as $attribute)
                                <tr class="table-info">
                                    @if ($loop->first)
                                        <td rowspan="{{ $attributesCount }}">{{ $option->name_en }}</td>
                                    @endif
                                    <td>{{ $attribute->name_en }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.options.attributes.edit', $attribute->id) }}"
                                            class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <form
                                            action="{{ route('admin.products.options.attributes.destroy', $attribute->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @empty
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</x-admin.layout>
